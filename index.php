<?php include 'header.php'; ?>

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
<section class="news">
	<div class="container">
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-1.png');"></div>
			<div class="news-date">Date</div>
			<?php $textToTrim = 'Recent archived story, consectetur adipisicing elit. Debitis optio non, nam pariatur amet. Voluptas qui, minus.';
						$textTrimmed = trimText($textToTrim, '', 99);
				 ?>
			<h2 class="news-title"><?php echo $textTrimmed; ?></h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-2.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-3.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-4.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-2.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-3.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-4.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-2.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-3.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-4.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-2.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-3.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
		<a href="" class="col-4">
			<div class="news-image" style="background-image: url('compressed/images/news-4.png');"></div>
			<div class="news-date">Date</div>
			<h2 class="news-title">Recent archived story</h2>
		</a>
	</div>
</section>
<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<section class="subscription">
	<div class="container center">
		<h2 class="orange">Email updates</h2>
		<form action="" class="subscription-form">
			<div class="row">
				<input type="text" name="fname" placeholder="Enter your full name">
			</div>
			<div class="row">
				<input type="text" name="fname" placeholder="Enter your email address">
			</div>
			<div class="row">
				<input type="submit" value="Sign me up">
			</div>
		</form>
	</div>
</section>

<?php include 'sub-footer.php'; ?>

<?php include 'footer.php'; ?>