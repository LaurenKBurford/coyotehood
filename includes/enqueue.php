<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function coy_enqueue() {
    $uri                    =   get_theme_file_uri();

    wp_register_style( 'coyo_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
    wp_register_style( 'coyo_reset', $uri . '/css/reset.css' );
    wp_register_style( 'coyo_css', $uri . '/css/styles.css' );
    wp_register_style( 'coyo_media_queries', $uri . '/css/media-queries.css' );
    

    wp_enqueue_style( 'coyo_google_fonts' );
    wp_enqueue_style( 'coyo_reset' );
    wp_enqueue_style( 'coyo_css' );
    wp_enqueue_style( 'coyo_media_queries' );

    wp_register_script( 'coyo_scripts', $uri . '/js/scripts.js', [], false, true );
    wp_register_script( 'canada_flag', $uri . '/js/image-insert.js', [], false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'coyo_scripts' );
    wp_enqueue_script( 'canada_flag' );
}