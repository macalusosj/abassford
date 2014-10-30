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
<!--[if (gte IE 8)&(lt IE 9)]>
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.ie8.css" rel="stylesheet" type="text/css" />
	<noscript><link href="<?php echo get_template_directory_uri(); ?>/css/style-fallback.minified.css" rel="stylesheet"></noscript>
<![endif]-->
<!--[if (gte IE 9)|(lt IE 8)]><!-->        
<script type="text/javascript">(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement);window.grunticon=function(e){if(e&&3===e.length){var t=window,n=!(!t.document.createElementNS||!t.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),o=function(o){var r=t.document.createElement("link"),a=t.document.getElementsByTagName("script")[0];r.rel="stylesheet",r.href=e[o&&n?0:o?1:2],a.parentNode.insertBefore(r,a)},r=new t.Image;r.onerror=function(){o(!1)},r.onload=function(){o(1===r.width&&1===r.height)},r.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}};
grunticon(["<?php echo get_template_directory_uri(); ?>/css/style-svg.minified.css", "<?php echo get_template_directory_uri(); ?>/css/style-png.minified.css", "<?php echo get_template_directory_uri(); ?>/css/style-fallback.minified.css"]);
</script>
<noscript><link href="<?php echo get_template_directory_uri(); ?>/css/style-fallback.minified.css" rel="stylesheet"></noscript>
<!--<![endif]-->
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

		</header>
	</div><!-- #masthead -->

	<div id="content" class="site-content">
