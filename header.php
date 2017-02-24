<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<!-- [if IE]>
		<script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]
		<style type="text/css">
		.gradient {
		filter: none;
		}
		</style>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/compressed/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/compressed/images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>
<header class="top">
	<div class="container">
		<div class="bae-logo">
			<span>More from</span>
			<a target="_blank" href="http://www.baesystems.com/en-aus/home"><img src="<?php echo get_template_directory_uri(); ?>/compressed/images/bae-logo.png" alt="BAE logo"></a>
		</div>
	</div>
</header>
<header class="main">
	<div class="container">
		<div class="desktop-header">
			<a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/compressed/images/logo.png" alt="FlightPath logo">
			</a>
			<div class="desktop-menu">
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>
				</nav>
			</div>
		</div>
	</div>
</header>