<?php


/**
 * (0. ERROR REPORTING - disable for production)
 */
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
date_default_timezone_set('Europe/Stockholm');

/**
 * 1. INCLUDES
 */
// Update when we need to force JS or CSS update
define("DEFAULT_THEME_VERSION", "1.0.0");

/**
 * 2. THEME INITIALIZATION & ENQUEUE SCRIPTS AND STYLES
 */
function default_main_js(){
    wp_enqueue_script( 'main-js', get_theme_file_uri('/assets/js/bundle-js/main.js'), array('jquery'), '1.0', true);
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'bootstrap', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', null, '1.0', true);
    wp_enqueue_script( 'jquery-migrate', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', null, '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'default_main_js' );


function default_register_styles() {
    wp_enqueue_style( 'bootstrap-css', "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css");
    wp_enqueue_style( 'default-style', get_template_directory_uri() . '/assets/css/style.css', null, DEFAULT_THEME_VERSION, false);
    
}
add_action( 'wp_enqueue_scripts', 'default_register_styles' );




function project_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'project_setup');

/**
 * 3. MENUS
 */
function project_menus() {
    $locations = array(
        'primary' => __( 'Huvudmeny', 'themedefault' ),
        'footer' => __( 'Footer-meny', 'themedefault' ),
    );
    register_nav_menus( $locations );
}
add_action( 'init', 'project_menus' );


/**
 * 5. POST TYPES
 */



/**
 * Create Guthembergs Blocks
 */


