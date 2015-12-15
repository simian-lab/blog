<?php
/**
* Simian Theme functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
*
* @package WordPres
* @subpackage GolTheme
* @since GolTheme 1.0
*/
if ( ! function_exists( 'simian_theme_setup' ) ) :
  function simian_theme_setup() {

    /*
    * Make Fedesoft Theme available for translation.
    */
    load_theme_textdomain( 'simian_theme', get_template_directory() . '/languages' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );
  }
endif;
add_action( 'after_setup_theme', 'simian_theme_setup' );

/**
* Register and enqueues public-facing JavaScript files and Stylesheets.
*
* @since    1.0.0
*/
if ( ! function_exists( 'simian_theme_enqueue_scripts' ) ) :
  function simian_theme_enqueue_scripts() {
     //Javascripts 
    //Styles :D
    wp_enqueue_style('simian-style', get_stylesheet_directory_uri() . '/css/styles.css', '', '1.0.1');
   
  }
endif;
add_action( 'wp_enqueue_scripts','simian_theme_enqueue_scripts', 100 );