<?php
if ( ! function_exists( 'amvdm_setup' ) ) :

function amvdm_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'amvdm', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'amvdm' ),
        'social'  => __( 'Social Links Menu', 'amvdm' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // amvdm_setup

add_action( 'after_setup_theme', 'amvdm_setup' );


if ( ! function_exists( 'amvdm_init' ) ) :

function amvdm_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // amvdm_setup

add_action( 'init', 'amvdm_init' );


if ( ! function_exists( 'amvdm_custom_image_sizes_names' ) ) :

function amvdm_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'amvdm_custom_image_sizes_names' );
endif;// amvdm_custom_image_sizes_names



if ( ! function_exists( 'amvdm_widgets_init' ) ) :

function amvdm_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'amvdm_widgets_init' );
endif;// amvdm_widgets_init



if ( ! function_exists( 'amvdm_customize_register' ) ) :

function amvdm_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'amvdm_customize_register' );
endif;// amvdm_customize_register


if ( ! function_exists( 'amvdm_enqueue_scripts' ) ) :
    function amvdm_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.4.js', false, null, true);

    wp_deregister_script( 'jquerycountto' );
    wp_enqueue_script( 'jquerycountto', get_template_directory_uri() . '/js/jquery-countTo.js', false, null, true);

    wp_deregister_script( 'jqueryappear' );
    wp_enqueue_script( 'jqueryappear', get_template_directory_uri() . '/js/jquery.appear.js', false, null, true);

    wp_deregister_script( 'wow' );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', false, null, true);

    wp_deregister_script( 'jqueryeasing' );
    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.min.js', false, null, true);

    wp_deregister_script( 'jqueryfancybox' );
    wp_enqueue_script( 'jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', false, null, true);

    wp_deregister_script( 'jqueryfancyboxmedia' );
    wp_enqueue_script( 'jqueryfancyboxmedia', get_template_directory_uri() . '/js/jquery.fancybox-media.js', false, null, true);

    wp_deregister_script( 'jqueryfancyboxthumbs' );
    wp_enqueue_script( 'jqueryfancyboxthumbs', get_template_directory_uri() . '/js/jquery.fancybox-thumbs.js', false, null, true);

    wp_deregister_script( 'jquerymixitup' );
    wp_enqueue_script( 'jquerymixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', false, null, true);

    wp_deregister_script( 'jqueryparallax' );
    wp_enqueue_script( 'jqueryparallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', false, null, true);

    wp_deregister_script( 'owlcarousel' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'jquerythemepunchrevolution' );
    wp_enqueue_script( 'jquerythemepunchrevolution', get_template_directory_uri() . '/js/jquery.themepunch.revolution.min.js', false, null, true);

    wp_deregister_script( 'jquerythemepunchtools' );
    wp_enqueue_script( 'jquerythemepunchtools', get_template_directory_uri() . '/js/jquery.themepunch.tools.min.js', false, null, true);

    wp_deregister_script( 'sidemenu' );
    wp_enqueue_script( 'sidemenu', get_template_directory_uri() . '/js/SideMenu.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', false, null, true);

    wp_add_inline_script( 'main', 'var sc_project=11931626; 
var sc_invisible=1; 
var sc_security="ab7a4879"; 
var sc_https=1;');
    wp_deregister_script( 'counter' );
    wp_enqueue_script( 'counter', 'https://www.statcounter.com/counter/counter.js', false, null, true);

    wp_add_inline_script( 'counter', 'var sc_project=11931626; 
var sc_invisible=1; 
var sc_security="ab7a4879"; 
var sc_https=1;');
    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,400,700,900', false, null, 'all');

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'eleganticons' );
    wp_enqueue_style( 'eleganticons', get_template_directory_uri() . '/css/elegantIcons.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'hovermin' );
    wp_enqueue_style( 'hovermin', get_template_directory_uri() . '/css/hover-min.css', false, null, 'all');

    wp_deregister_style( 'animate' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, null, 'all');

    wp_deregister_style( 'lineaicon' );
    wp_enqueue_style( 'lineaicon', get_template_directory_uri() . '/css/linea-icon.css', false, null, 'all');

    wp_deregister_style( 'owlcarousel' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', false, null, 'all');

    wp_deregister_style( 'jqueryfancybox' );
    wp_enqueue_style( 'jqueryfancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', false, null, 'all');

    wp_deregister_style( 'sidemenu' );
    wp_enqueue_style( 'sidemenu', get_template_directory_uri() . '/css/SideMenu.css', false, null, 'all');

    wp_deregister_style( 'revolution' );
    wp_enqueue_style( 'revolution', get_template_directory_uri() . '/css/revolution.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'amvdm_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>