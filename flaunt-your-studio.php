<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://flauntsites.com
 * @since             0.0.1
 * @package           Flaunt_Your_Studio
 *
 * @wordpress-plugin
 * Plugin Name:       Flaunt Your Studio
 * Plugin URI:        https://flauntsites.com
 * Description:       The greatest photography CMS known to man... this will become.
 * Version:           0.0.1
 * Author:            William Bay
 * Author URI:        https://flauntsites.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       flaunt-your-studio
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-flaunt-your-studio-activator.php
 */
function activate_flaunt_your_studio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flaunt-your-studio-activator.php';
	flaunt_your_studio_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-flaunt-your-studio-deactivator.php
 */
function deactivate_flaunt_your_studio() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-flaunt-your-studio-deactivator.php';
	flaunt_your_studio_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_flaunt_your_studio' );
register_deactivation_hook( __FILE__, 'deactivate_flaunt_your_studio' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-flaunt-your-studio.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_flaunt_your_studio() {

	$plugin = new flaunt_your_studio();
	$plugin->run();

}
run_flaunt_your_studio();
