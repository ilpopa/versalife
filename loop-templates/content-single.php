<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
		<!--
		<div class="entry-meta">

			<php understrap_posted_on(); ?>

		</div> .entry-meta -->

	</header><!-- .entry-header -->
	<?php if (has_post_thumbnail( )) { ?> <!-- Check if post has featured image -->
		<div class="jumbotron jumbotron-fluid post-img" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-size: cover; background-position: center center">

		</div>
	<?php } else { }?>

	<div class="entry-content single-content">

		<?php the_content(); ?>
		
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

</article><!-- #post-## -->
