<?php
/**
 * Slider - hero setup.
 *
 * @package understrap
 */

?>

<div class="wrapper fill slider" id="wrapper-hero">

<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-inner" role="listbox">
<!--Dynamic query listing posts from "carousel" category-->
<?php
$counter = 1;
$args = array(
    'orderby'          => 'date',
    'order'            => 'ASC',
    'posts_per_page'   => 3,
    'category_name'  => 'carousel'
    );

// The Query
$carouselQuery = new WP_Query( $args );

if ( $carouselQuery->have_posts() ) {
    // The Loop
    while ( $carouselQuery->have_posts() ) {
        $carouselQuery->the_post();
        ?>	
	<!-- Looping slide -->
	<div class="fill d carousel-item" style="background-image: url('<?php echo the_post_thumbnail_url();?>'); background-repeat: no-repeat; background-size: cover; background-position: center center">
       <div class="background-mask"> 

        </div>
        <?php if
        ($counter == 1) { ?>
        <div class="carousel-caption d-md-block logo-block wow fadeIn" data-wow-duration="2s">
            <p><?php echo get_the_content();?></p>
            <h1 class="text-dark"><?php  echo get_the_title(); ?></h1>
            <h4 class="text-dark">Building better future</h4>
        </div>
        <?php } else { ?>
        <div class="carousel-caption d-md-block">
            <h2 class="text-dark"><?php  echo get_the_title(); ?></h2>
            <p class="text-dark"><?php echo get_the_content();?></p>
        </div>
        <?php } ?>
	</div>

	<!--/.Looping slide-->
        <?php
        $counter++;
    }
    wp_reset_postdata();
} ?>
</div>

<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
   
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   
   <span class="sr-only"><?php esc_html_e( 'Previous', 'understrap' ); ?></span>

</a>

<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
   
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   
   <span class="sr-only"><?php esc_html_e( 'Next', 'understrap' ); ?></span>
 
</a>
</div>
</div><!-- .carousel -->
<script>
jQuery( ".carousel-item" ).first().addClass( "active" );
jQuery('.carousel').carousel({
  interval: 2000
})
</script>
<!--/.Dynamic query listing posts from "carousel" category-->
