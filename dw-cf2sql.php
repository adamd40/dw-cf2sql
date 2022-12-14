<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/adamd40
 * @since             1.0.0
 * @package           Dw_Cf2sql
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Form to SQL DB
 * Plugin URI:        https://github.com/adamd40/dw-cf2sql
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Adam Burns
 * Author URI:        https://github.com/adamd40
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dw-cf2sql
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
define( 'DW_CF2SQL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dw-cf2sql-activator.php
 */
function activate_dw_cf2sql() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dw-cf2sql-activator.php';
	Dw_Cf2sql_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dw-cf2sql-deactivator.php
 */
function deactivate_dw_cf2sql() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dw-cf2sql-deactivator.php';
	Dw_Cf2sql_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dw_cf2sql' );
register_deactivation_hook( __FILE__, 'deactivate_dw_cf2sql' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dw-cf2sql.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dw_cf2sql() {

	$plugin = new Dw_Cf2sql();
	$plugin->run();

}
run_dw_cf2sql();
