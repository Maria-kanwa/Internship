<?php
defined('ABSPATH') || exit;

global $product; // Ensure we have the product object

// If the product is not set or is not a valid WC_Product, get the product
if ( ! is_a( $product, 'WC_Product' ) ) {
    $product = wc_get_product(get_the_ID());
}

// You can now safely check if the product is on sale
if ($product && $product->is_on_sale()) {
    // Your sale flash code here
}
