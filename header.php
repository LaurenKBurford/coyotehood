<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body <?php body_class(); ?>>

    <img id="star-background" src="https://coyotehood.ca/wp-content/uploads/2021/02/coyotehood-sky-background.png">

    <section id="northern-lights">
    </section>    

    <img id="moose-and-trees" src="https://coyotehood.ca/wp-content/uploads/2021/02/coyotehood-illustrations-09.png">

    <section id="logo-and-menu">

        <section id="logo">
            <img id="coyotehood-logo" src="https://coyotehood.ca/wp-content/uploads/2021/02/coyotehood-illustrations-13.png">
        </section>

        <section id="menu">
            <?php
            if( has_nav_menu( 'primary' ) ) {
                wp_nav_menu([
                    'theme_location'            =>  'primary'
                ]);
            }
            ?>
        </section>

    </section>

    <section id="side-decor">

        <img id="left-side" src="https://coyotehood.ca/wp-content/uploads/2021/02/coyotehood-illustrations-11.png">

        <img id="right-side" src="https://coyotehood.ca/wp-content/uploads/2021/02/coyotehood-illustrations-12.png">

    </section>

    <section id="page-section">

    