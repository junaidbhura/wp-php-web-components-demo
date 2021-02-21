<?php
/**
 * Template tags.
 */

/**
 * Render a component.
 *
 * @param string $name       Component name.
 * @param array  $attributes Attributes to pass to component.
 * @param bool   $echo       Echo the component.
 *
 * @return false|string|void
 */
function jb_component( $name = '', $attributes = [], $echo = true ) {
	$path = get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . $name . DIRECTORY_SEPARATOR . 'index.php';
	if ( ! file_exists( $path ) ) {
		return false;
	}

	ob_start();
	require $path;
	$component = ob_get_clean();

	if ( false === $echo ) {
		return $component;
	}

	echo $component; // phpcs:ignore -- No need to escape it, since all escaping happens in the component.
}

/**
 * Start building template content.
 */
function jb_template_header() {
	ob_start();
}

/**
 * Finish building template content.
 */
function jb_template_footer() {
	// Get built content.
	$content = ob_get_clean();

	// Render built content after header.
	// This is to trigger all hooks before the header is called.
	get_header();
	echo $content; // phpcs:ignore -- No need to escape it, since all escaping happens in the template / components.
	get_footer();
}
