<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5',array('search-form') );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in our CSS
function iclinic_enqueue_styles() {

    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
    wp_enqueue_style( 'mobile-css', get_stylesheet_directory_uri() . '/css/mobile.css', [], time(), 'all' );

  
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


/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );


/**
 * Register Customizer1 :  customize Site LOGO
 */
function register_Customizer1(){
  require_once get_template_directory() . '/customizer/Customizer1.php';
}
add_action( 'after_setup_theme', 'register_Customizer1' );


/**
 * Register Customizer2 :  customize Header, image and text
 */
function register_Customizer2(){
  require_once get_template_directory() . '/customizer/Customizer2.php';
}
add_action( 'after_setup_theme', 'register_Customizer2' );


/**
 * Register Customizer3 :  customize Banner1 Text and Image (section 2)
 */
function register_Customizer3(){
  require_once get_template_directory() . '/customizer/Customizer3.php';
}
add_action( 'after_setup_theme', 'register_Customizer3' );

/**
 * Register Customizer4 :  customize offer Text and Image (section 6)
 */
function register_Customizer4(){
  require_once get_template_directory() . '/customizer/Customizer4.php';
}
add_action( 'after_setup_theme', 'register_Customizer4' );


/**
 * Register Customizer5 :  customize Blog Text and Image (section 9)
 */
function register_Customizer5(){
  require_once get_template_directory() . '/customizer/Customizer5.php';
}
add_action( 'after_setup_theme', 'register_Customizer5' );


/**
 * Register Customizer6 :  Contact Us Page
 */
function register_Customizer6(){
  require_once get_template_directory() . '/customizer/Customizer6.php';
}
add_action( 'after_setup_theme', 'register_Customizer6' );

//----------------------------------------------------------------------------------------
function _theme_customize_register($wp_customize){
  $prefix = ".prefix_";
  $classes = array(
    "iclinic-header-callout-image",
    "iclinic-header-callout-headline",
    "iclinic-header-callout-title",
    "iclinic-header-callout-text",
    "iclinic-banner1-callout-image",
    "iclinic-blog-callout-image1",
    "iclinic-blog-callout-image2",
    "iclinic-blog-callout-image3",
    "iclinic-contactus-callout-headline",
    "iclinic-contactus-callout-image1",
    "iclinic-contactus-callout-image2",
    "iclinic-contactus-callout-image3",
    "iclinic-contactus-callout-txttitle1",
    "iclinic-contactus-callout-txttitle2",
    "iclinic-contactus-callout-txttitle3",
    "iclinic-contactus-callout-txttitle4",
    
  );
  
  foreach ($classes as $class) {
    $wp_customize->selective_refresh->add_partial($class, array(
      "setting"=>array($class),
      "selector" => $prefix.$class,
      "container_inclusive"=>false,
      "render_callback" => function() use ($class){
        echo get_theme_mod($class);
      }
    ));
  }
}

add_action("customize_register", "_theme_customize_register");
?>