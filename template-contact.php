<?php 
/*
	Template Name: Contact
*/
get_header(); ?>

<section class="inner-page inner-page-2">
	<div class="container">
		<div class="row">
			<h2 class="orange"><?php echo get_the_title(); ?></h2>
		</div>
		<div class="row one-twoThird">
			<?php if (get_field('contact_address', 'option')) {?>
			<div class="one-third">
				<address><span><?php echo get_field('address_title', 'option'); ?></span>
				 <?php echo get_field('contact_address', 'option'); ?>
				</address>
			</div>
			<?php } ?>
			<div class="two-third">
				<form class="contact-form" name="contactForm" onsubmit="return validateForm()" method="POST">
					<div class="form-input-area row">
						<div class="form-row">
							<input type="text" name="flname" placeholder="Your Name">
						</div>
						<div class="form-row">
							<input type="text" name="email" placeholder="Your Email Address">
						</div>
						<div class="form-row">
							<textarea name="message" cols="30" rows="10" placeholder="Your Message"></textarea>
						</div>
					</div>
					<div class="row">
						<input type="hidden" name="receiver-email" value="<?php echo get_field('form_email', 'option'); ?>">
						<input type="hidden" name="siteurl" value="<?php bloginfo('template_url'); ?>">
						<input type="submit" value="Send">
					</div>
					<div class="row">
						<ol id="form-validation" class="form-validation"></ol>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>