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
add_action( 'wp_enqueue_scripts', 'ekhlas_assets' )
?>