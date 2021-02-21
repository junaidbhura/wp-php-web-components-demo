<?php
/**
 * Functions and definitions.
 */

// Template tags.
require_once __DIR__ . '/inc/template-tags.php';

// Hooks.
add_action( 'init', 'jb_register_blocks' );
add_action( 'wp_enqueue_scripts', 'jb_register_styles' );
add_action( 'enqueue_block_editor_assets', 'jb_block_editor_assets' );
add_action( 'after_setup_theme', 'jb_setup_block_editor' );

/**
 * Register blocks.
 */
function jb_register_blocks() {
	require_once __DIR__ . '/blocks/hello-world/block.php';
}

/**
 * Enqueue styles for the front-end.
 */
function jb_register_styles() {
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/style.css' );
}

/**
 * Register Block Editor assets.
 */
function jb_block_editor_assets() {
	wp_enqueue_script(
		'blocks',
		get_stylesheet_directory_uri() . '/dist/blocks.js',
		array(
			'wp-i18n',
			'wp-blocks',
			'wp-components',
			'wp-editor',
			'wp-plugins',
			'wp-edit-post',
		),
		1,
		false
	);
}

/**
 * Add editor styles.
 */
function jb_setup_block_editor() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style.css' );
	add_editor_style( 'dist/style-blocks.css' );
	add_editor_style( 'dist/blocks.css' );
}
