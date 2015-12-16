<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SimianTheme
 * @since SimianTheme 1.0
 */

get_header();
//Main query 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'order' => 'DESC',
  'orderby' => 'date',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'paged' => $paged

);
$the_query = new WP_Query( $args );
?>
<div class="main">
	<div class="content">
		<?php if ( $the_query->have_posts() ): ?>
			<div class="posts-list">
				<?php while ( $the_query->have_posts() ):
				$the_query->the_post(); ?>
				<div class="post-container">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('large'); ?>
						<h2 class="post-title">
							<?php the_title(); ?>
						</h2>
						<p class="post-excerpt">
							<?php the_excerpt(); ?>
						</p>
					</a>
					<div class="post-foot">
						<div class="date">
							<p class="month"><?php the_date('j M'); ?></p>
							<?php echo __(' de ','simian_theme') . get_the_date('Y'); ?>
						</div>
						<div class="author">
							<?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name') ; ?>
						</div>
						<div class="comments">
							<?php echo __('Comentarios', 'simian_theme') . '('.wp_count_comments()->total_comments . ')'; ?>
						</div>
						<div class="tags">
							<?php the_tags(''); ?>
						</div>
					</div>					
				</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();