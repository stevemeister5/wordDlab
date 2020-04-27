<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme Compatibility for Twenty Seventeen theme
 * @see https://wordpress.org/themes/twentyseventeen/
 *
 * @since ??
 */
class ET_Builder_Theme_Compat_Twentyseventeen {
	/**
	 * Unique instance of class.
	 *
	 * @var self
	 */
	public static $instance;

	/**
	 * Constructor.
	 */
	private function __construct(){
		$this->init_hooks();
	}

	/**
	 * Gets the instance of the class.
	 *
	 * @since ??
	 *
	 * @return self
	 */
	public static function init() {
		if ( null === self::$instance ){
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Hook methods to WordPress.
	 *
	 * @since ??
	 */
	function init_hooks() {
		$theme   = wp_get_theme();
		$version = isset( $theme['Version'] ) ? $theme['Version'] : false;

		// Bail if no theme version found
		if ( ! $version ) {
			return;
		}

		add_filter( 'body_class', array( $this, 'remove_body_class_in_theme_builder' ) );
	}

	/**
	 * Remove classes that trigger special JS functionality which does not apply
	 * while using the Theme Builder.
	 *
	 * @param string[] $classes
	 *
	 * @return string[]
	 *
	 * @since ??
	 */
	function remove_body_class_in_theme_builder( $classes ) {
		if ( ! et_builder_tb_enabled() ) {
			return $classes;
		}

		$blacklist = array( 'has-sidebar' );
		$filtered  = array();

		foreach ( $classes as $class ) {
			if ( ! in_array( $class, $blacklist, true ) ) {
				$filtered[] = $class;
			}
		}

		return $filtered;
	}
}
ET_Builder_Theme_Compat_Twentyseventeen::init();
