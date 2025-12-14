<?php
/**
 * Gigantic Education functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gigantic Education
 */

if ( ! defined( 'gigantic_education_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'gigantic_education_VERSION', wp_get_theme()->get( 'Version' ) );
}

define( 'gigantic_education_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'gigantic_education_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gigantic_education_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Gigantic Education, use a find and replace
		 * to change 'gigantic-education' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gigantic-education', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'gigantic_education_setup' );

/**
 * Enqueue scripts and styles.
 */
function gigantic_education_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Register theme stylesheet.
	wp_enqueue_style( 'gigantic-education-styles', get_theme_file_uri( '/style.css' ), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'gigantic_education_scripts' );

/**
 * Info
 */
require get_theme_file_path( '/inc/admin/info.php' );

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function gigantic_education_register_block_styles() {
		// Box shadow for columns, column, group and image
		register_block_style(
			'core/columns',
			array(
				'name'  => 'sb-box-shadow',
				'label' => __( 'Box Shadow', 'gigantic-education' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'sb-box-shadow',
				'label' => __( 'Box Shadow', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'sb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'sb-box-shadow-large',
				'label' => __( 'Box Shadow Large', 'gigantic-education' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'sb-box-shadow',
				'label' => __( 'Box Shadow', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'sb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'sb-box-shadow-large',
				'label' => __( 'Box Shadow Larger', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'sb-box-shadow',
				'label' => __( 'Box Shadow', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'sb-box-shadow-medium',
				'label' => __( 'Box Shadow Medium', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'sb-box-shadow-larger',
				'label' => __( 'Box Shadow Large', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'sb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'gigantic-education' )
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'sb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'gigantic-education' )
			)
		);

		register_block_style(
			'core/column',
			array(
				'name'  => 'sb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'gigantic-education' )
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'  => 'sb-box-shadow-hover',
				'label' => __( 'Box Shadow on Hover', 'gigantic-education' )
			)
		);

		// Secondary button
		register_block_style(
			'core/button',
			array(
				'name'   => 'sb-button-secondary',
				'label'  => __( 'Secondary', 'gigantic-education' )
			)
		);
	}
	add_action( 'init', 'gigantic_education_register_block_styles' );
}