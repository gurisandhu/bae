<?php get_header(); ?>


<?php 
	$args = array(
		'post_type' => 'feature_stories',
		'posts_per_page' => 3
		);
	$hp_banner = new WP_Query($args);
if ($hp_banner->have_posts()){ ?>
<!--++++++++++++++ 
Section: Feature Stories
++++++++++++++ -->
<section class="feature-stories">
	<?php while($hp_banner->have_posts()){ $hp_banner->the_post(); 
	?>
		<a href="<?php echo get_the_permalink(); ?>" class="col-3" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
			<div class="table">
				<div class="table-cell">
					<h2><?php echo get_the_title(); ?></h2>
					<div class="small-font"><?php echo get_the_date('U'); ?> hour ago</div>
					<?php $textToTrim = get_the_content();
							$textTrimmed = trimText($textToTrim, '...', 430);
					 		?>
							<p><?php echo $textTrimmed; ?></p>
					<button type="button" class="button-1">Read More</button>
				</div>
			</div>	
		</a>
	<?php } ?>
</section>
<?php } ?>

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
		'posts_per_page' => 8
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
<!--++++++++++++++ 
Button: Don't miss a story
++++++++++++++ -->

<button class="button-1 dontmiss">Don't miss a story <strong>sign up</strong></button>
<?php get_footer(); ?>