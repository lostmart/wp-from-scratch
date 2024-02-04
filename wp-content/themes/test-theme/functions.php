<?php

/* add styles css files */
add_action( 'wp_enqueue_scripts', 'load_styles' );

function load_styles() {
    wp_register_style('bootstrap-5.3', get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, 'all');
	wp_enqueue_style('bootstrap-5.3' );

    wp_register_style('theme', get_template_directory_uri() . "/css/theme.css", array(), false, 'all');
	wp_enqueue_style('theme' );
}



/* add styles js files */
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function load_scripts() {
    wp_register_script( 'load_scripts', get_template_directory_uri() . "/js/bootstrap.bundle.min.js" , '', '', true );
    wp_enqueue_script('load_scripts' );
}


// the options 
add_theme_support("menus");

// menus
register_nav_menus(
    array(
        'top-menu' => 'el menu de arriba', 
        'mobile-menu' => 'el menu pal mobil',
        'footer-menu' => 'el manu pal footer'
    )
);

// add custom classes to each link of the menu
function add_custom_link_class($atts, $item, $args) {
    // Check if the item is a link
    if ($args->theme_location == 'top-menu') {
        // Add your custom class to the link
        $atts['class'] = 'nav-link text-white';
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_custom_link_class', 10, 3);
