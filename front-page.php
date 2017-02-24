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
<?php if(get_field('video_id', 'option')) {?>
<section class="video hero-video center">
	<div class="table">
		<div class="table-cell">
			<div class="hero-video-button">
				<?php if(get_field('video_headline', 'option')) {?>
					<h3><?php echo get_field('video_headline', 'option'); ?></h3>
				<?php } ?>
				<?php if(get_field('time_uploaded', 'option')) {?>
				<div class="small-font"><?php echo get_field('time_uploaded', 'option'); ?> hour ago</div>
				<?php } ?>
				<div class="play-video"><i class="fa fa-play-circle"></i></div>
			</div>
		</div>
	</div>
	<div class="video-wrapper">
		<div class='embed-container'>
			<div id="player"></div>
		</div>
	</div>
</section>

 <script>
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('player', {
          playerVars: { 'autoplay': 1, 'controls': 1, 'autohide':1,'wmode':'opaque', 'loop':1, 'list': '<?php echo get_field("video_id", "option"); ?>' },
          videoId: '',
          events: {
            'onReady': onPlayerReady
        }
        });
      }

      function onPlayerReady(event) {
        event.target.mute();
      }

</script>
<?php } ?>

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