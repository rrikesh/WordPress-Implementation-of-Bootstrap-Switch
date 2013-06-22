<?php

add_action( 'wp_head', 'rr_bootswitch_meta' );
add_action( 'wp_enqueue_scripts', 'rr_bootswitch_enqueue' );

function rr_bootswitch_meta(){
	print '<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;" />';
}

function rr_bootswitch_enqueue(){
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap.min.css' );
	wp_enqueue_style('switch-css', get_template_directory_uri() . '/assets/bootstrapSwitch.css' );
	wp_enqueue_script( 'switch-js', get_template_directory_uri() . '/assets/bootstrapSwitch.js', array( 'jquery' ) );
}

