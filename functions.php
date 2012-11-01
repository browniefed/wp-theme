<?php

function register_menu() {
		register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'something-fishy' ),
	) );
}

add_action( 'after_setup_theme', 'register_menu' );
