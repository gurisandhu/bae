<?php get_header(); ?>


<section class="inner-page inner-page-2">
	<div class="container">
		<h1><?php echo get_the_title(); ?></h1>
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
		<?php if (have_posts()) {?> 
			<div class="custom-row">
				<?php while(have_posts()) { the_post();  ?>
				<?php the_content(); } ?>
			</div>
		<?php } ?>
	</div>
</section>

<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>