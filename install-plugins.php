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
 * @version    2.6.1 for plugin Required Plugins
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */


add_action( 'tgmpa_register', 'required_plugins_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function required_plugins_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// Required Advanced Custom Fields Pro
		array(
			'name'               => 'Advanced Custom Fields Pro', // The plugin name.
			'slug'               => 'advanced-custom-fields-pro', // The plugin slug (typically the folder name).
			'source'             => dirname( __FILE__ ) . '/plugins/advanced-custom-fields-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
        // Required Gravity Forms
        array(
            'name'               => 'Gravity Forms', // The plugin name.
            'slug'               => 'gravityforms_2.4.16.3', // The plugin slug (typically the folder name).
            'source'             => dirname( __FILE__ ) . '/plugins/gravityforms_2.4.16.3.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
		// Required Crocoblock Wizard
		array(
			'name'               => 'Crocoblock Wizard', // The plugin name.
			'slug'               => 'crocoblock-wizard', // The plugin slug (typically the folder name).
			'source'             => dirname( __FILE__ ) . '/plugins/crocoblock-wizard.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		//Required Elementor Pro 
		array(
			'name'               => 'Elementor Pro', // The plugin name.
			'slug'               => 'elementor-pro', // The plugin slug (typically the folder name).
			'source'             => dirname( __FILE__ ) . '/plugins/elementor-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		//Required HappyFiles Pro 
		array(
			'name'               => 'HappyFiles Pro', // The plugin name.
			'slug'               => 'happyfiles-pro', // The plugin slug (typically the folder name).
			'source'             => dirname( __FILE__ ) . '/plugins/happyfiles-pro.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		//Required Unlimited Eelements For Elementor Premium
		array(
			'name'               => 'Unlimited Eelements For Elementor Premium', // The plugin name.
			'slug'               => 'unlimited-elements-for-elementor-premium', // The plugin slug (typically the folder name).
			'source'             => dirname( __FILE__ ) . '/plugins/unlimited-elements-for-elementor-premium.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		//Required Google Analytics Dashboard Plugin for WordPress by MonsterInsights 
		array(
			'name'               => 'Site Kit by Google – Analytics, Search Console, AdSense, Speed', // The plugin name.
			'slug'               => 'google-site-kit', // The plugin slug (typically the folder name).
		),
		// Requred Imsanity
		array(
			'name'               => 'Imsanity', // The plugin name.
			'slug'               => 'imsanity', // The plugin slug (typically the folder name).
		),
		// Requred OoohBoi Steroids for Elementor
		array(
			'name'               => 'OoohBoi Steroids for Elementor', // The plugin name.
			'slug'               => 'ooohboi-steroids-for-elementor', // The plugin slug (typically the folder name).
		),
		// Required Toolbar Extras for Elementor & More – WordPress Admin Bar Enhanced
		array(
			'name'               => 'Toolbar Extras for Elementor & More – WordPress Admin Bar Enhanced', // The plugin name.
			'slug'               => 'toolbar-extras', // The plugin slug (typically the folder name).
		),
		array(
			'name'      => 'Rank Math SEO Plugin',
			'slug'      => 'seo-by-rank-math',
		),
        array(
            'name'      => 'PowerPack For Elementor',
            'slug'      => 'powerpack-lite-for-elementor',
        ),
		// Required Central Color Palette
		array(
			'name'      => 'Central Color Palette',
			'slug'      => 'kt-tinymce-color-grid',
			'required'  => true,
		),
		// Required Safe SVG
		array(
			'name'      => 'Safe SVG',
			'slug'      => 'safe-svg',
			'required'  => true,
		),
		// Required Envato Elements
		array(
			'name'      => 'Envato Elements',
			'slug'      => 'envato-elements',
			'required'  => false,
		),
		// Required White Label CMS
		array(
			'name'      => 'White Label CMS',
			'slug'      => 'white-label-cms',
			'required'  => false,
		),
        // Required White Label CMS
		array(
			'name'      => 'GTmetrix for WordPress',
			'slug'      => 'gtmetrix-for-wordpress',
			'required'  => false,
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'required-plugins',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'required-plugins' ),
			'menu_title'                      => __( 'Install Plugins', 'required-plugins' ),

			'installing'                      => __( 'Installing Plugin: %s', 'required-plugins' ),
			// translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'required-plugins' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'required-plugins' ),
			'notice_can_install_required'     => _n_noop(
				//translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'required-plugins'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'required-plugins'
			),
			'notice_ask_to_update'            => _n_noop(
				// translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'required-plugins'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				// translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'required-plugins'
			),
			'notice_can_activate_required'    => _n_noop(
				// translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'required-plugins'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'required-plugins'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'required-plugins'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'required-plugins'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'required-plugins'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'required-plugins' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'required-plugins' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'required-plugins' ),
			// translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'required-plugins' ),
			// translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'required-plugins' ),
			// translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'required-plugins' ),
			'dismiss'                         => __( 'Dismiss this notice', 'required-plugins' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'required-plugins' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'required-plugins' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);

	tgmpa( $plugins, $config );
}