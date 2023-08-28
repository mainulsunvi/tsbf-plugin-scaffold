<?php

/**
 *
 * @package           TSBF Plugin
 * @author            Mainul Sunvi
 * @description       A Boiler Plate Plugin with OOP and DI Support
 * @license           GPL-3.0-or-later
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name: TSBF Plugin
 * URI: https://wordpress.org/plugins/
 * Description: A Boiler Plate Plugin with OOP and DI Support
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: Mainul Sunvi
 * Author URI: https://profiles.wordpress.org/mainulsunvi/
 * Text Domain: tsbf
 * License: GPL v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI: https://msunvi.com
 * Domain Path: /languages
 */

use TSBF\Classes\Dependencies;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TSBF_ROOT', plugin_dir_path( __FILE__ ) );
define( 'TSBF_ROOT_URL', plugin_dir_url( __FILE__ ) );

require TSBF_ROOT . 'loader/autoload.php';
require_once TSBF_ROOT . 'inc/container/DependencyContainer.php';

if ( ! function_exists( 'get_plugin_data' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

define( 'TSBF_DATA', get_plugin_data( __FILE__ ) );

( function () {
	if ( ! class_exists( 'Dependencies' ) ) {
		$container    = new DependencyContainer();
		$dependencies = $container -> get( Dependencies::class );
		$dependencies -> loader();
	}
} )();