<?php 

get_header(); ?>

<!--++++++++++++++ 
Section: banner
++++++++++++++ -->
<section class="banner">
	<div class="container">
		<div class="banner-wrapper" style="background-image:url('compressed/images/banner.jpg');">
			<a href="#" class="banner-content">
				<h1>Feature story from Government</h1>
				<div class="small-font">1 hour ago</div>
				<?php $textToTrim = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis optio non, nam pariatur amet. Voluptas qui, minus. Recusandae repudiandae non alias eaque voluptas, cum at ipsum possimus voluptatem! Possimus, obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis optio non, nam pariatur amet. Voluptas qui, minus. Recusandae repudiandae non alias eaque voluptas, cum at ipsum possimus voluptatem! Possimus, obcaecati. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis optio non, nam pariatur amet. Voluptas qui, minus. Recusandae repudiandae non alias eaque voluptas, cum at ipsum possimus voluptatem! Possimus, obcaecati.';
						$textTrimmed = trimText($textToTrim, '', 155);
				 ?>
				<p><?php echo $textTrimmed; ?></p>
				<button type="button" class="button-1">Read more</button>
			</a>
		</div>
	</div>
</section>

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