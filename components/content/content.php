<?php
/**
 * Template part for displaying posts.
 *
 * @package obreezy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-wrapper">
		<header class="entry-header">

		</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="thumbnail-wrap">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('thumbnail'); ?>
			</a>
		</div>

		<div class="content-wrap">
			<?php
				the_title( sprintf( '<div class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' );
				//the_excerpt();
			 ?>
		</div>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'obreezy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //obreezy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
