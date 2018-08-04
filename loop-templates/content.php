<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<hr class="my-4">

	<?php if (has_post_thumbnail( )) { ?> <!-- Check if post has featured image -->

	<div class="row">
		<div class="col-md-6  wow fadeInLeft">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
		<div class="col-md-6 wow fadeInRight">
			<header class="entry-header">

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h2>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
					<!--
					<div class="entry-meta">
						<php understrap_posted_on(); ?>
					</div> .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->
			
			<div class="entry-content">

				<?php
				the_excerpt();
				?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				) );
				?>

			</div><!-- .entry-content -->
			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div>	

	</div> <!-- row -->
	<!-- No image -->
	<?php } else { ?>
		<div class="wow fadeInUp">
		<header class="entry-header">

		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<!--
			<div class="entry-meta">
				<php understrap_posted_on(); ?>
			</div> .entry-meta -->

		<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

		</div><!-- .entry-content -->
		<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

		</footer><!-- .entry-footer -->
		</div>
	<?php }  ?>

</article><!-- #post-## -->
