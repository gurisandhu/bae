<?php get_header(); ?>

<!--++++++++++++++ 
Button: Don't miss a story
++++++++++++++ -->

<button class="button-1 dontmiss">Don't miss a story <strong>sign up</strong></button>

<!--++++++++++++++ 
Section: Feature Stories
++++++++++++++ -->
<section class="feature-stories">
	<a href="#" class="col-3" style="background-image: url('compressed/images/feature-1.png');">
		<div class="table">
			<div class="table-cell">
				<h2>Feature story #1</h2>
				<div class="small-font">1 Hour Ago</div>
				<?php $textToTrim = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure non nesciunt dolorum dignissimos saepe eos quas! Quaerat voluptatibus atque deserunt, ratione iusto provident, dicta magnam fuga animi cum perspiciatis, minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita aut quos, fugiat laboriosam esse soluta at dolores. Id, cum voluptatem nihil quam dolores omnis harum, asperiores recusandae, eaque quia, fuga.';
						$textTrimmed = trimText($textToTrim, '...', 430);
				 		?>
						<p><?php echo $textTrimmed; ?></p>
				<button type="button" class="button-1">Read More</button>
			</div>
		</div>	
	</a>
	<a href="#" class="col-3" style="background-image: url('compressed/images/feature-2.png');">
		<div class="table">
			<div class="table-cell">
				<h2>Feature story #2</h2>
				<div class="small-font">1 Hour Ago</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem odit, iure commodi voluptate, hic blanditiis maxime aperiam explicabo autem minus. Nesciunt doloremque labore dolor quaerat ullam aliquam odio, enim fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vel repellendus id sint sed? Natus delectus ad magni veniam totam voluptatibus, esse, alias repudiandae ipsa a beatae placeat veritatis sit!</p>
				<button type="button" class="button-1">Read More</button>
			</div>
		</div>	
	</a>
	<a href="#" class="col-3" style="background-image: url('compressed/images/feature-3.png');">
		<div class="table">
			<div class="table-cell">
				<h2>Feature story #3</h2>
				<div class="small-font">1 Hour Ago</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem odit, iure commodi voluptate, hic blanditiis maxime aperiam explicabo autem minus. Nesciunt doloremque labore dolor quaerat ullam aliquam odio, enim fugiat! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi vel repellendus id sint sed? Natus delectus ad magni veniam totam voluptatibus, esse, alias repudiandae ipsa a beatae placeat veritatis sit!</p>
				<button type="button" class="button-1">Read More</button>
			</div>
		</div>	
	</a>
</section>

<!--++++++++++++++ 
Section: Video
++++++++++++++ -->
<section class="video center" style="background-image: url('https://media.tenor.co/images/4e72a0f2c4712de0db98ce2643c3b8b0/tenor.gif');">
	<div class="table">
		<div class="table-cell">
			<div class="video-button">
				<h3>Video headline</h3>
				<div class="small-font">1 hour ago</div>
				<div class="play-video"><i class="fa fa-play-circle"></i></div>
			</div>
		</div>
	</div>
	<div class="video-wrapper">
		<div class='embed-container hide'><iframe id="video-to-play" src='https://www.youtube.com/embed/jihB2qPq7O0?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
	</div>
</section>

<!--++++++++++++++ 
Section: News
++++++++++++++ -->	
<section class="recent-stories">
	<div class="container center">
		<h2 class="orange">More of our recent stories</h2>
	</div>
</section>
<?php 
	$args = array(
		'post_type' => 'feature_stories',
		'post_per_page' => 7
		);
	$hp_stories = new WP_Query($args);
 ?>
<?php if ($hp_stories->have_posts() ) : ?>
<section class="news">
	<div class="container">
		<?php while ($hp_stories->have_posts()) : $hp_stories->the_post(); ?>
			<a href="<?php echo get_permalink(); ?>" class="col-4">
				<div class="news-image" style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>');"></div>

					<?php if ( is_archive() || is_single()): ?>
						<div class="news-date"><?php echo get_the_date('d-M-Y'); ?></div>
					<?php else: ?>
						<div class="news-date"><?php echo get_the_terms(get_the_ID(),'stories_category')[0]->name; ?></div>
					<?php endif; ?>
				<?php $textToTrim = get_the_title();
							$textTrimmed = trimText($textToTrim, '', 99);
					 ?>
				<h2 class="news-title"><?php echo $textTrimmed; ?></h2>
			</a>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>