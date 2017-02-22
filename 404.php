<?php get_header(); ?>


<section class="inner-page inner-page-2">
	<div class="container">
		<h3>404: Page not found</h3>
		<p>Whoops. looks like the page you were looking for does not exit. Maybe try checking in Menu or <a href="<?php echo esc_url( home_url('')); ?>/contact/">contact us</a>.</p>
	</div>
</section>

<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>