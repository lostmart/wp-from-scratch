<?php

/* add styles css files */
add_action( 'wp_enqueue_scripts', 'load_styles' );

function load_styles() {
    wp_register_style('bootstrap-5.3', get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, 'all');
	wp_enqueue_style('bootstrap-5.3' );
}



/* add styles js files */
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function load_scripts() {
    wp_register_script( 'load_scripts', get_template_directory_uri() . "/js/bootstrap.bundle.min.js" , '', '', true );
    wp_enqueue_script('load_scripts' );
}