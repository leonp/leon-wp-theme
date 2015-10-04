<?php


// Unplug the parent theme's fonts function
// This means the child theme won't load any fonts from Google

function twentyfifteen_fonts_url() {

}


// Enqueue main.css, the parent theme's style.CSS and Roboto

function rbt_styles() {

    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style )
    );
    wp_enqueue_script( 'roboto', get_stylesheet_directory_uri() . '/js/fonts.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'rbt_styles' );


?>
