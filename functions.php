<?php
/**
 * Functions
 */

/******************************************************************************************************************************
                Included Files
*******************************************************************************************************************************/

// Run Theme Setup Functions
include_once(TEMPLATEPATH . '/inc/theme-setup.php');

// Run Sick slider on HOME page
include_once(TEMPLATEPATH . '/inc/home-slider.php');

/******************************************************************************************************************************
			    Enqueue Scripts and Styles for Front-End
*******************************************************************************************************************************/
if (!is_admin()) {
    function bootstrap_scripts_and_styles() {
    // Load JavaScripts
        //core
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', null, null, true );
        
          //FullPage.js
		  wp_enqueue_script( 'jquery-fullpage', get_template_directory_uri() . '/js/plugins/jquery.fullPage.js', null, null, true );
		
		  //jquery.mCustomScrollbar.min.js
		  wp_enqueue_script( 'jquery-mCustomScrollbar', get_template_directory_uri() . '/js/plugins/jquery.mCustomScrollbar.min.js', null, null, true );
		  wp_enqueue_script( 'jquery-mCustomScrollba0contr', get_template_directory_uri() . '/js/plugins/jquery.mCustomScrollbar.concat.min.js', null, null, true );
		
		  //scrolloverflow.js
		  wp_enqueue_script( 'scrolloverflow', get_template_directory_uri() . '/js/plugins/scrolloverflow.js', null, null, true );
		
		  //jquery.easings.min.js
		  wp_enqueue_script( 'jquery-easings', get_template_directory_uri() . '/js/plugins/jquery.easings.min.js', null, null, true );
		
		  //matchHeight
		  wp_enqueue_script( 'jquery.matchHeight', get_template_directory_uri() . '/js/plugins/jquery.matchHeight.js', null, null, true );
        
        //custom javascript
        wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global.js', null, null, true ); /* This should go first */

        // Load the html5 shiv and respond scripts.
        wp_enqueue_script( 'html5shiv-and-respond', get_template_directory_uri() . '/js/plugins/html5shiv-and-respond.js', null, null );
        wp_script_add_data( 'html5shiv-and-respond', 'conditional', 'lt IE 9' );

    // Load Stylesheets
        //core
        wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', null, null );
        wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css', null, null );
          // FullPage.css
		  wp_enqueue_style( 'fullpage', get_template_directory_uri().'/css/plugins/jquery.fullPage.css', null, null );
		
		  // Fjquery.mCustomScrollbar.css
		  wp_enqueue_style( 'css-mCustomScrollbar', get_template_directory_uri().'/css/plugins/jquery.mCustomScrollbar.css', null, null );
        
        //plugins
        wp_enqueue_style( 'font-awesome.min', get_template_directory_uri().'/css/plugins/font-awesome.min.css', null, null );
        
        //system
        wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', null, null );/*2nd priority*/
        wp_enqueue_style( 'media-screens', get_template_directory_uri().'/css/media-screens.css', null, null );/*1st priority*/
    }
    add_action( 'wp_enqueue_scripts', 'bootstrap_scripts_and_styles' );
}

  function load_fonts()
  {
  wp_register_style('et-googleFonts',
  'https://fonts.googleapis.com/css?family=Lato:100,100i,300,400,700,900&amp;subset=latin-ext');
   wp_enqueue_style( 'et-googleFonts');
  }
  add_action('wp_print_styles', 'load_fonts');

/******************************************************************************
			    Additional Functions
*******************************************************************************/
// Register Post Type Slider
    function post_type_slider() {
        $post_type_slider_labels = array(
            'name'               => _x( 'Slider', 'post type general name', 'bootstrap' ),
            'singular_name'      => _x( 'Slide', 'post type singular name', 'bootstrap' ),
            'add_new'            => _x( 'Add New', 'slide', 'bootstrap' ),
            'add_new_item'       => __( 'Add New', 'bootstrap' ),
            'edit_item'          => __( 'Edit', 'bootstrap' ),
            'new_item'           => __( 'New ', 'bootstrap' ),
            'all_items'          => __( 'All', 'bootstrap' ),
            'view_item'          => __( 'View', 'bootstrap' ),
            'search_items'       => __( 'Search for a slide', 'bootstrap' ),
            'not_found'          => __( 'No slides found', 'bootstrap' ),
            'not_found_in_trash' => __( 'No slides found in the Trash', 'bootstrap' ),
            'parent_item_colon'  => '',
            'menu_name'          => 'Slider'
        );
        $post_type_slider_args = array(
            'labels'        => $post_type_slider_labels,
            'description'   => 'Display Slider',
            'public'        => true,
            'menu_icon' 	=> 'dashicons-slides',
            'menu_position' => 5,
            'supports'      => array( 'title', 'thumbnail', 'page-attributes', 'editor' ),
            'has_archive'   => true,
            'hierarchical'  => true
        );
        register_post_type( 'slider', $post_type_slider_args );
    }
    add_action( 'init', 'post_type_slider' );

// Stick Admin Bar To The Top
    if (!is_admin()) {
        add_action('get_header', 'my_filter_head');

        function my_filter_head() {
            remove_action('wp_head', '_admin_bar_bump_cb');
        }

        function stick_admin_bar() {
            echo "
                <style type='text/css'>
                    body.admin-bar {margin-top:32px !important}
                    @media screen and (max-width: 782px) {
                        body.admin-bar { margin-top: 0 !important }
                    }
                    @media screen and (max-width: 600px) {
                        body.admin-bar { margin-top: 0 !important }
                        html #wpadminbar{ margin-top: 0; }
                    }
                </style>
                ";
        }

        add_action('admin_head', 'stick_admin_bar');
        add_action('wp_head', 'stick_admin_bar');
    }

// Customize Login Screen
    function wordpress_login_styling() { ?>
        <style type="text/css">
            .login #login h1 a {
                background-image: url('<?php echo get_header_image(); ?>');
                background-size: contain;
                width: auto;
                height: 90px;
            }
            body.login{
                background-color: #<?php echo get_background_color(); ?>;
                background-image: url('<?php echo get_background_image(); ?>') !important;
                background-repeat: repeat;
                background-position: center center;
            };

        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'wordpress_login_styling' );

    function admin_logo_custom_url(){
        $site_url = home_url();
        return ($site_url);
    }
    add_filter('login_headerurl', 'admin_logo_custom_url');


/*********************** PUT YOU FUNCTIONS BELOW ********************************/
// Options ACF
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'   => 'options-general.php',
            'redirect'      => false
        ));
    }

// Control Excerpt Length using Filters
    function custom_excerpt_length( ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove […] string using Filters
    function new_excerpt_more( $more ) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

// Make the "read more" link to the post
    function new_excerpt_more_link( $more ) {
        return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'foundation') . '</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more_link' );
    
// broken admin in chrome
    function chromefix_inline_css() { 
        wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ( 0 ); }' );
    }
    add_action('admin_enqueue_scripts', 'chromefix_inline_css');
    
      
  if ( ! function_exists( 'current_year_func' )) :
    function current_year_func( $atts ){
        return date("Y");
    }
    
    add_shortcode( 'current_year', 'current_year_func' );
  endif;


/************************ PUT YOUR FUNCTIONS BELOW ************************/

?>