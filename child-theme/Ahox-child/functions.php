<?php
function ahox_childtheme_scripts() {	
	wp_enqueue_script( 'script-ahox_childtheme',get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'ahox_childtheme_scripts' );