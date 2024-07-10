<?php


function title_support () {
    add_theme_support('title-tag');
}

function load_styles() {
    wp_register_style('main-style', get_template_directory_uri() . "/style.css", array(), false, 'all');
	wp_enqueue_style('main-style' );

    wp_register_style('theme', get_template_directory_uri() . "/css/theme.css", array(), false, 'all');
	wp_enqueue_style('theme' );
}


// register menus
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}

/* add styles js files */
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function load_scripts() {
    wp_register_script( 'load_scripts', get_template_directory_uri() . "/js/script.js" , '', '', true );
    wp_enqueue_script('load_scripts' );
}




// add custom classes to each link of the menu
function add_custom_link_class($atts, $item, $args) {
    // Check if the item is a link
    if ($args->theme_location == 'top-menu') {
        // Add your custom class to the link
        $atts['class'] = 'nav-link text-white';
    }

    return $atts;
}
add_action('after_setup_theme', 'title_support');
add_action( 'wp_enqueue_scripts', 'load_styles' );
add_filter('nav_menu_link_attributes', 'add_custom_link_class', 10, 3);
add_action( 'init', 'register_my_menus' );
