<?php

function register_menu() {
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'something-fishy' ),
	) );
}

function load_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
	wp_enqueue_style('googleFonts');
}

add_action( 'after_setup_theme', 'register_menu' );
add_action( 'wp_enqueue_scripts', 'load_fonts');