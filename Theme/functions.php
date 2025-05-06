<?php
function theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'tanatos'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function tanatos_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('tanatos-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'tanatos_enqueue_scripts');
?>