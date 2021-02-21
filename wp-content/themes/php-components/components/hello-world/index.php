<?php
/**
 * Hello World.
 */

$attributes = wp_parse_args(
	$attributes ?? [],
	[
		'title'    => '',
		'subtitle' => '',
	]
);

if ( empty( $attributes['title'] ) ) {
	return;
}

wp_enqueue_style( 'hello-world', get_template_directory_uri() . '/components/hello-world/style.css' );
?>
<div class="hello-world">
	<h1><?php echo esc_html( $attributes['title'] ); ?></h1>
	<?php if ( ! empty( $attributes['subtitle'] ) ): ?>
		<h2><?php echo esc_html( $attributes['subtitle'] ); ?></h2>
	<?php endif ?>
</div>
