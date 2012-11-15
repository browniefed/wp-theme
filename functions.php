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

function new_excerpt_more($more) {
    global $post;
    return ' <a class="excerpt_link" href="' . get_permalink($post->ID) . '">...</a>';
}

add_action( 'after_setup_theme', 'register_menu' );
add_action( 'wp_enqueue_scripts', 'load_fonts');
add_filter('excerpt_more', 'new_excerpt_more');