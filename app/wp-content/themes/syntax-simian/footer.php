<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Syntax
 */
?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
			<div class="secondary-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
			</div>
		<?php endif; ?>
		<div class="site-info">
			<?php _e( 'Except as otherwise noted, the content of this page is licensed under the Creative Commons Attribution 3.0 License, and code samples are licensed under the Apache 2.0 License.', 'syntax' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>