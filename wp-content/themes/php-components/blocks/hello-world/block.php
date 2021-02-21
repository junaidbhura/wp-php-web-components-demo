<?php
/**
 * Block: Hello World.
 */

namespace JB\Theme\Blocks\HelloWorld;

const BLOCK_NAME = 'jb/hello-world';
const COMPONENT  = 'hello-world';

add_action( 'template_redirect', __NAMESPACE__ . '\\register' );

/**
 * Register block on the front-end.
 */
function register() {
	add_filter( 'pre_render_block', __NAMESPACE__ . '\\render', 10, 2 );
}

/**
 * Render this block.
 *
 * @param mixed $content Original content.
 * @param array $block   Parsed block.
 *
 * @return mixed
 */
function render( $content = null, $block = [] ) {
	// Check for block.
	if ( BLOCK_NAME !== $block['blockName'] ) {
		return $content;
	}

	// Build component attributes.
	$attributes = [
		'title'    => $block['attrs']['title'] ?? '',
		'subtitle' => $block['attrs']['subtitle'] ?? '',
	];

	// Return rendered component.
	return jb_component( COMPONENT, $attributes, false );
}
