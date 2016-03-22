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

    add_image_size( 'post_list_image', 500, 565, true);
    add_image_size( 'single_list_image', 130, 120, true);

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
    wp_register_script('simian-menu-toggle-js', get_stylesheet_directory_uri().'/js/menu-toggle.js', array('jquery'),'1.3', true);
    wp_enqueue_script('simian-menu-toggle-js'); 

    wp_register_script('simian-fixed-header-js', get_stylesheet_directory_uri().'/js/fixed-header.js', array('jquery'),'1.3', true);
    wp_enqueue_script('simian-fixed-header-js'); 

    wp_register_script('simian-search-submit-js', get_stylesheet_directory_uri().'/js/search-submit.js', array('jquery'),'1.2', true);
    wp_enqueue_script('simian-search-submit-js'); 

    wp_register_script('simian-language-change-js', get_stylesheet_directory_uri().'/js/language-change.js', array('jquery'),'1.2', true);
    wp_enqueue_script('simian-language-change-js');

    wp_register_script('simian-share-popups-js', get_stylesheet_directory_uri().'/js/popups.js', array('jquery'),'1.1', true);
    wp_enqueue_script('simian-share-popups-js'); 

    
    //Styles :D
    wp_enqueue_style('simian-style', get_stylesheet_directory_uri() . '/css/styles.css', '', '2.6.7');
   
  }
endif;
add_action( 'wp_enqueue_scripts','simian_theme_enqueue_scripts', 100 );

if ( ! function_exists( 'simian_nav_menus' ) ) :
  function simian_nav_menus() {
    register_nav_menu('header', 'Menú de Header');
    register_nav_menu('footer_1', 'Menú de Footer Primera Columna');
    register_nav_menu('footer_2', 'Menú de Footer Segunda Columna');
  }
endif;
add_action( 'init', 'simian_nav_menus' );