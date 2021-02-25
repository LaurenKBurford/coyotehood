<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<section id="sidebar">

<?php 

if( is_active_sidebar( 'coyotehood_sidebar' ) ) {
    dynamic_sidebar( 'coyotehood_sidebar' );
}

?>

</section>