<?php

if ( ! defined( 'KUBRIK2_CSS_URI' ) ) {
	define( 'KUBRIK2_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/css' );
}


if ( ! defined( 'KUBRIK2_CSS_DIR_PATH' ) ) {
	define( 'KUBRIK2_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/css' );
}

function kubrik2_theme_support()  {
	// Adding support for core block visual styles.
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'kubrik2_theme_support' );

// This is useless, but it's just a way to avoid a bug
// in the theme repository submission process
// where at least one i18n string is required.
__( 'Hello, World!', 'kubrick2' );

/**
 * Register Styles.
 */
function kubrik2_register_styles() {
	wp_register_style( 'main-css', KUBRIK2_CSS_URI . '/main.css', [], filemtime( KUBRIK2_CSS_DIR_PATH . '/main.css' ), 'all' );
	wp_enqueue_style( 'main-css' );
}

add_action( 'wp_enqueue_scripts', 'kubrik2_register_styles' );