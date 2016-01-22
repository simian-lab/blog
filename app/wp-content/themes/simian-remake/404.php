<?php
/**
 *
 * The 404 error Template file
 * Template Name: 404 Template
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SimianTheme
 * @since SimianTheme 1.0
 */

get_header(); ?>
<div class="main-error">
	<h2 class="error-title"><?php _e('Error 404', 'simian_theme'); ?></h2>
	<h1 class="not-found"><?php _e('No encontrado', 'simian_theme'); ?></h1>
	<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" class="image404" alt="">
</div>
<?php get_footer();