<?php
    function bordeaux_enqueue_scripts() {
        wp_enqueue_style("style", get_stylesheet_uri());
        wp_enqueue_script("jquery");
    }
    add_action( 'wp_enqueue_scripts', 'bordeaux_enqueue_scripts' );
    add_theme_support( 'post-thumbnails' );
?>
