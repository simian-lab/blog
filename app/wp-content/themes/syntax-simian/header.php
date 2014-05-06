<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Syntax
 */

$facebook = get_theme_mod( 'jetpack-facebook' );
$twitter  = get_theme_mod( 'jetpack-twitter' );
$tumblr   = get_theme_mod( 'jetpack-tumblr' );
$linkedin = get_theme_mod( 'jetpack-linkedin' );
$google   = get_theme_mod( 'jetpack-google_plus' );
$path     = get_theme_mod( 'jetpack-path' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--Favicon & Touch icons -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#00aba9">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<?php if ( is_front_page() || is_home() ): ?>
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@simianlab">
<meta name="twitter:title" content="Simian – <?php _e('Web and mobile design & development studio', 'syntax' ); ?> ">
<meta name="twitter:description" content="<?php _e('Need help with an app or website? Wether you have a big project or a simple idea, Simian can help!','sintax'); ?>">
<meta name="twitter:image:src" content="http://simian.co/images/monkeyface.png">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-wrapper clear">
			<div class="site-branding">
				<?php if ( get_header_image() ) : ?>
					<a href="http://simian.co/" rel="Simian Website">
						<img class="site-header-image" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
					</a>
				<?php endif; // End header image check. ?>
			    <h1 class="site-title">
			    	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>					
			    </h1>
			    <?php if ( $facebook || $twitter || $tumblr || $linkedin || $google || $path ) : ?>
					<div class="social-links">
					<?php if ( $facebook ) : ?>
						<a href="<?php echo esc_url( $facebook ); ?>" class="facebook-link">
							<span class="screen-reader-text"><?php esc_html_e( 'Facebook', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					<?php if ( $google ) : ?>
						<a href="<?php echo esc_url( $google ); ?>" class="google-link">
							<span class="screen-reader-text"><?php esc_html_e( 'Google+', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					<?php if ( $linkedin ) : ?>
						<a href="<?php echo esc_url( $linkedin ); ?>" class="linkedin-link">
							<span class="screen-reader-text"><?php esc_html_e( 'LinkedIn', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					<?php if ( $path ) : ?>
						<a href="<?php echo esc_url( $path ); ?>" class="path-link">
							<span class="screen-reader-text"><?php esc_html_e( 'Path', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					<?php if ( $twitter ) : ?>
						<a href="<?php echo esc_url( $twitter ); ?>" class="twitter-link">
							<span class="screen-reader-text"><?php esc_html_e( 'Twitter', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					<?php if ( $tumblr ) : ?>
						<a href="<?php echo esc_url( $tumblr ); ?>" class="tumblr-link">
							<span class="screen-reader-text"><?php esc_html_e( 'Tumblr', 'syntax' ); ?></span>
						</a>
					<?php endif; ?>
					</div>
				<?php endif; ?>
		    </div>			
		</div>
	</header><!-- #masthead -->
	<div id="main" class="site-main">
		<h1 id="toggle-nav" class="menu-toggle"><span class="screen-reader-text"><?php _e( 'Menu', 'syntax' ); ?></span></h1>
		<nav id="site-navigation" class="navigation-main" role="navigation">
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'syntax' ); ?>"><?php _e( 'Skip to content', 'syntax' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
