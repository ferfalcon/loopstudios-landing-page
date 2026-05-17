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

function loopstudios_landing_page_register_patterns() {
	$patterns_dir = get_template_directory() . '/patterns';
	if ( ! is_dir( $patterns_dir ) ) {
		return;
	}

	$files = glob( $patterns_dir . '/*.php' );
	foreach ( $files as $file ) {
		$pattern_data = get_file_data( $file, array(
			'title'       => 'Title',
			'slug'        => 'Slug',
			'description' => 'Description',
			'categories'  => 'Categories',
			'block_types' => 'Block Types',
			'keywords'    => 'Keywords',
			'viewport'    => 'Viewport',
			'inserter'    => 'Inserter',
		) );

		if ( empty( $pattern_data['slug'] ) ) {
			continue;
		}

		ob_start();
		include $file;
		$content = ob_get_clean();

		$categories = ! empty( $pattern_data['categories'] )
			? array_map( 'trim', explode( ',', $pattern_data['categories'] ) )
			: array();

		$block_types = ! empty( $pattern_data['block_types'] )
			? array_map( 'trim', explode( ',', $pattern_data['block_types'] ) )
			: array();

		WP_Block_Patterns_Registry::get_instance()->register(
			$pattern_data['slug'],
			array(
				'title'         => $pattern_data['title'],
				'content'       => $content,
				'description'   => $pattern_data['description'],
				'categories'    => $categories,
				'blockTypes'    => $block_types,
				'keywords'      => ! empty( $pattern_data['keywords'] ) ? array_map( 'trim', explode( ',', $pattern_data['keywords'] ) ) : array(),
				'viewportWidth' => ! empty( $pattern_data['viewport'] ) ? (int) $pattern_data['viewport'] : 1440,
				'inserter'      => 'false' !== $pattern_data['inserter'],
			)
		);
	}
}
add_action( 'init', 'loopstudios_landing_page_register_patterns' );

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
