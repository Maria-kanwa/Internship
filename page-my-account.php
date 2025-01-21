<?php
/**
 * Template Name: Custom My Account Page
 *
 * This template will display the WooCommerce My Account content.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Ensure WooCommerce is active
        if ( class_exists( 'WooCommerce' ) ) {
            // Display the My Account title
            echo '<h1>' . esc_html__( 'My Account', 'your-text-domain' ) . '</h1>';
            
            // Display WooCommerce My Account shortcode
            echo do_shortcode( '[woocommerce_my_account]' );

            // Custom content or additional functionality
            echo '<div class="custom-content">';
            echo '<p>' . esc_html__( 'Welcome to your custom My Account page!', 'your-text-domain' ) . '</p>';
            echo '</div>';
        } else {
            echo '<p>' . esc_html__( 'WooCommerce is not active.', 'your-text-domain' ) . '</p>';
        }
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
