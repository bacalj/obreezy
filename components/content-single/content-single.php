<?php
/**
 * Template part for displaying single posts.
 *
 * @package obreezy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-wrapper">
		<!--<div class="entry-meta">
			<?php// obreezy_posted_on(); ?>
		</div>--><!-- .entry-meta -->
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>

			<hr>
			<?php $posts = get_field('relationship_field');
			if( $posts ): ?>
			<h3>Related Posts</h3>
				<ul>
					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
							<div class="obreezy-related-post">
								<a href="<?php echo get_permalink( $p ); ?>">
									<?php $imgurl = wp_get_attachment_image_src( get_post_thumbnail_id($p), 'thumbnail'); ?>
									<img src="<?php echo $imgurl[0]; ?>" alt="image"/>
									<div class="related-title">
										<?php echo get_the_title( $p ); ?>
									</div>
								</a>
							</div>
					<?php endforeach; ?>
				</ul>
				<div class="clearfix">
					<hr>
				</div>
			<?php endif; ?>

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
