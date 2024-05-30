<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sovichetra.com
 * @since             1.0.0
 * @package           Egov_Plug
 *
 * @wordpress-plugin
 * Plugin Name:       Egov Test
 * Plugin URI:        https://mptc.gov.kh
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Chetra Chann
 * Author URI:        https://sovichetra.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       egov-plug
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EGOV_PLUG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-egov-plug-activator.php
 */
function activate_egov_plug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-egov-plug-activator.php';
	Egov_Plug_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-egov-plug-deactivator.php
 */
function deactivate_egov_plug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-egov-plug-deactivator.php';
	Egov_Plug_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_egov_plug' );
register_deactivation_hook( __FILE__, 'deactivate_egov_plug' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-egov-plug.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_egov_plug() {

	$plugin = new Egov_Plug();
	$plugin->run();

}
run_egov_plug();
