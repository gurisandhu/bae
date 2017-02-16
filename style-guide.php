<?php include 'header.php'; ?>

<!--++++++++++++++ 
Section: 
++++++++++++++ -->

<div class="container">
	<h1>H1 Heading</h1>
	<h2>H2 Heading</h2>
	<h3>H3 Headeing</h3>
	<h4>H4 Headeing</h4>
	<h5>H5 Headeing</h5>
	<h6>H6 Headeing</h6>
	<i>Italic</i>
	<strong>Bold strong</strong>
	<b>Bold b</b>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo enim culpa temporibus ab expedita repellat magnam ut maxime, laboriosam porro obcaecati harum quibusdam, cumque fugit sit quaerat placeat, distinctio consequuntur.</p>
	<p><a href="/">Link Style</a></p>

	<ul>
		<li>Unordered List</li>
		<li>Unordered List</li>
	</ul>

	<ol>
		<li>Ordered List</li>
		<li>Ordered List</li>
	</ol>

	<p class="small-fonts">Terms Styles/Breadcrumb Trail</p>


	<table class="row" cellspacing="0" cellpadding="0">
		<tr>
			<th>Subject Heading</th>
		</tr>
		<tr>
			<td>Copy Line</td>
		</tr>
		<tr>
			<td>Copy Line</td>
		</tr>
	</table>

	<div class="row">
		<a href="/" class="button-1">Anchor 1</a>
		<button class="button-1">Button 1</button>
	</div>

	<div class="row">
		<ul class="social-1">
			<li><a href="/"><i class="fa fa-search"></i></a></li>
			<li><a href="/"><i class="fa fa-facebook"></i></a></li>
			<li><a href="/"><i class="fa fa-twitter"></i></a></li>
			<li><a href="/"><i class="fa fa-envelope-o"></i></a></li>
		</ul>
	</div>

	<form action="#">
		<h2>Form</h2>
		<div class="row">
			<input type="text" name="fname" placeholder="Name">
		</div>
		<div class="row">
			<input type="text" name="surname" placeholder="Surname">
		</div>
		<div class="row">
			<div class="form-row">
				<div class="col-3">
					<select name="" id="">
						<option value="0">1</option>
						<option value="1">2</option>
						<option value="2">3</option>
					</select>
					<span>Day</span>
				</div>
				<div class="col-3">
					<select name="" id="">
						<option value="Month">Month</option>
						<option value="february">February</option>
						<option value="March">March</option>
					</select>
					<span>Month</span>
				</div>
				<div class="col-3">
					<select name="" id="">
						<option value=""></option>
						<option value="1">2016</option>
						<option value="2">2017</option>
					</select>
					<span>Year</span>
				</div>
			</div>
		</div>
		<div class="row">
			<label for="gender">Radio Buttons</label>
			<div class="form-row">
				<div class="radio-button">
					Male 
					<input type="radio" name="gender" checked value="female"><i class="new-radio"></i></div>
				<div class="radio-button">
					Female 
					<input type="radio" name="gender" value="female"><i class="new-radio"></i></div>
			</div>	
		</div>
		<div class="row">
			<label for="gender">Check boxs</label>
			<div class="form-row">
				<div class="checkbox-button">
					Option 1 
					<input type="checkbox" name="gender" checked value="option1"><i class="new-checkbox"></i></div>
				<div class="checkbox-button">
					Option 2 
					<input type="checkbox" name="gender" value="option2"><i class="new-checkbox"></i></div>
			</div>	
		</div>
	</form>
</div>



<section>
	<div class="container">
		<div class="row">
			<figure>
				<img src="compressed/images/banner-1.png" alt="">
				<figcaption><strong>Caption:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</figcaption>
			</figure>
		</div>
		<blockquote>
			Technology is a time saver. Using machine learning, you can teach computers to process data and learn faster.
		</blockquote>
		<div class="row">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nulla assumenda distinctio quia obcaecati, dolorem, natus esse aut iusto voluptate, commodi! Facere minus molestias natus unde. Porro nam saepe, fuga! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus incidunt blanditiis, totam hic voluptates error ratione fuga ut, aut, at laudantium esse amet repellat necessitatibus reiciendis veritatis dolores voluptate cumque?</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis autem vel in, nemo iure saepe mollitia corrupti, odit quos consectetur optio aliquid voluptates ipsa omnis, fuga. Consequatur tempora, ex nisi!</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, tempore asperiores voluptas eligendi necessitatibus quisquam ab dolorem iure tempora ipsam ratione eaque, enim harum quae quidem. Nostrum repudiandae ad rem.</p>
		</div>
		<div class="row">
			<div class="show-loader"></div>
		</div>
	</div>		
</section>

<?php include 'footer.php'; ?>