<?php
/**
 * Single post template.
 */

jb_template_header();
?>

	<main class="main">

		<?php
		the_post();
		the_content();
		?>

	</main> <!-- .main -->

<?php
jb_template_footer();
