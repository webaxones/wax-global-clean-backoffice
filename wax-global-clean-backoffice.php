<?php
/**
 * Plugin Name: WAX Global Clean Backoffice
 * Plugin URI: https://www.webaxones.com
 * Description: Remove little things on backoffice
 * Author: Webaxones
 * Author URI: https://www.webaxones.com
 * Version: 1.0
 */

// Don't load directly.
if ( ! defined( 'ABSPATH' ) ) :
	die( '-1' );
endif;

/**
 *  Remove Credits from Footer (WooCommerce & Co)
 *
 *  @link https://developer.wordpress.org/reference/hooks/admin_footer_text/
 */
add_filter( 'admin_footer_text', '__return_empty_string' );

/**
 *  Remove WordPress Menu Logo from Admin Bar
 *
 *  @link https://developer.wordpress.org/reference/hooks/wp_before_admin_bar_render/
 */
function wax_admin_bar_remove_wordpress_logo() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'wax_admin_bar_remove_wordpress_logo', 0 );
