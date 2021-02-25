<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function coyo_widgets() {
    register_sidebar([
        'name'              =>  __( 'Coyotehood Footer Sidebar', 'coyotehood' ),
        'id'                =>  'coyotehood_sidebar',
        'description'       =>  __( 'Sidebar for the Coyotehood theme', 'coyotehood' )
    ]);
}