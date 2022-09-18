<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/adamd40
 * @since      1.0.0
 *
 * @package    Dw_Cf2sql
 * @subpackage Dw_Cf2sql/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dw_Cf2sql
 * @subpackage Dw_Cf2sql/includes
 * @author     Adam Burns <adam@dropwire.digital>
 */
class Dw_Cf2sql_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dw-cf2sql',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
