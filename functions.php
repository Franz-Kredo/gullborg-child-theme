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
	

	
?>