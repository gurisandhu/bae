<?php 
/*
Template Name: About Us
*/
get_header();
 ?>




<section class="inner-page inner-page-2">
	<div class="container">
		<div class="row">
			<h2 class="orange"><?php echo get_the_title(); ?></h2>
		</div>
		<?php $thumbnail_id = get_post_thumbnail_id( $post->ID );
				$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
				 ?>
		<?php if($thumbnail_id) {?>
			<div class="custom-row">
				<figure>
					<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php echo $alt; ?>">
					<figcaption>Caption: <?php the_post_thumbnail_caption(); ?></figcaption>
				</figure>
			</div>
		<?php } ?>
		<?php if (have_posts()){ ?>
			<div class="custom-row">
				<?php
					while(have_posts()) { the_post(); 
						the_content();
					} ?>
			</div>
		<?php } ?>	
		<div class="contributors row">
			<?php if (get_field('about_row_title')) {?>
				<div class="row">
					<h2 class="orange"><?php echo get_field('about_row_title'); ?></h2>
				</div>
			<?php } ?>

			<?php if(have_rows('about_contributors')) {?>
			<div class="row">
				<?php while(have_rows('about_contributors')) { the_row(); ?>
				<div class="col-3">
					<?php $contributor_image = get_sub_field('contributor_image'); ?>
					<div class="contributor-image" style="background-image:url('<?php echo $contributor_image['url']; ?>');"></div>
					<div class="contributor-name">
						<?php echo get_sub_field('contributor_name'); ?>
						<span class="orange"><?php echo get_sub_field('contributor_position'); ?></span>
					</div>
					<div class="contributor-content">
						<p><?php echo get_sub_field('contributor_bio'); ?></p>
					</div>
				</div> <!-- col-3 -->
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>


<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>