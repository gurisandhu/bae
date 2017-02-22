<?php get_header(); 

$categories = get_the_terms( get_the_ID(), 'stories_category');
$cat_name = $categories[0]->name;
$cat_slug = $categories[0]->slug;
?>

<!--++++++++++++++ 
Section: page title
++++++++++++++ -->
<section class="inner-page">
	<div class="container">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="<?php echo esc_url( home_url( '/' )); ?>">Home</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' )); ?>stories_category/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a></li>
				<li><?php echo get_the_title(); ?></li>
			</ul>
		</div>
		<div class="row">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="row">
			<div class="author-info">
				<?php if(get_field('story_by')) { ?>
				<strong>By <?php the_field('story_by'); ?></strong>
				<?php } ?>
				<div><?php echo get_the_date('D, M d, Y'); ?></div>
			</div>
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
		<?php if (have_posts()) {?> 
			<div class="custom-row">
				<?php while(have_posts()) { the_post();  ?>
				<?php the_content(); } ?>
			</div>
		<?php } ?>

	</div>
</section>	
		<?php if (have_rows('add_rows')) { ?>
			<?php while(have_rows('add_rows')) { the_row(); ?>
				<?php if (get_row_layout() == 'full_width') {?>
				<section class="inner-page">
					<div class="container">
						<?php $row_full = get_sub_field('full_width'); ?>
						<?php $sub_loops = $row_full["stories_template_group"]; ?>
						<?php foreach($sub_loops as $sub_loop) {?>
							<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
							<div class="custom-row">
								<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
							</div>
							<?php } ?>
							<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
							<div class="custom-row">
								<figure>
									<!-- <ul class="social-2">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-envelope"></i></a></li>
									</ul> -->
									<?php 
									$url = $sub_loop["stories_template_group_image_content"]['url']; 
									$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
									$title = $sub_loop["stories_template_group_image_content"]['title']; 
									$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

									?>
									<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
									<figcaption>Caption: <?php echo $caption; ?></figcaption>
								</figure>
							</div>
							<?php } ?>
							<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
							<div class="custom-row">
								<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
										<div class="table">
											<div class="table-cell">
												<div class="video-button">
													<div class="play-video">
														<i class="fa fa-play-circle"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="video-wrapper">
											<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
										</div>
									</div>
							</div>
							<?php } ?>
						<?php } ?>
					</div>
				</section>
				<?php } ?>

				<?php if (get_row_layout() == 'two_columns') {?>
				<section class="inner-page">
					<div class="container">
						<?php $col_1_2 = get_sub_field('column_1'); ?>
						<?php $col_2_2 = get_sub_field('column_2'); ?>
						<?php $sub_loops_1_2 = $col_1_2["stories_template_group"]; ?>
						<?php $sub_loops_2_2 = $col_2_2["stories_template_group"]; ?>
						<div class="custom-row">
						<div class="col-2">
							<?php foreach($sub_loops_1_2 as $sub_loop) {?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
								<div class="row">
									<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
								<div class="row">
									<figure>
										<!-- <ul class="social-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul> -->
										<?php 
										$url = $sub_loop["stories_template_group_image_content"]['url']; 
										$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
										$title = $sub_loop["stories_template_group_image_content"]['title']; 
										$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

										?>
										<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
										<figcaption>Caption: <?php echo $caption; ?></figcaption>
									</figure>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
								<div class="row">
									<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
											<div class="table">
												<div class="table-cell">
													<div class="video-button">
														<div class="play-video">
															<i class="fa fa-play-circle"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="video-wrapper">
												<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
											</div>
										</div>
								</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="col-2">
							<?php foreach($sub_loops_2_2 as $sub_loop) {?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
								<div class="row">
									<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
								<div class="row">
									<figure>
										<!-- <ul class="social-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul> -->
										<?php 
										$url = $sub_loop["stories_template_group_image_content"]['url']; 
										$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
										$title = $sub_loop["stories_template_group_image_content"]['title']; 
										$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

										?>
										<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
										<figcaption>Caption: <?php echo $caption; ?></figcaption>
									</figure>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
								<div class="row">
									<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
											<div class="table">
												<div class="table-cell">
													<div class="video-button">
														<div class="play-video">
															<i class="fa fa-play-circle"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="video-wrapper">
												<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
											</div>
										</div>
								</div>
								<?php } ?>
								<?php } ?>
							</div>
						</div><!-- custom-row -->
					</div>
				</section>

				<?php } ?>

				<?php if (get_row_layout() == 'three_columns') {?>
				<section class="inner-page">
					<div class="container">
						<?php $col_1_3 = get_sub_field('column_1_3'); ?>
						<?php $col_2_3 = get_sub_field('column_2_3'); ?>
						<?php $col_3_3 = get_sub_field('column_3_3'); ?>
						<?php $sub_loops_1_3 = $col_1_3["stories_template_group"]; ?>
						<?php $sub_loops_2_3 = $col_2_3["stories_template_group"]; ?>
						<?php $sub_loops_3_3 = $col_3_3["stories_template_group"]; ?>
						<div class="custom-row">
						<div class="col-3">
							<?php foreach($sub_loops_1_3 as $sub_loop) {?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
								<div class="row">
									<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
								<div class="row">
									<figure>
										<!-- <ul class="social-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul> -->
										<?php 
										$url = $sub_loop["stories_template_group_image_content"]['url']; 
										$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
										$title = $sub_loop["stories_template_group_image_content"]['title']; 
										$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

										?>
										<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
										<figcaption>Caption: <?php echo $caption; ?></figcaption>
									</figure>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
								<div class="row">
									<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
											<div class="table">
												<div class="table-cell">
													<div class="video-button">
														<div class="play-video">
															<i class="fa fa-play-circle"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="video-wrapper">
												<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
											</div>
										</div>
								</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="col-3">
							<?php foreach($sub_loops_2_3 as $sub_loop) {?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
								<div class="row">
									<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
								<div class="row">
									<figure>
										<!-- <ul class="social-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul> -->
										<?php 
										$url = $sub_loop["stories_template_group_image_content"]['url']; 
										$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
										$title = $sub_loop["stories_template_group_image_content"]['title']; 
										$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

										?>
										<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
										<figcaption>Caption: <?php echo $caption; ?></figcaption>
									</figure>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
								<div class="row">
									<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
											<div class="table">
												<div class="table-cell">
													<div class="video-button">
														<div class="play-video">
															<i class="fa fa-play-circle"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="video-wrapper">
												<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
											</div>
										</div>
								</div>
								<?php } ?>
							<?php } ?>
						</div>
						<div class="col-3">
							<?php foreach($sub_loops_3_3 as $sub_loop) {?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_text_editor") {?>
								<div class="row">
									<?php echo($sub_loop["stories_template_group_text_editor_content"]); ?>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_image") {?>
								<div class="row">
									<figure>
										<!-- <ul class="social-2">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul> -->
										<?php 
										$url = $sub_loop["stories_template_group_image_content"]['url']; 
										$alt = $sub_loop["stories_template_group_image_content"]['alt']; 
										$title = $sub_loop["stories_template_group_image_content"]['title']; 
										$caption = $sub_loop["stories_template_group_image_content"]['caption']; 

										?>
										<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>">
										<figcaption>Caption: <?php echo $caption; ?></figcaption>
									</figure>
								</div>
								<?php } ?>
								<?php if ($sub_loop[acf_fc_layout] == "stories_template_group_video") {?>
								<div class="row">
									<div class="inner-video-container center" style="background-image: url('https://img.youtube.com/vi/<?php echo($sub_loop["stories_template_group_video_content"]); ?>/maxresdefault.jpg');">
											<div class="table">
												<div class="table-cell">
													<div class="video-button">
														<div class="play-video">
															<i class="fa fa-play-circle"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="video-wrapper">
												<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/<?php echo($sub_loop["stories_template_group_video_content"]); ?>?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
											</div>
										</div>
								</div>
								<?php } ?>
							<?php } ?>
						</div>
						</div><!-- custom-row -->
					</div>
				</section>
				<?php } ?>
				<?php if (get_row_layout() == 'single_row_blockquote') {
						$blockquote_content = get_sub_field('single_row_blockquote_content');

						if ($blockquote_content ) {
					?>
					<blockquote class="inner-page">
						<div class="container">
							<div class="quote"><?php echo $blockquote_content; ?></div>
							<div class="quote-by orange"><?php echo get_sub_field('single_row_blockquote_quote_by'); ?></div>
						</div>
					</blockquote>		
				<?php } } ?>
			<?php } ?>
		<?php } ?>



<!--++++++++++++++ 
Section: News
++++++++++++++ -->	

<section class="recent-stories">
	<div class="container center">
		<h2 class="orange">Recommended reading</h2>
	</div>
</section>
<?php 
	$current_ID = get_the_ID();
	$args = array(
		'post_type' => 'feature_stories',
		'posts_per_page' => 4
		);
	$hp_stories = new WP_Query($args);
 ?>

<?php if ($hp_stories->have_posts() ) : ?>
<section class="news">
	<div class="container">
		<?php while ($hp_stories->have_posts()) : $hp_stories->the_post(); 
			$each_ID = get_the_ID();

			if ($each_ID != $current_ID){
		?>
				
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
		<?php } endwhile; ?>
	</div>
</section>
<?php endif; ?>

<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>