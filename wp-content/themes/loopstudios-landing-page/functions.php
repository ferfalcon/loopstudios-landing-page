<?php
/**
 * Theme functions and definitions.
 */

if ( ! function_exists( 'loopstudios_landing_page_setup' ) ) :
	function loopstudios_landing_page_setup() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'loopstudios_landing_page_setup' );

function loopstudios_landing_page_styles() {
	if ( is_admin() ) {
		return;
	}

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'loopstudios-landing-page',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'loopstudios_landing_page_styles' );
