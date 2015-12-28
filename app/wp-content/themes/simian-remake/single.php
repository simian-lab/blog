<?php
/**
* The single template file
* Template Name: single empresa Template
* @link http://codex.wordpress.org/Template_Hierarchy
*
* @package WordPres
* @subpackage SimianTheme
* @since SimianTheme 1.0
*/
get_header(); ?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$url = $thumb['0'];
?>
<?php while(have_posts()): the_post(); ?>
	<article class="detail">
		<section class="hero">
			<h1 class="title">
				<?php the_title();?>
			</h1>
			<div class="author">
				<?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name') ; ?>
			</div>
			<div class="date">
				<svg class="icon icon-icon-calendar"><use xlink:href="#icon-icon-calendar"></use></svg><span class="mls"></span>
				<p class="month"><?php echo get_the_date('j M'); ?></p>
				<p class="year"><?php echo __(' de ','simian_theme') . get_the_date('Y'); ?></p>
			</div>
		</section>
		<section class="content">
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<div class="post-footer">
				<div class="social-share">
					
				</div>				
			</div>
			<div class="related">
				
			</div>
			<div class="comments">
				
			</div>
		</section>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>