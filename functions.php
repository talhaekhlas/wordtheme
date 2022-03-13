<?php
// function doUpperCase($data){
//   echo strtoupper($data);
// }

function ekhlas_bootstraping(){
  load_theme_textdomain( 'ekhlas');
  add_theme_support( 'post-thumbnails' ); // for using thumbnails
  add_theme_support( 'title-tags' );//title tag er support
  add_theme_support( 'custom-header',
   ['header-text'=> true, 
  'default-text-color'=> '#dd3333',
   'height'=> '600',
    'width'=>'1200',
    'flex-height'=> true,
    'flex-width'=> true]
   );//header image support er support
  add_theme_support( 'custom-logo', ['height'=> 100, 'width'=> '100'] );
  add_theme_support( 'custom-background' );



  register_nav_menus(
    array(
      "topmenu"=>"Top Menu",
      "topmenu1"=>"Top Menu1",
      "topmenu2"=>"Top Menu2",
      "topmenu3"=>"Top Menu3",
      "topmenu4"=>"Top Menu4"
    )  
  );

}

add_action( 'after_setup_theme', 'ekhlas_bootstraping' );

function ekhlas_assets()
{
    wp_enqueue_style( 'ekhlas', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'featherlight-css','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css' );
    wp_enqueue_script( 'featherlight-js','//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js',['jquery'],'0.0.1',true );
    wp_enqueue_script( 'customjs',get_template_directory_uri().'/assets/js/custom.js',null,'0.0.1',true );
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


 function ekhlas_protect_title_change(){
   return "%s";
 }
  add_filter( 'protected_title_format', 'ekhlas_protect_title_change' );


  function ekhlas_nav_menu_css_class($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;
  }
  add_filter('nav_menu_css_class', 'ekhlas_nav_menu_css_class',10,2);

  function ekhlas_head_activity(){
      if(is_front_page()){
        if(current_theme_supports('custom-header')){ ?>

        <style>
          .header{
            background-image: url(<?php echo header_image(); ?>);
            background-size: cover;
            margin-bottom: 30px;
          }

          .header h1.heading a{
            color: #<?php echo get_header_textcolor(); ?>;
          }
        </style>

        <?php }
      }
  }

  add_action('wp_head', 'ekhlas_head_activity');


?>