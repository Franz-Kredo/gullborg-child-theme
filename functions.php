<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'divi', get_template_directory_uri() . '/style.css' );
      wp_enqueue_script( 'divi', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array( 'jquery', 'divi-custom-script' ), '0.1.2', true );
	}

	// Load custom header template
	function set_global_header() {
		locate_template('theme-header.php', true); // Load the custom header template
	}
	add_action('get_header', 'set_global_header');
	
	// Load custom footer template
	function set_global_footer() {
		get_template_part('footer'); // Load footer.php from the theme directory
	}
	add_action('wp_footer', 'set_global_footer');
	
	// REGISTER GLOBAL CSS VARIABLES //
	function kredo_theme_default_values() {
		return [
			'primary' => '#bf0812',
			'accent' => '#e57373',
			'button_text' => '#ffffff',
		];
	}
	
	// Register settings and initialize default values
	function kredo_register_theme_settings() {
		$defaults = kredo_theme_default_values();
	
		foreach ($defaults as $key => $value) {
			register_setting('kredo_theme_settings', "kredo_$key");
			if (get_option("kredo_$key") === false) {
				update_option("kredo_$key", $value);
			}
		}
	}
	add_action('admin_init', 'kredo_register_theme_settings');



	/***************************************************/
	//====== ADMIN DASHBOARD CUSTOMIZATION START ======//
	/***************************************************/

	// Add a custom menu page to the admin dashboard
	function custom_dashboard_menu() {
		add_menu_page(
			'Kredo Theme',          // Page title
			'Kredo Theme',          // Menu title
			'manage_options',            // Capability required
			'custom-dashboard',          // Menu slug
			'custom_dashboard_page_html', // Callback function
			// 'dashicons-admin-site',      // Icon
			get_stylesheet_directory_uri() . '/img/kredo-logo-small-rounded.png', // Custom icon URL
			2                            // Position on the menu
		);
	}
	add_action('admin_menu', 'custom_dashboard_menu');

	// Render the custom dashboard page
	function custom_dashboard_page_html() {
		if (!current_user_can('manage_options')) {
			return;
		}
	
		$defaults = kredo_theme_default_values();
		?>
		<div class="wrap">
			<h1><?php esc_html_e('Kredo Theme Settings', 'textdomain'); ?></h1>
			<form method="post" action="options.php">
				<?php
				// Output security fields for the registered setting
				settings_fields('kredo_theme_settings');
	
				foreach ($defaults as $key => $default) {
					$value = get_option("kredo_$key", $default);
					?>
					<p>
						<label for="kredo_<?php echo esc_attr($key); ?>"><?php echo ucfirst(str_replace('_', ' ', $key)); ?></label>
						<input type="text" id="kredo_<?php echo esc_attr($key); ?>" name="kredo_<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value); ?>" class="regular-text">
					</p>
					<?php
				}
				?>
				<?php submit_button('Save Settings'); ?>
			</form>
		</div>
		<?php
	}
	

	// Register settings, sections, and fields
	function custom_settings_init() {
		// Register a new setting
		register_setting('custom_settings_group', 'custom_setting_name');

		// Add a settings section
		add_settings_section(
			'custom_settings_section',          // Section ID
			'Custom Settings Section',          // Section title
			'custom_settings_section_callback', // Callback function
			'custom-menu-slug'                  // Page slug
		);

		// Add a settings field
		add_settings_field(
			'custom_field_id',                // Field ID
			'Custom Field Label',             // Field label
			'custom_field_callback',          // Callback function
			'custom-menu-slug',               // Page slug
			'custom_settings_section',        // Section ID
			[
				'label_for' => 'custom_field_id',
				'class' => 'custom-class',
			]
		);
	}
	add_action('admin_init', 'custom_settings_init');

	// Section callback
	function custom_settings_section_callback() {
		echo '<p>Enter your custom settings below.</p>';
	}

	// Field callback
	function custom_field_callback($args) {
		// Get the value of the setting
		$value = get_option('custom_setting_name', '');
		?>
		<input type="text" id="<?php echo esc_attr($args['label_for']); ?>" name="custom_setting_name" value="<?php echo esc_attr($value); ?>" class="regular-text">
		<p class="description">Enter some custom data here.</p>
		<?php
	}
	/**************************************************/
	//====== ADMIN DASHBOARD CUSTOMIZATION STOP ======//
	/**************************************************/

	function kredo_output_custom_css_variables() {
		$defaults = kredo_theme_default_values();
		echo '<style>:root {';
		foreach ($defaults as $key => $default) {
			$value = get_option("kredo_$key", $default);
			echo "--$key: " . esc_attr($value) . ";";
		}
		echo '}</style>';
	}
	add_action('wp_head', 'kredo_output_custom_css_variables');
	
?>