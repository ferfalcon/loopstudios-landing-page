<?php
/**
 * Plugin Name:       Loopstudios Landing Page
 * Plugin URI:        https://github.com/your-username/loopstudios-landing-page
 * Description:       Companion plugin for the Loopstudios Landing Page block theme. Registers custom blocks and functionality.
 * Version:           1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            Fernando Falcon
 * Author URI:        https://www.ferfalcon.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       loopstudios-landing-page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LOOPSTUDIOS_LANDING_PAGE_VERSION', '1.0' );
define( 'LOOPSTUDIOS_LANDING_PAGE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Main plugin class.
 */
final class Loopstudios_Landing_Page {

	private static ?Loopstudios_Landing_Page $instance = null;

	public static function instance(): Loopstudios_Landing_Page {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		$this->register_hooks();
	}

	private function register_hooks(): void {
		add_action( 'init', array( $this, 'register_blocks' ) );
	}

	public function register_blocks(): void {
		$blocks_dir = LOOPSTUDIOS_LANDING_PAGE_PLUGIN_DIR . 'blocks';
		if ( ! is_dir( $blocks_dir ) ) {
			return;
		}

		$block_dirs = glob( $blocks_dir . '/*/block.json' );
		foreach ( $block_dirs as $block_json ) {
			register_block_type( dirname( $block_json ) );
		}
	}
}

function loopstudios_landing_page(): Loopstudios_Landing_Page {
	return Loopstudios_Landing_Page::instance();
}
add_action( 'plugins_loaded', 'loopstudios_landing_page' );
