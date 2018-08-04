<?php
/**
 * Slider - hero setup.
 *
 * @package understrap
 */

?>

<div class="wrapper slider" id="wrapper-hero">

<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
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
	<div class="carousel-item ">
        <img class="d-block w-100" src="<?php echo the_post_thumbnail_url();?>" >
        <div class="carousel-caption d-none d-md-block">
            <h2><?php  echo get_the_title(); ?></h2>
            <p><?php echo get_the_content();?></p>
        </div>
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
