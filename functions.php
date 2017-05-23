<?php
    function bordeaux_enqueue_styles() {
        wp_enqueue_style("style", get_stylesheet_uri());

    }
    add_action( 'wp_enqueue_scripts', 'bordeaux_enqueue_styles' );
    // add_theme_support( 'post-thumbnails' );
?>
