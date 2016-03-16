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
query_posts( $args );
?>
<div class="main">
	<div class="content">
		<?php if ( have_posts() ): ?>
			<div class="posts-list">
				<?php while ( have_posts() ):
				the_post(); ?>
				<div class="post-container">
					<a href="<?php the_permalink(); ?>">
						<div class="post-thumbnail">
							<?php if ( has_post_thumbnail() ): ?>
								<img class="image-margin" src="<?php echo get_template_directory_uri(); ?>/images/border.svg" alt="">
								<?php the_post_thumbnail('post_list_image');
							endif; ?>
						</div>						
						<h2 class="post-title grow-hover">
							<?php the_title(); ?>
						</h2>
						<div class="post-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</a>
					<div class="post-foot">
						<div class="date">
							<svg class="icon icon-calendar"><use xlink:href="#icon-calendar"></use></svg><span class="mls"></span>
							<p class="month"><?php echo get_the_date('j M'); ?></p>
							<p class="year"><?php echo __(' de ','simian_theme') . get_the_date('Y'); ?></p>
						</div>
						<div class="author">
							<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>						
							<p><?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name') ; ?></p>
						</div>
						<div class="comments">
							<svg class="icon icon-balloon"><use xlink:href="#icon-balloon"></use></svg><span class="mls"></span>
							<p><?php 							
							echo __('Comentarios', 'simian_theme') . '(';
							comments_number('0', '1', '%');
							echo ')'; ?></p>
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
					$pagination_args = array(
						'show_all' => False,
        		'mid_size' => 1,
        		'end_size' => 0,
        		'next_text' => '<svg class="icon icon-right-arrow-circular grey-hover"><use xlink:href="#icon-right-arrow-circular"></use></svg><span class="mls"></span>',
        		'prev_text' => '<svg class="icon icon-left-arrow-circular grey-hover"><use xlink:href="#icon-left-arrow-circular"></use></svg><span class="mls"></span>',
        		'type' => 'plain',
        		'before_page_number' => '<div class="number-label grow-hover">',
        		'after_page_number' => '<svg class="icon icon-circle"><use xlink:href="#icon-circle"></use></svg><span class="mls"></span></div>',
      		);
      		$links = paginate_links( $pagination_args );
					echo ($links); ?>
				</div>				
			</div>
		<?php endif; ?>
	</div>
</div>
<?php get_footer();