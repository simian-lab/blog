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
			<?php the_post_thumbnail('large'); ?>
			<h1 class="title">
				<?php the_title();?>
			</h1>			
		</section>
		<section class="content">
			<div class="post-content">
				<div class="date">
					<svg class="icon icon-calendar"><use xlink:href="#icon-calendar"></use></svg><span class="mls"></span>
					<p class="month"><?php echo get_the_date('j M'); ?></p>
					<p class="year"><?php echo __(' de ','simian_theme') . get_the_date('Y'); ?></p>
				</div>
				<div class="author">
					<?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
					<p><?php the_author_meta('first_name'); echo ' '; the_author_meta('last_name') ; ?></p>
				</div>
				<h2 class="title">
					<?php the_title();?>
				</h2>			
				<?php the_content(); ?>
			</div>
			<div class="post-footer">
				<div class="social-share">
					<a href="#" onclick="openFacebookPopup();" class="facebook">
						<svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg><span class="mls"></span>
					</a>
					<a href="#" onclick="openTwitterPopup('<?php echo  get_the_title(); ?>');" class="twitter">
						<svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg><span class="mls"></span>
					</a>
					<a href="#" onclick="openGooglePopup();" class="google-plus">
						<svg class="icon icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg><span class="mls"></span>
					</a>
				</div>				
			</div>
			<section class="related">
				<h2 class="related-header"><?php _e('Artículos relacionados:', 'simian_theme'); ?></h2>
				<?php
				$category =  get_the_category()[0];
				$id = get_the_ID();
				$args = array(
				  'order' => 'DESC',
				  'orderby' => 'date',
				  'post_status' => 'publish',
				  'cat' => $category->term_id,
				  'posts_per_page' => 3,
				  'post__not_in' => array($id)
				);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ): ?>
					<div class="related-container">
					<?php while ( $the_query->have_posts() ):
						$the_query->the_post(); ?>
						<div class="related-post">
							<a href="<?php the_permalink(); ?>">
								<div class="post-thumbnail">
									<?php if ( has_post_thumbnail() ): ?>
										<img class="image-margin" src="<?php echo get_template_directory_uri(); ?>/images/border.svg" alt="">
										<?php the_post_thumbnail('single_list_image'); 
									endif;?>
								</div>							
								<h3 class="title">
									<?php the_title();?>
								</h3>
							</a>
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; 
				wp_reset_postdata(); ?>
				<div class="cycle-links">
					<?php if(get_next_post_link()): ?>
						<div class="left-link">
							<?php	echo get_next_post_link( '%link' ,
							'<svg class="icon icon-left-arrow-circular"><use xlink:href="#icon-left-arrow-circular"></use></svg><span class="mls"></span>'.
							'<h3 class="label">'.__('Entrada Anterior', 'simian_theme'). '</h3>'); ?>
						</div>
					<?php endif; ?>
					<?php if(get_previous_post_link()): ?>
						<div class="right-link">
							<?php	echo get_previous_post_link( '%link' ,
							'<h3 class="label">'.__('Entrada Siguiente', 'simian_theme'). '</h3>'.
							'<svg class="icon icon-right-arrow-circular"><use xlink:href="#icon-right-arrow-circular"></use></svg><span class="mls"></span>'); ?>
							</div>
					<?php endif; ?>
				</div>
								
			</section>
			<div class="comments">
				<?php comments_template(); ?> 
			</div>
		</section>
	</article>

<?php endwhile; ?>

<?php get_footer(); ?>