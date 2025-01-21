<?php
function test(){
    wp_enqueue_style('project', get_stylesheet_uri()); // Enqueues the main stylesheet
    // Or if you're trying to add a specific CSS file:
    // wp_enqueue_style('project', get_stylesheet_directory_uri() . '/style.css');



    wp_enqueue_script('main.js', get_theme_file_uri('./js/main.js'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'test');


//menu showing part

function myproject_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','myproject_features') ;





// Redirect to the custom My Account page
add_action('template_redirect', 'custom_my_account_redirect');
function custom_my_account_redirect() {
    if ( is_account_page() && ! is_user_logged_in() ) {
        wp_redirect( home_url( '/your-login-page/' )); // Change to your login page URL
        exit;
    }
}


// *********************************************************************************************
function custom_user_roles() {
    add_role('farmer', 'Farmer', array('read' => true));
    add_role('business', 'Business', array('read' => true));
}
add_action('init', 'custom_user_roles');



// *****************************************************************************************************

function register_product_post_type() {
    register_post_type('products', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'register_product_post_type');




