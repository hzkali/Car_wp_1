<?php
/*
 * TGM
 */
class TGMRequiredPlugins {

	public function __construct() {
		add_action( 'tgmpa_register', array( $this, 'autixir_register_required_plugins' ) );
	}


	public function autixir_register_required_plugins(){

		$plugins = array(
			array(
				'name' => esc_html__('Autixir Core', 'autixir'), // The plugin name
				'slug' => 'autixir-core', // The plugin slug (typically the folder name)
				'source' => get_template_directory() . '/core/plugins/autixir-core.zip', // The plugin source
				'required' => true, // If false, the plugin is only 'recommended' instead of required    
				'version' => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.        
				'force_activation' => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			),
			array(
				'name'               => esc_html__('Kirki Customizer Framework', 'autixir'), // The plugin name
				'slug'               => 'kirki', // The plugin slug (typically the folder name)
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__('Contact Form 7', 'autixir'), // The plugin name
				'slug'               => 'contact-form-7', // The plugin slug (typically the folder name)
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__('Elementor', 'autixir'), // The plugin name
				'slug'               => 'elementor', // The plugin slug (typically the folder name)
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__('Meta Box', 'autixir'), // The plugin name
				'slug'               => 'meta-box', // The plugin slug (typically the folder name)
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
			array(
				'name'               => esc_html__('One Click Demo Import', 'autixir'), // The plugin name
				'slug'               => 'one-click-demo-import', // The plugin slug (typically the folder name)
				'required'           => true, // If false, the plugin is only 'recommended' instead of required
				'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				'external_url'       => '', // If set, overrides default API URL and points to an external URL
			),
		);

		// Change this to your theme text domain, used for internationalising strings

		$config = array(
			'domain'       => 'autixir', // Text domain - likely want to be the same as your theme.
			'default_path' => '', // Default absolute path to pre-packaged plugins
			'parent_slug'  => 'themes.php',
			'menu'         => 'install-required-plugins', // Menu slug
			'has_notices'  => true, // Show admin notices or not
			'is_automatic' => false, // Automatically activate plugins after installation or not
			'message'      => '', // Message to output right before the plugins table
			'strings'      => array(
				'page_title'                      => esc_html__('Install Required Plugins', 'autixir'),
				'menu_title'                      => esc_html__('Install Plugins', 'autixir'),
				'installing'                      => esc_html__('Installing Plugin: %s', 'autixir'), // %1$s = plugin name
				'oops'                            => esc_html__('Something went wrong with the plugin API.', 'autixir'),
				'notice_can_install_required'     => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'autixir'), // %1$s = plugin name(s)
				'notice_can_install_recommended'  => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'autixir'), // %1$s = plugin name(s)
				'notice_cannot_install'           => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'autixir'), // %1$s = plugin name(s)
				'notice_can_activate_required'    => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'autixir'), // %1$s = plugin name(s)
				'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'autixir'), // %1$s = plugin name(s)
				'notice_cannot_activate'          => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'autixir'), // %1$s = plugin name(s)
				'notice_ask_to_update'            => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'autixir'), // %1$s = plugin name(s)
				'notice_cannot_update'            => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'autixir'), // %1$s = plugin name(s)
				'install_link'                    => _n_noop('Begin installing plugin', 'Begin installing plugins', 'autixir'),
				'activate_link'                   => _n_noop('Activate installed plugin', 'Activate installed plugins', 'autixir'),
				'return'                          => esc_html__('Return to Required Plugins Installer', 'autixir'),
				'plugin_activated'                => esc_html__('Plugin activated successfully.', 'autixir'),
				'complete'                        => esc_html__('All plugins installed and activated successfully. %s', 'autixir'), // %1$s = dashboard link
				'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated' or 'error'
			),
		);

		tgmpa($plugins, $config);
	}
}
new TGMRequiredPlugins();