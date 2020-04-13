<?php
/**
 * Plugin Name: Imagify | Turn off Imagify WebP image replacement
 * Description: Prevent Imagify from processing <img> to <picture>.
 * Plugin URI:  https://wordpress.org/plugins/imagify/
 * Author:      Imagify Support Team
 * Author URI:  http://imagify.io/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2020
 */
namespace ImagifyPlugin\Helpers\webp\noreplacement;

defined( 'ABSPATH' ) or die();

add_filter( 'imagify_loaded', __NAMESPACE__ . '\no_webp_replacement' );

function no_webp_replacement( ) {
	// check if the WebP feature is on
	if ( get_imagify_option( 'display_webp' ) ) {
		// Turn off <img> replacement
		add_filter( 'imagify_allow_picture_tags_for_webp', '__return_false' );	
	}
}
