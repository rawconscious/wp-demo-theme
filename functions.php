<?php

add_action( 'wp_enqueue_scripts', 'demo_add_styles' );
add_action( 'wp_enqueue_scripts', 'demo_add_scripts' );

function demo_add_styles() {
	wp_enqueue_style(
		'demo-style',
		get_template_directory_uri() . '/assets/style.css',
		array(),
		rand( 0, 9999 )
	);
}
function demo_add_scripts() {
	wp_enqueue_script(
		'demo-script',
		get_template_directory_uri() . '/assets/script.js',
		array(),
		rand( 0, 9999 )
	);

}

add_action( 'wp_head', 'demo_wp_head' );

function demo_wp_head() {
	?>
	<script>
		console.log('Hey Hey!');
	</script>

	<?php
}
