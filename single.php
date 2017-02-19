<?php include 'header.php'; ?>

<!--++++++++++++++ 
Section: page title
++++++++++++++ -->
<section class="inner-page">
	<div class="container">
		<div class="row">
			<ul class="breadcrumb">
				<li><a href="#">Breadcrumb</a></li>
				<li><a href="#">Category</a></li>
				<li><a href="#">Sub Category</a></li>
				<li>Current page</li>
			</ul>
		</div>
		<div class="row">
			<h1>Two line headline will go here and look like this</h1>
		</div>
		<div class="row">
			<div class="author-info">
				<strong>By Name Surname</strong>
				<div>Day, Month 01, 2017</div>
			</div>
		</div>
		<div class="row">
			<figure>
				<ul class="social-2">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-envelope"></i></a></li>
				</ul>
				<img src="compressed/images/article-1.png" alt="">
				<figcaption>Caption: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur illo hic, temporibus debitis recusandae nam voluptates quidem.</figcaption>
			</figure>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo culpa reiciendis dolores iste et consequuntur perspiciatis, officia, doloribus enim eos veniam modi architecto placeat a odit eius autem, eligendi assumenda.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor tenetur soluta praesentium, magni minus quisquam repellendus, asperiores quos officiis illo amet velit, eum impedit incidunt id voluptatum quaerat sequi iste!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi eos sapiente a. Illo iste blanditiis modi, harum sapiente, quidem pariatur earum saepe culpa error velit, aut dolorem odit alias?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque quia iste aliquam delectus magni nam libero explicabo amet velit, deserunt voluptatibus. Quam est atque, eveniet nobis molestiae. Animi, sint.</p>
		</div>
		<div class="row">
			<div class="inner-video-container center" style="background-image: url('compressed/images/video-image.png');">
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
					<div class='embed-container'><iframe id="video-to-play" src='https://www.youtube.com/embed/jihB2qPq7O0?wmode=transparent&amp;autoplay=0&amp;autohide=1' frameborder='0' allowfullscreen></iframe></div>
				</div>
			</div>
		</div>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo culpa reiciendis dolores iste et consequuntur perspiciatis, officia, doloribus enim eos veniam modi architecto placeat a odit eius autem, eligendi assumenda.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor tenetur soluta praesentium, magni minus quisquam repellendus, asperiores quos officiis illo amet velit, eum impedit incidunt id voluptatum quaerat sequi iste!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi eos sapiente a. Illo iste blanditiis modi, harum sapiente, quidem pariatur earum saepe culpa error velit, aut dolorem odit alias?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque quia iste aliquam delectus magni nam libero explicabo amet velit, deserunt voluptatibus. Quam est atque, eveniet nobis molestiae. Animi, sint.</p>
		</div>
	</div>
</section>
<blockquote class="inner-page">
	<div class="container">
		<div class="quote">Iste aut obcaecati nam officiis eos dolore, nulla soluta non quod suscipit!</div>
		<div class="quote-by orange">Person's Name</div>
	</div>
</blockquote>
<section class="inner-page">
	<div class="container">
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo culpa reiciendis dolores iste et consequuntur perspiciatis, officia, doloribus enim eos veniam modi architecto placeat a odit eius autem, eligendi assumenda.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor tenetur soluta praesentium, magni minus quisquam repellendus, asperiores quos officiis illo amet velit, eum impedit incidunt id voluptatum quaerat sequi iste!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, nisi eos sapiente a. Illo iste blanditiis modi, harum sapiente, quidem pariatur earum saepe culpa error velit, aut dolorem odit alias?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque quia iste aliquam delectus magni nam libero explicabo amet velit, deserunt voluptatibus. Quam est atque, eveniet nobis molestiae. Animi, sint.</p>
		</div>
	</div>
</section>


<!--++++++++++++++ 
Section: News
++++++++++++++ -->	
<section class="recent-stories">
	<div class="container center">
		<h2 class="orange">Recommended reading</h2>
	</div>
</section>
<?php include 'news.php'; ?>

<!--++++++++++++++ 
Section: Subscription
++++++++++++++ -->	
<?php include 'subscription-form.php'; ?>


<?php include 'sub-footer.php'; ?>
<?php include 'footer.php'; ?>