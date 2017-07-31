<?php
/*
Theme Name: AURO
Theme URI: http://www.auro.com/
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: Wordpress Theme developed for AURO.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: auro

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
$cookie_name = "preloader";
$cookie_value = "off";
setcookie($cookie_name, $cookie_value, 0, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
		
	<meta name="resource-type" content="document" />
	<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
	<meta http-equiv="content-language" content="en-us" />
	<meta name="author" content="Dhananjaya Maha Malage" />
	<meta name="contact" content="dhananjaya@whenalive.com" />
	<meta name="copyright" content="Copyright (c)2017 Dhananjaya Maha Malage. All Rights Reserved." />
	<meta name="theme-color" content="#ffffff">

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<!--
	<link rel="apple-touch-icon" sizes="180x180" href="<?php // echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php // echo get_template_directory_uri(); ?>/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php // echo get_template_directory_uri(); ?>/images/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php // echo get_template_directory_uri(); ?>/images/manifest.json">
	<link rel="mask-icon" href="<?php // echo get_template_directory_uri(); ?>/images/safari-pinned-tab.svg" color="#5bbad5">
	-->

	<?php wp_head(); ?>

</head>
<body>
<?php if(!isset($_COOKIE['preloader'])) { ?>
<div class="pre-loader" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/preloader.jpg);">
	<div class="pre-loader-inner">
		<div class="pre-loader-logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
			<span>care construct</span>
		</div>
		<div class="pre-loader-title">
			<h2>A class leading construction Co.</h2>
			<button id="preloaderOff">Enter website</button>
		</div>
	</div>
</div>
<?php } ?>

<?php get_template_part( 'template-parts/page-header', 'header' ); ?>
