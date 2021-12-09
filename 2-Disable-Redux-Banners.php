<?php
/**
 * Plugin Name: Disable Redux Banners
 * Author: Indigo Tree
 * Version: 1
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( class_exists( 'Redux_Enable_Gutenberg', false ) ) {
	return;
}

/**
 * A no-op file that prevents the Redux advertising from showing.
 *
 * This works because we are loading it very early in the plugin's load order,
 * and when Redux's version comes in later, it won't re-load the same class.
 *
 * This may not work if another plugin loads Redux before WP-Mail-Logging loads.
 */
class Redux_Enable_Gutenberg {

	public static $is_disabled = true;

	public function __construct() {
	}

	public function __set($var, $val) {
	}

	public function __get($var) {
		return null;
	}

	public function __isset($name) {
		return false;
	}

	public function __unset($name) {
	}

	public function __call($name, $arguments) {
	}

	public static function __callStatic($name, $arguments) {
	}
}

new Redux_Enable_Gutenberg();
