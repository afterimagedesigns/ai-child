<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for child theme divi-child
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_stylesheet_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'divi_child_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function divi_child_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),
		array(
			'name'        => 'Wordfence Security',
			'slug'        => 'wordfence',
			'required'  => false,
		),
		array(
			'name'        => 'Google Analytics by MonsterInsights',
			'slug'        => 'google-analytics-for-wordpress',
			'required'  => false,
		),
		array(
			'name'        => 'Jetpack',
			'slug'        => 'jetpack',
			'required'  => false,
		),
		array(
			'name'        => 'BackUpWordPress',
			'slug'        => 'backupwordpress',
			'required'  => false,
		),
		array(
			'name'        => 'W3 Total Cache',
			'slug'        => 'w3-total-cache',
			'required'  => false,
		),
		array(
			'name'        => 'WP Smush - Image Optimization',
			'slug'        => 'wp-smushit',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 */
	$config = array(
		'id'           => 'divi-child',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
