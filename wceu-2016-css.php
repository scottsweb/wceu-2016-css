<?php
/*
Plugin Name: WCEU 2016 CSS
Plugin URI: https://github.com/scottsweb/wceu-2016-css
Description: Custom CSS for the WordCamp Europe 2016 theme.
Version: 1.0
Author: Scott Evans
Author URI: http://scott.ee
Text Domain: wceu-2016-css
Domain Path: /languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

*/

define( 'WCEU_2016_CSS_URL', plugins_url( '/css', __FILE__ ) );
define( 'WCEU_2016_PATH', dirname( __FILE__ ) );
define( 'WCEU_2016_BASE', plugin_basename( __FILE__ ) );
define( 'WCEU_2016_FILE', __FILE__ );

/**
 * Enqueue the compiled stylesheet
 *
 * @return void
 */
function wceu_css_setup() {
	wp_enqueue_style( 'wceu', WCEU_2016_CSS_URL . '/styles.min.css', array(), '1.0', 'screen' );
	wp_dequeue_style( 'style' ); // remove base CSS from theme
}
add_action( 'wp_enqueue_scripts', 'wceu_css_setup', 100);

/**
 * Add typekit kit
 */
function wceu_kit() {
	?>
	<script src="https://use.typekit.net/eye7ffh.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php
}
//add_action( 'wp_head', 'wceu_kit' );