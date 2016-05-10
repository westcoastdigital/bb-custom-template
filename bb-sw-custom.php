<?php
/**
 * Plugin Name: Custom Module Template
 * Plugin URI: http://www.beaverlodgehq.com
 * Description: The template I use to build custom Beaver Builder modules.
 * Version: 1.0.0
 * Author: Jon Mather
 * Author URI: http://www.simplewebsiteinaday.com.au
 */

define( 'SW_CUSTOM_MODULE_DIR', plugin_dir_path( __FILE__ ) );
define( 'SW_CUSTOM_MODULE_URL', plugins_url( '/', __FILE__ ) );

function sw_custom_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'includes/bb-sw-custom-module.php';
    }
}
add_action( 'init', 'sw_custom_module' );