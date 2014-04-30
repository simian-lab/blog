<?php
if ( ! function_exists( 'syntax_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function syntax_posted_on() {

	if ( is_sticky() && ! is_single() ) {
		printf( __( '<span class="post-date date updated"><a href="%1$s" title="%2$s" rel="bookmark">Featured</a></span><span class="byline"><span class="author vcard"><a class="url fn n" href="%3$s" title="%4$s" rel="author">%5$s</a></span></span>', 'syntax' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'syntax' ), get_the_author() ) ),
			get_the_author()
		);
	}
	else {
		printf( __( '<span class="post-date date updated"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span><span class="byline"><span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'syntax' ),
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'syntax' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;
?>