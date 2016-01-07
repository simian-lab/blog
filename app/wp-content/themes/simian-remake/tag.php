<?php
/**
 *
 * The tag Template file
 * Template Name: tag Template
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SimianTheme
 * @since SimianTheme 1.0
 */

get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$tag = get_query_var( 'tag' );
$args = array(
  'order' => 'DESC',
  'orderby' => 'date',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'paged' => $paged,
  'tag' => $tag
);
$the_query = new WP_Query( $args ); ?>
<div class="main">
	<div class="content">
		<h2 class="category-head">
			<span class="cat"><?php _e('Etiqueta> ','simian_theme'); ?></span>
			<span class="category-title"><?php single_tag_title(); ?></span>
		</h2>
		<?php if ( $the_query->have_posts() ): ?>
			<div class="posts-list">
				<?php while ( $the_query->have_posts() ):
				$the_query->the_post(); ?>
				<div class="post-container">
					<a href="<?php the_permalink(); ?>">
						<div class="post-thumbnail">
							<?php the_post_thumbnail('post_list_image'); ?>
						</div>						
						<h2 class="post-title">
							<?php the_title(); ?>
						</h2>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</a>
					<div class="post-foot">
						<div class="date">
							<svg class="icon icon-calendar"><use xlink:href="#icon-calendar"></use></svg><span class="mls"></span>
							<p class="month"><?php the_date('j M'); ?></p>
							<p class="year"><?php echo __(' de ','simian_theme') . get_the_date('Y'); ?></p>
						</div>
						<div class="author">
							<?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name') ; ?>
						</div>
						<div class="comments">
							<svg class="icon icon-balloon"><use xlink:href="#icon-balloon"></use></svg><span class="mls"></span>
							<p><?php echo __('Comentarios', 'simian_theme') . '('.wp_count_comments()->total_comments . ')'; ?></p>
						</div>
						<?php if ( has_tag() ): ?>
						<div class="tags">
							<svg class="icon icon-tag"><use xlink:href="#icon-tag"></use></svg><span class="mls"></span>
							<p><?php the_tags(''); ?><p>
						</div>
						<?php endif; ?>
					</div>						
				</div>
				<?php endwhile; ?>
				<div class="pagination">
					<?php 
					$args = array(
						'show_all' => True,
					);
					echo paginate_links($args); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();