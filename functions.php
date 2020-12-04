<?php

// Add stylesheet and JS File
function portfolio_scripts() {

    // Main CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1');

}
add_action('wp_enqueue_scripts', 'portfolio_scripts');