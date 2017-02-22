<?php 
/*
	Template Name: Contact
*/
get_header(); ?>

<section class="inner-page inner-page-2">
	<div class="container">
		<div class="row">
			<h2 class="orange">Contact Flight Path</h2>
		</div>
		<div class="row one-twoThird">
			<?php if (get_field('contact_address')) {?>
			<div class="one-third">
				<address><span>Address</span>
				 <?php echo get_field('contact_address'); ?>
				</address>
			</div>
			<?php } ?>
			<div class="two-third">
				<form action="" class="contact-form">
					<div class="form-input-area row">
						<div class="form-row">
							<input type="text" name="fname" placeholder="Your Name">
						</div>
						<div class="form-row">
							<input type="text" name="fname" placeholder="Your Email Address">
						</div>
						<div class="form-row">
							<textarea name="ymessage" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
						</div>
					</div>
					<div class="row">
						<input type="submit" value="Send">
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