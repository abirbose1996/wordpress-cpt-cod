<?php 

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// WP Theme Supports (Basic Theme Setup function) //

function vtc_theme_support(){

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	add_image_size('home-featured', 680, 400, array('center', 'center'));
	 
};
add_action('after_theme_setup', 'vtc_theme_support');

add_theme_support( 'post-thumbnails' ); 	

// Custom Logo //

function vtc_custom_logo() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'vtc_custom_logo' );

//Register Navigation Menu in WP Dashbaord //

function vtc_nav_menu(){

	register_nav_menus(
     array(
      'header-menu' => __( 'Header Menu','text_domain'),
      'footer-menu' => __( 'Footer Menu','text_domain'),
     )
   );
}

add_action('init', 'vtc_nav_menu');

//Navbar Classes Implent//

function add_class_li($classes, $item, $args){
    if(isset($args->li_class)){
        $classess[] = $args->li_class;
    }

    return $classes;
}

add_filter( 'nav_menu_css_class', 'add_class_li', 10, 3 );

// Navbar Link Menu Change // 

function add_link_atts($atts){

$atts['class'] = 'nav-link';
return $atts;

}

add_filter('nav_menu_link_attributes', 'add_link_atts');

/* Require bootstrap navwalker for menu */

// require_once('bootstrap-navwalker.php');


/* Add Support to Excerpt */

add_post_type_support( 'page', 'excerpt' );

//* Registering Widget Area *//

function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area discription',
      'before_widget' => '<div class="footer-inner-wrap">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area two',
      'id'            => 'footer_area_two',
      'description'   => 'This widget area discription',
      'before_widget' => '<div class="contact-det-list"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));

    register_sidebar( array(
        'name'          => 'Footer area three',
        'id'            => 'footer_area_three',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="contact-det-list"><span><i class="fa fa fa-phone" aria-hidden="true"></i></span>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
      ));

      
      register_sidebar( array(
        'name'          => 'Footer area four',
        'id'            => 'footer_area_four',
        'description'   => 'This widget area discription',
        'before_widget' => '<div class="contact-det-list"><span><i class="fa fa fa-envelope" aria-hidden="true"></i></span>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
      ));
  

  }
  
  add_action( 'widgets_init', 'register_widget_areas' );


// Enqueue Theme Styles //

function arshathemestyle() {
   	
  //Main Style File//
    
  wp_enqueue_style( 'main-theme-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0',);

  // Vendor CSS Files // 

  wp_enqueue_style( 'aos.css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), '1.0.0',);
  wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0',);
  wp_enqueue_style( 'bootstrap-icons.css', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0.0',);
  wp_enqueue_style( 'boxicons.min.css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0',);
  wp_enqueue_style( 'glightbox.min.css', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0.0',);
  wp_enqueue_style( 'swiper-bundle.min.css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0.0',);
  wp_enqueue_style( 'remixicon.css', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), '1.0.0',);


}

add_action( 'wp_enqueue_scripts', 'arshathemestyle' );


// Enqueue Javascripts & Jquery Files //

function arshathemescripts(){

//Main JS File//

wp_enqueue_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

//Vendor JS Files//

wp_enqueue_script( 'aos.js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), '1.0.0', true );
wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'glightbox.min.js', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'isotope.pkgd.min.js', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'swiper-bundle.min.js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'noframework.waypoints.js', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), '1.0.0', true );
wp_enqueue_script( 'validate.js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'arshathemescripts' );


















?>























