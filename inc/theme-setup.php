<?php

if ( ! function_exists('bootstrap_setup') ) :
    function bootstrap_setup() {

        // By adding theme support, we declare that this theme does not use a
        // hard-coded <title> tag in the document head, and expect WordPress to
        // provide it for us.
        add_theme_support( 'title-tag' );

        //  Add widget support shortcodes
        add_filter('widget_text', 'do_shortcode');

        // Custom Editor Style Support
        add_editor_style();

        // Support for Featured Images
        add_theme_support( 'post-thumbnails' );

        // Custom Background
        add_theme_support( 'custom-background', array('default-color' => 'fff'));

        // Custom Header
        add_theme_support( 'custom-header', array(
            'default-image' => get_template_directory_uri() . '/images/custom-logo.png',
            'height'        => '200',
            'flex-height'    => true,
            'uploads'       => true,
            'header-text'   => false
        ) );

        //This feature adds RSS feed links to HTML <head>
        add_theme_support( 'automatic-feed-links' );

        //WordPress can scale oEmbed code to a specific size (width) in the front-end
        if ( ! isset( $content_width ) ) {
            $content_width = 1000;
        }

        // Register Navigation Menu
        register_nav_menus( array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu'
        ) );
    }

    add_action( 'after_setup_theme', 'bootstrap_setup' );
endif;

// Navigation Menu Adjustments

/* Add class to navigation sub-menu */
class bootstrap_navigation extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);

        if ( $item->is_dropdown && $depth === 0 ) {
            $item_html = str_replace( '<a', '<a class="dropdown-toggle" data-toggle="dropdown"', $item_html );
            $item_html = str_replace( '</a>', ' <b class="caret"></b></a>', $item_html );
        }
        $output .= $item_html;
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if ( $element->current )
            $element->classes[] = 'active';
        $element->is_dropdown = !empty( $children_elements[$element->ID] );

        if ( $element->is_dropdown ) {
            if ( $depth === 0 ) {
                $element->classes[] = 'dropdown';
            } elseif ( $depth === 1 ) {
                // Extra level of dropdown menu,
                // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
                $element->classes[] = 'dropdown-submenu';
            }
        }
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}

/* Display Pages In Navigation Menu */
if ( ! function_exists( 'bootstrap_menu' ) ) :
    function bootstrap_menu() {
        $pages_args = array(
            'sort_column' => 'menu_order, post_title',
            'menu_class'  => '',
            'include'     => '',
            'exclude'     => '',
            'echo'        => true,
            'show_home'   => false,
            'link_before' => '',
            'link_after'  => ''
        );

        wp_page_menu($pages_args);
    }
endif;

/* Add CLASS attributes to the first <ul> occurence in wp_page_menu */
function add_menuclass( $ulclass ) {
    return preg_replace( '/<ul>/', '<ul class="nav navbar-nav">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'add_menuclass' );

// Create pagination
if ( ! function_exists( 'bootstrap_pagination' ) ) :
    function bootstrap_pagination() {
        global $wp_query;
        $big = 999999999;

        $links = paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'prev_next' => true,
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'type' => 'list'
            )
        );

        $pagination = str_replace('page-numbers','pagination',$links);
        if($pagination){
            echo '<div class="pagination">' . $pagination . '</div>';
        }
    }
endif;

// Register Sidebars
function bootstrap_widgets_init()
{
    /* Sidebar Right */
    register_sidebar(array(
        'id' => 'sidebar_right',
        'name' => __('Sidebar Right'),
        'description' => __('This sidebar is located on the right-hand side of each page.'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
}
add_action( 'widgets_init', 'bootstrap_widgets_init' );

// Remove #more anchor from posts
function remove_more_jump_link($link) {
    $offset = strpos($link, '#more-');
    if ($offset) { $end = strpos($link, '"',$offset); }
    if ($end) { $link = substr_replace($link, '', $offset, $end-$offset); }
    return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');