<?php
// Enqueue Slick Files
function slick_slider_scripts_and_styles() {
    if(is_page_template('templates/template-home.php')):

        //Enqueue our slider script
        wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/plugins/slick.min.js', null, null, true );
        //Enqueue our slider style
        wp_enqueue_style( 'slick', get_template_directory_uri().'/css/plugins/slick.css', null, null );

    endif;
}
add_action( 'wp_enqueue_scripts', 'slick_slider_scripts_and_styles' );

// Create HOME Slider
function home_slider_template() {
    $main_slider_options = get_field('main_slider', 'option')[0]; ?>

    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#home-slider').slick({
                //For Users
                <?php  if ($main_slider_options['slider_speed']) echo 'autoplaySpeed:' . $main_slider_options['slider_speed'] . ',' ; ?>
                <?php  if ($main_slider_options['slider_navigation']) echo 'arrows:' . $main_slider_options['slider_navigation'] . ',' ; ?>
                <?php  if ($main_slider_options['slider_pagination']) echo 'dots:' . $main_slider_options['slider_pagination'] . ',' ; ?>
                <?php  if ($main_slider_options['slide_fade_effect']) echo 'fade:' . $main_slider_options['slide_fade_effect'] . ',' ; ?>
                <?php  if ($main_slider_options['slider_autoplay']) echo 'autoplay:' . $main_slider_options['slider_autoplay'] . ',' ; ?>

                // For Developers
                cssEase: 'ease-in-out',
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1
            });
        });
    </script>


   <?php $arg = array(
        'post_type'	        => 'slider',
        'order'		        => 'ASC',
        'orderby'	        => 'menu_order',
        'posts_per_page'    => -1
    );
    $slider = new WP_Query( $arg );
    if ( $slider->have_posts() ) : ?>

        <div id="home-slider" class="slick-slider">
            <?php while ( $slider->have_posts() ) : $slider->the_post(); ?>

                <div class="slick-slide">
                    <?php the_post_thumbnail(); ?>
                    <div class="slider-caption">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>

            <?php endwhile; ?>
        </div><!-- END of  #home-slider-->

    <?php endif; wp_reset_query(); ?>

<?php }

// HOME Slider Shortcode
function home_slider_shortcode() {
    ob_start();
    home_slider_template();
    $slider = ob_get_clean();
    return $slider;
}
add_shortcode( 'slider', 'home_slider_shortcode' );
?>