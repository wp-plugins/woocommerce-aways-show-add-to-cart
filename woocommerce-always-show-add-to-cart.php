<?php

/**
 * Plugin Name: WooCommerce Always Show Add to cart Button
 * Plugin URI: https://wordpress.org
 * Description: Force always show add to cart Button on Variable Products
 * Author: fernandoyada
 * Author URI: http://impermad.com.br/
 * Version: 0.1
 * License: GPLv2 or later
 * Text Domain: woocommerce-always-show-add-to-cart-button
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


add_action( 'woocommerce_before_add_to_cart_button', function(){
    // start output buffering
    ob_start();
} );

add_action( 'woocommerce_before_single_variation', function(){
    // end output buffering
    ob_end_clean();
    // output custom div
    echo '<div class="single_variation_wrap_custom">';
} );

