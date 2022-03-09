<?php
// function doUpperCase($data){
//   echo strtoupper($data);
// }

function ekhlas_bootstraping(){
  load_theme_textdomain( 'ekhlas');
  add_theme_support( 'post-thumbnails' ); // for using thumbnails
  add_theme_support( 'title-tags' );//title tag er support
}

add_action( 'after_setup_theme', 'ekhlas_bootstraping' );

function ekhlas_assets()
{
    wp_enqueue_style( 'ekhlas', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'ekhlas_assets' );


function register_custom_widget_area() {
  register_sidebar(
  array(
  'id' => 'single-post-left-widget',
  'name' => __( 'Single post left widget area', 'ekhlas' ),
  'description' => __( 'Single post left widget area description', 'ekhlas' ),
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
  'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
  'after_title' => '</h3></div>'
  )
  );
  }
  add_action( 'widgets_init', 'register_custom_widget_area' );


?>