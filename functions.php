<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function iclinic_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
  
  }
  add_action( 'wp_enqueue_scripts', 'iclinic_enqueue_styles' );

  // Register Menu Locations
// register_nav_menus( [
//   'main-menu' => esc_html__( 'Main Menu', 'iclinic' ),
// ]);

/**
 * Register Custom Navigation Walker
 */

 register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'iclinic' ),
) );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



?>