<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grano
 */
$single_post_design = grano_get_option('blog_single_design', '1');
$title_align = grano_get_option('blog_single_title_align', 'left');

$hide_fdimage = grano_get_option('blog_single_fdimage', '0')
?>
<article class="single-post-content" id="post-<?php the_ID(); ?>">
	<?php if($single_post_design == '1') : ?>
		<header class="entry-header text-<?php echo esc_attr($title_align); ?>">
			
			
			
			<?php
				the_title( '<h1 class="entry-title">', '</h1>' );
			?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
				<?php 
					grano_posted_on();
					grano_posted_by();
				?>
				<div class="post-categories-parent">
					<?php
						echo get_the_category_list( esc_html__( ', ', 'grano' ) );
					?>
				</div>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<?php if($hide_fdimage == '0') :
		 	grano_post_thumbnail(); 
		endif; ?>
		<div class="entry-content">
			<?php 
			the_content();
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'grano' ) . '">',
					'after'    => '</nav>',
					/* translators: %: page number. */
					'pagelink' => esc_html__( 'Page %', 'grano' ),
				)
			);
			?>
		</div><!-- .entry-content -->
	<?php else : ?>
		<?php if($hide_fdimage == '0') :
		 	grano_post_thumbnail(); 
		endif; ?>
		<div class="entry-content">
			<?php 
			the_content();
			wp_link_pages(
				array(
					'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'grano' ) . '">',
					'after'    => '</nav>',
					/* translators: %: page number. */
					'pagelink' => esc_html__( 'Page %', 'grano' ),
				)
			);
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>
	<footer class="entry-footer">
		<?php do_action('single_post_footer'); ?>
	</footer><!-- .entry-footer -->
</article>