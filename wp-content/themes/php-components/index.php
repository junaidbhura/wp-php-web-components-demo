<?php
/**
 * Archive template.
 */

jb_template_header();
?>

	<main class="main">

		<?php
		jb_component(
			'hello-world',
			[
				'title'    => 'Title goes here',
				'subtitle' => 'Subtitle goes here',
			]
		);
		?>

	</main> <!-- .main -->

<?php
jb_template_footer();
