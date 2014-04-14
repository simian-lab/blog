<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Syntax
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function syntax_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'content',
		'footer_widgets' => array( 'sidebar-1', 'sidebar-2', 'sidebar-3' ),
	) );

	add_theme_support( 'social-links', array(
		'facebook', 'twitter', 'linkedin', 'google_plus', 'tumblr', 'path'
	) );
}
add_action( 'after_setup_theme', 'syntax_jetpack_setup' );
