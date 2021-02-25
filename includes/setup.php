<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function coyo_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );
    register_nav_menu( 'primary', __( 'Primary Menu', 'coyotehood' ) );
}