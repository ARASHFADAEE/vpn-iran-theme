
<?php



function add_theme_scripts(){
    wp_enqueue_style('custom.css' , get_template_directory_uri() . './assets/css/custom.css' , array() , false , 'all');
    wp_enqueue_style('main-rtl' , get_template_directory_uri() . './assets/css/main-rtl.min.css' , array() , false , 'all');
    // wp_enqueue_style('main' , get_template_directory_uri() . './assets/css/main.min.css' , array() , false , 'all');
    // wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

    // javascript source

    wp_enqueue_script('jq' , get_template_directory_uri() . './assets/js/vendors/jquery-3.6.0.min.js' , array() , false , true);
    wp_enqueue_script('bootstrap.bundle.min' , get_template_directory_uri() . './assets/js/vendors/bootstrap.bundle.min.js' , array() , false , true);
    wp_enqueue_script('swiper' , get_template_directory_uri() . './assets/js/vendors/swiper-bundle.min.js' , array() , false , true);
    wp_enqueue_script('jquery.magnific-popup.min' , get_template_directory_uri() . './assets/js/vendors/jquery.magnific-popup.min.js' , array('jquery') , false , true);
    wp_enqueue_script('parallax.min' , get_template_directory_uri() . './assets/js/vendors/parallax.min.js' , array() , false , true);
    wp_enqueue_script('aos' , get_template_directory_uri() . './assets/js/vendors/aos.js' , array() , false , true);
    wp_enqueue_script('app' , get_template_directory_uri() . './assets/js/app.js' , array() , false , true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function title_setup(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');


}
add_action('after_setup_theme' , 'title_setup');