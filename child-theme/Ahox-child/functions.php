<?php
function ahox_childtheme_scripts() {
	wp_enqueue_style( 'style-ahox_childtheme', get_stylesheet_directory_uri().'/css/style.css' );
	wp_enqueue_script( 'script-ahox_childtheme',get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'script-bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/2.3.1/js/bootstrap.min.js' ); 
}

add_action( 'wp_enqueue_scripts', 'ahox_childtheme_scripts' );