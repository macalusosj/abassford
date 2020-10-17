<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Andy Bassford
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link href="<?php echo get_template_directory_uri(); ?>/css/style-svg.css" rel="stylesheet">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body id="top" <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<div class="site-header">
		<header id="masthead" role="banner">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'andy-bassford' ); ?></a>
			<a class="ac-NavAnchor" href="#site-navigation"><b class="menu-toggle"><?php _e( 'Menu', 'andy-bassford' ); ?></b></a>
			<a class="icon-facebook" href="https://www.facebook.com/andy.bassford"><b class="screen-reader-text">Facebook</b></a>
			<a class="icon-instagram" href="https://www.instagram.com/andybassford/"><b class="screen-reader-text">Instagram</b></a>

		</header>
	</div><!-- #masthead -->

	<div id="content" class="site-content">
