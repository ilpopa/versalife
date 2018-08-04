<?php
/**
 * Cards - get category cards for front page.
 *
 * @package understrap
 */

?>
<!--Dynamic query listing posts from "cards" category-->
<?php
$cardcounter = 0;
$args = array(
'orderby'          => 'date',
'order'            => 'ASC',
'posts_per_page'   => 3,
'category_name'  => 'cards'
);

// The Query
$cardsQuery = new WP_Query( $args );

if ( $cardsQuery->have_posts() ) {
    // The Loop
while ( $cardsQuery->have_posts() ) {
    $cardsQuery->the_post();
    ?>
    <!--Auto generated columnn-->
    <div class="col-lg-4 col-md-6 card-full">
        <!--Card-->
        <a href="<?php echo get_permalink() ?>">
        <div class="card wow flipInY" data-wow-duration="1.5s" data-wow-delay="<?php echo $cardcounter?>s">

            <!--Card image-->
            <div class="card-top">
                <img src="<?php echo the_post_thumbnail_url();?>" class="card-img-top" alt="">
                
                    
                
            </div>
            <!--/.Card image-->

            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h4 class="card-title"><?php  echo get_the_title(); ?></h4>
                <!--Text-->
                <p class="card-text"><?php echo get_the_excerpt();?></p>
            </div>
            <!--/.Card content-->
            </a>
        </div>
        <!--/.Card-->
    </div>
    <!--/.Auto generated columnn-->
    <?php
    $cardcounter += 0.5;
}
wp_reset_postdata();
} ?>
<!--/.Dynamic query listing posts from "cards" category-->