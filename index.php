<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/slider' ); ?>
	<?php get_template_part( 'global-templates/hero' ); ?> 
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<h2 class="section-heading text-center">Latest news</h1>
		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
			<!--<php $mainQuery = new WP_Query( array( 'category__not_in' => array( 9, 8 ) ) ); ?> 
			$mainQuery->-->
				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			
			<br>
		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
		

		</div><!-- .row -->
	
	</div><!-- Container end -->
	<!-- Divide -->
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="visibility: visible; animation-name: fadeIn;">
				<hr class="my-5">
			</div>
		</div>
	</div>	
</div>
	<div class="wrapper text-center" style="border-top:1px solid #eee;background-image: url(<?php echo site_url(); ?>/wp-content/themes/versalife/img/city.jpg);background-attachment:fixed;">
        
       <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3  card" style="padding-top:0px;">
                    <div class="row" style="margin-left:0px;margin-right:0px;">
						<div class="col-md-10 offset-md-1" style="padding-top:50px;">
							<h3>Questions?</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis quam ullamcorper, vehicula orci a, molestie lectus.</p>
							<p>Aliquam erat volutpat. Morbi semper orci quis diam imperdiet scelerisque.</p>
						</div>
                </div>      
            </div>

		</div>
           
       </div><!-- Container end -->
        
	</div>
<div class="wrapper"> 
	<!-- Divide -->
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="visibility: visible; animation-name: fadeIn;">
				<hr class="my-5">
			</div>
		</div>
	</div>
	<!--Content Cards-->
	<div class="container">
		<section>
			<h2 class="section-heading text-center">Our services</h2>
			<p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
			<div class="row">
				<?php get_template_part( 'global-templates/cards' ); ?>
			</div>
		</section>	
	</div>
	<!-- Divide -->
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="visibility: visible; animation-name: fadeIn;">
				<hr class="my-5">
			</div>
		</div>
	</div>	
	<!-- About us -->
	<div class="container" id="about">
		<section class="contact">
		<h2 class="section-heading text-center">About Us</h2>
		<p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
			<div class="row wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

			<!--Grid column-->
			<div class="col-lg-6 col-md-12">

			<!--First row-->
			<div class="row">
				<div class="col-1 mr-3">
					<i class="fa fa-database fa-2x"></i>
				</div>
				<div class="col-10">
					<h5>Cybergenetics</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident</p>
				</div>
			</div>
			<!--/First row-->

			<div style="height:30px"></div>

			<!--Second row-->
			<div class="row">
				<div class="col-1 mr-3">
					<i class="fa fa-code fa-2x"></i>
				</div>
				<div class="col-10">
					<h5>Technology</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
				</p>
				</div>
			</div>
			<!--/Second row-->

			<div style="height:30px"></div>

			<!--Third row-->
			<div class="row">
				<div class="col-1 mr-3">
					<i class="fa fa-desktop fa-2x"></i>
				</div>
				<div class="col-10">
					<h5>Anything.</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident</p>
				</div>
			</div>
			<!--/Third row-->

			</div>
			<!--/Grid column-->

			<!--Grid column-->
				<div class="col-lg-6 col-md-12">

					<!--First row-->
					<div class="row">
						<div class="col-1 mr-3">
							<i class="fa fa-comments fa-2x"></i>
						</div>
						<div class="col-10">
							<h5>Communications</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident</p>
						</div>
					</div>
					<!--/First row-->

					<div style="height:30px"></div>

					<!--Second row-->
					<div class="row">
						<div class="col-1 mr-3">
							<i class="fa fa-folder-open fa-2x"></i>
						</div>
						<div class="col-10">
							<h5>Medicine</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
						</p>
						</div>
					</div>
					<!--/Second row-->

					<div style="height:30px"></div>

					<!--Third row-->
					<div class="row">
						<div class="col-1 mr-3">
							<i class="fa fa-address-card fa-2x"></i>
						</div>
						<div class="col-10">
							<h5>Anything.</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident.</p>
						</div>
					</div>
					<!--/Third row-->

				</div>
				
		</section>	
	</div>

</div><!-- Wrapper end -->

<?php get_footer(); ?>
