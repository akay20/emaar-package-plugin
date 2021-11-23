<?php 
/**
 * Plugin Name: Emaar Package Plugin
 * Description: Emaar Package Plugin
 * Version:     1.0.3
 * Author:      Akshay
 */

 /* ================================================================================================ */
/*                                     WP Package Updater                                           */
/* ================================================================================================ */

/**
* Copy/paste this section to your main plugin file or theme's functions.php and uncomment the sections below
* where appropriate to enable updates with WP Plugin Update Server.
*
* WARNING - READ FIRST:
* Before deploying the plugin or theme, make sure to change the following value
* - https://your-update-server.com  => The URL of the server where WP Plugin Update Server is installed.
* - $prefix_updater                 => Change this variable's name with your plugin or theme prefix
**/

/** Uncomment for plugin updates **/
require_once plugin_dir_path( __FILE__ ) . 'lib/wp-package-updater/class-wp-package-updater.php';

/** Enable plugin updates with license check **/
// $prefix_updater = new WP_Package_Updater(
// 	'https://your-update-server.com',
// 	wp_normalize_path( __FILE__ ),
// 	wp_normalize_path( plugin_dir_path( __FILE__ ) ),
// 	true
// );

/** Enable plugin updates without license check **/
$emaar_package_plugin = new WP_Package_Updater(
	'http://emaar-wp-server.local',
	wp_normalize_path( __FILE__ ),
	wp_normalize_path( plugin_dir_path( __FILE__ ) ),
	false // Can be omitted, false by default
);

/** Uncomment for theme updates **/
// require_once get_stylesheet_directory() . '/lib/wp-package-updater/class-wp-package-updater.php';

/** Enable theme updates with license check **/
// $prefix_updater = new WP_Package_Updater(
// 	'https://your-update-server.com',
// 	wp_normalize_path( __FILE__ ),
// 	get_stylesheet_directory(),
// 	true
// );

/** Enable theme updates without license check **/
// $prefix_updater = new WP_Package_Updater(
// 	'https://your-update-server.com',
// 	wp_normalize_path( __FILE__ ),
// 	get_stylesheet_directory(),
// 	false // Can be omitted, false by default
// );

/* ================================================================================================ */

// Plugin Update Checker

require 'lib/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    plugin_dir_url(__FILE__) . 'lib/update-plugin.json',
    __FILE__, //Full path to the main plugin file or functions.php.
    'emaar-package-plugin'
);
