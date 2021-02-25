<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Setup



//Includes

include( get_theme_file_path( 'includes/enqueue.php' ) );
include( get_theme_file_path( 'includes/setup.php' ) );
include( get_theme_file_path( 'includes/widgets.php' ) );

// Hooks

add_action( 'wp_enqueue_scripts', 'coy_enqueue' );
add_action( 'after_setup_theme', 'coyo_setup_theme' );
add_action( 'widgets_init', 'coyo_widgets' );