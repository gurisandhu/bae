<?php 
// *************************
// Trims the text
// *************************
function trimText($string, $repl, $limit){
    if(strlen($string) > $limit){
        return substr($string, 0, $limit) . $repl;
    }
    else{
        return $string;
    }
}


// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************

function my_styles_scripts(){
    wp_enqueue_style('base-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.7.0');

    wp_enqueue_style( 'bae-style' , get_template_directory_uri() . '/style.css', array(), '2.0.0', false, 'all');

    wp_enqueue_script( 'bae-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), true, 'all');

    wp_enqueue_script( 'bae-captcha', 'https://www.google.com/recaptcha/api.js', array(), true, 'all');
  
    wp_enqueue_script( 'bae-script', get_bloginfo('template_directory') . '/compressed/script.js', array(), true, 'all');
}
add_action('template_redirect', 'my_styles_scripts');
//end of styles scripts

// *************************
// Display Main Navigation in admin section
// *************************

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Show tumbnails (feature images)
add_theme_support('post-thumbnails');

// *************************
// FlightPath | News | Custom post
// *************************
  add_action( 'init', 'create_stories');

  function create_stories() {
    register_post_type( 'feature_stories',

      array(
        'labels'    => array(
            'name'                  =>  'Stories', 'post type general name',
            'singular_name'         =>  'Story', 'post type singular name',
            'add_new'               =>  'Add Story',
            'add_new_item'          =>  'Add New Story',
            'edit'                  =>  'Edit',
            'edit_item'             =>  'Edit Story',
            'all_items'             =>  'All Stories',
            'new_item'              =>  'New Story',
            'view'                  =>  'View',
            'view_item'             =>  'View Story',
            'search_items'          =>  'Search Stories',
            'not_found'             =>  'No Stories Found',
            'not_found_in_trash'    =>  'No Stories found in Trash',
            'parent'                =>  'Parent Story'
        ),
            // 'public'            =>  true,
            'menu_position'     =>  2,
            // 'supports'          =>  array( 'title', 'editor', 'comments', 'thumbnail'),
            'taxonomies'        =>  array( 'create_my_taxonomies'),
            'menu_icon'         =>  'dashicons-megaphone',
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            // 'has_archive'       => true,
            // 'hierarchical'      => true,
            'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', ),

        // 'taxonomies'            => array('hire_taxonomies'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        // 'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        )
      );

  }

  add_action( 'init', 'create_my_taxonomies', 1);

function create_my_taxonomies() {
    register_taxonomy(
            'stories_category',
            'feature_stories',
            array(
                'labels'   => array(
                    'name'  => 'Story Categories',
                    'add_new_item' =>   'Add New Category',
                    'edit_item'    =>  'Edit Category',
                    'new_item_name' =>  'New Category',
                    'new_item'              =>  'New Category',
                    'view'                  =>  'View',
                    'view_item'             =>  'View Category',
                    'search_items'          =>  'Search Categories',
                    'not_found'             =>  'No Categories Found',
                    'not_found_in_trash'    =>  'No Categories found in Trash',
                    ),
                'show_ui'   => true,
                'show_tagcloud'     => false,
                'hierarchical'      => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => true
                )
        );

 }

// *************************
//  Admin menu 
// *************************
function remove_menus(){
  remove_menu_page( 'edit.php' );                   //Posts  
}
add_action( 'admin_menu', 'remove_menus' );

// *************************
// Contact info
// *************************

if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Misc. Info',
      'menu_title'  => 'Misc. Info',
      'menu_slug'   =>  'misc-info-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-share',
      'redirect'    =>  false,
      'show_in_nav_menus'          => true,
      'position'	=> 	3
    ));
  add_filter('menu_order', 'custom_menu_order', 3);
}

// *************************
// Add current-menu-item in custom taxonomy category
// *************************
// Get menus to play nicely with the submenu script
// blissfully borrowed from Post Type Archive Links plugin, thanks @stephenharris, @F J Kaiser, @ryancurban
function mrw_tax_archive_current( $items ) {
    foreach ( $items as $item ) {
        if ( 'taxonomy' !== $item->type )
            continue;

        global $post;

        if( !$post )
            continue;

        $taxonomy = $item->object;
        $taxonomy_term = $item->object_id;
        if (
            ! is_tax( $taxonomy, $taxonomy_term )
            AND ! has_term( $taxonomy_term, $taxonomy, $post->ID )
        )
            continue;

        // Make item current
        $item->current = true;
        $item->classes[] = 'current-menu-item';

        // Loop through ancestors and give them 'parent' or 'ancestor' class
        $active_anc_item_ids = mrw_get_item_ancestors( $item );
        foreach ( $items as $key => $parent_item ) {
            $classes = (array) $parent_item->classes;

            // If menu item is the parent
            if ( $parent_item->db_id == $item->menu_item_parent ) {
                $classes[] = 'current-menu-parent';
                $items[ $key ]->current_item_parent = true;
            }

            // If menu item is an ancestor
            if ( in_array( intval( $parent_item->db_id ), $active_anc_item_ids ) ) {
                $classes[] = 'current-menu-ancestor';
                $items[ $key ]->current_item_ancestor = true;
            }

            $items[ $key ]->classes = array_unique( $classes );
        }
    }

    return $items;
}
add_filter('wp_nav_menu_objects','mrw_tax_archive_current');

function mrw_get_item_ancestors( $item ) {
    $anc_id = absint( $item->db_id );

    $active_anc_item_ids = array();
    while (
        $anc_id = get_post_meta( $anc_id, '_menu_item_menu_item_parent', true )
        AND ! in_array( $anc_id, $active_anc_item_ids )
    )
        $active_anc_item_ids[] = $anc_id;

    return $active_anc_item_ids;
}

 ?>