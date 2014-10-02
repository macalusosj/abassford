<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Andy Bassford
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function andy_bassford_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'andy_bassford_jetpack_setup' );
