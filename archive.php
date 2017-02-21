<?php 

get_header(); 


$categories = get_queried_object();
$cat_name = $categories->name;
?>

<?php 
$counter = 0;
if (have_posts()):
while(have_posts()): the_post(); 
$counter ++;
if ($counter < 2):
?>
<!--++++++++++++++ 
Section: banner
++++++++++++++ -->
<section class="banner">
	<div class="container">
		<div class="banner-wrapper" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
			<a href="<?php echo get_the_permalink(); ?>" class="banner-content">
				<h1><?php echo get_the_title(); ?> from <?php echo $cat_name; ?></h1>

				<div class="small-font"><?php echo get_the_date('U'); ?> hour ago</div>
				<?php $textToTrim = get_the_content();
						$textTrimmed = trimText($textToTrim, '', 155);
				 ?>
				<p><?php echo $textTrimmed; ?></p>
				<button type="button" class="button-1">Read more</button>
			</a>
		</div>
	</div>
</section>
<?php endif; ?>
<?php endwhile; ?>				

<?php endif; ?>
<!--++++++++++++++ 
Section: News
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/news.php'); ?>
<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include(TEMPLATEPATH . '/subscription-form.php'); ?>
<?php include(TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>