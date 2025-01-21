<?php
/*
Template Name: Seller Profile
*/
get_header();

if (is_user_logged_in() && current_user_can('farmer')) {
    $current_user = wp_get_current_user();
    echo '<h2>Profile of ' . esc_html($current_user->display_name) . '</h2>';
    
    // Fetch products for the seller
    $args = array(
        'post_type' => 'products',
        'author' => $current_user->ID,
        'posts_per_page' => -1
    );
    $products = new WP_Query($args);
    
    if ($products->have_posts()) {
        echo '<h3>Available Products:</h3><ul>';
        while ($products->have_posts()) {
            $products->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
        wp_reset_postdata(); // Reset post data
    } else {
        echo 'No products listed yet.';
    }
} else {
    echo 'User is not logged in.';
}

get_footer();
