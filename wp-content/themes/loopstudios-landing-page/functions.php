<?php
/**
 * Theme functions and definitions.
 */

if ( ! function_exists( 'loopstudios_landing_page_setup' ) ) :
	function loopstudios_landing_page_setup() {
		add_editor_style( 'assets/css/editor-style.css' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
	}
endif;
add_action( 'after_setup_theme', 'loopstudios_landing_page_setup' );

function loopstudios_landing_page_favicon() {
	$favicon_url = get_template_directory_uri() . '/assets/images/favicon-32x32.png';
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( $favicon_url ) . '" />';
}
add_action( 'wp_head', 'loopstudios_landing_page_favicon' );

function loopstudios_landing_page_styles() {
	if ( is_admin() ) {
		return;
	}

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'loopstudios-google-fonts',
		'https://fonts.googleapis.com/css2?family=Alata&family=Josefin+Sans:wght@300&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'loopstudios-landing-page',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'loopstudios-google-fonts' ),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'loopstudios_landing_page_styles' );
