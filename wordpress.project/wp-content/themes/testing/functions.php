<?php
    function testing_assets() {
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css' );
        wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );
    }
    add_action('wp_enqueue_scripts', 'testing_assets');
    show_admin_bar(false);