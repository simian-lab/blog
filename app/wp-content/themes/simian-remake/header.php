<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section.
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link href='https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Quicksand:400,700' rel='stylesheet' type='text/css'>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <?php wp_head(); ?>
</head>
<body id="page" <?php body_class(); ?>>
	<header class="header">
		<div class="top-header">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Simian Logo">
			<nav class="menu">
				<?php
        $args = array(
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          );

          wp_nav_menu( $args ); ?>
			</nav>
			<div class="tools">
				<?php get_search_form(); ?>
			</div>
		</div>
		<div class="monkey">
			<h1 class="site-title">
				<?php _e('Nuestro Blog', 'simian_theme'); ?>
			</h1>
			<img class="talking-monkey" src="<?php echo get_template_directory_uri(); ?>/images/talking-monkey.svg" alt="Mono Aullador">
		</div>
	</header>