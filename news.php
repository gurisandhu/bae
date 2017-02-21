<?php if (have_posts() ) : ?>
<section class="news">
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
			<a href="<?php echo get_permalink(); ?>" class="col-4">
				<div class="news-image" style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>');"></div>

					<?php if ( is_archive() || is_single()): ?>
						<div class="news-date"><?php echo get_the_date('d-M-Y'); ?></div>
					<?php else: ?>
						<div class="news-date">Defence</div>
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