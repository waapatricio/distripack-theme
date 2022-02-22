<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grano
 */
$blog_archive_items = grano_get_option('blog_archive_items', 3);
$class = 'col-lg-'.(12/$blog_archive_items).' col-md-6 col-12';
$post_content = grano_get_option('blog_archive_excerpt', 'excerpt');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($class); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				grano_posted_on();
				grano_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<?php grano_post_thumbnail(); ?>
	<div class="entry-content">
		<?php 
		if($post_content == 'excerpt') {
			echo do_shortcode(get_the_excerpt()); 
		}else{
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'grano' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
		}		
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grano' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php grano_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->