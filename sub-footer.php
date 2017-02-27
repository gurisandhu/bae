<!--++++++++++++++ 
Section: footer
++++++++++++++ -->
<footer>
	<div class="container">
		<!-- <div class="col-3">
			<h6>Archive</h6>
			<ul>
				<li>
					<a href="#">Month, year</a>
				</li>
				<li>
					<a href="#">Month, year</a>
				</li>
				<li>
					<a href="#">Month, year</a>
				</li>
				<li>
					<a href="#">Month, year</a>
				</li>
				<li>
					<a href="#">Month, year</a>
				</li>
				<li>
					<a href="#">Month, year</a>
				</li>
			</ul>
		</div> -->
		<?php if(get_field('contact_address', 'option')) {?>
		<div class="col-2">
			<h6>Contacts</h6>

			<?php echo get_field('contact_address', 'option'); ?>
		</div>
		<?php } ?>
		<?php if(get_field('news_releases', 'option')) {?>
		<div class="col-2">
			<h6>News Releases</h6>
			<p><?php echo get_field('news_releases', 'option'); ?></p>
		</div>	
		<?php } ?>	
		<!-- <div class="col-4">
			<h6>News Releases</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis earum eaque quasi. Voluptatum dicta nam, hic enim. Aut, possimus impedit ducimus. Recusandae quaerat aut distinctio esse iste exercitationem fugit facilis!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos id quae culpa laborum, aliquid et, nam. Eveniet, minus velit, voluptates eos dicta inventore officia maxime laborum ullam dolor natus corrupti.</p>
		</div>	 -->
	</div>
</footer>
<?php if (have_rows('social_media', 'option')) { ?>	
	<section class="social-wrapper">
		<div class="container">
			<ul class="social">
				<?php while(have_rows('social_media', 'option')) { the_row(); ?>
				<li><a href="<?php echo get_sub_field('social_link', 'option'); ?>" target="_blank"><i class="fa fa-<?php echo get_sub_field('social_icon', 'option'); ?>"></i></a></li>
				<?php } ?>
			</ul>
		</div>
	</section>
<?php } ?>