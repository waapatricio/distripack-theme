<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grano
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="post-wrapper">
			<?php if (has_post_thumbnail()) { ?>	
				<div class="post-thumbnail">

					<?php grano_post_thumbnail(); ?>

				</div>
			<?php } ?>
			<div class="post-content">
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
					
					<div class="post-categories-parent">
						<?php
							echo get_the_category_list( esc_html__( ', ', 'grano' ) );
						?>
					</div>
					</div><!-- .entry-meta -->
				<?php endif; ?>	
				
				<?php
					
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				
				?>
				
				<div class="post-excerpt">
					<?php the_excerpt(); ?>
				</div>
				<div class="post-link">
					<?php do_action('archive_post_footer'); ?>
				</div>
			</div><!-- .entry-content -->
		</div>

		
	</article><!-- #post-<?php the_ID(); ?> -->
