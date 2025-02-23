<?php
function newspress_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'newspress'),
    ));
}
add_action('after_setup_theme', 'newspress_setup');

function newspress_scripts() {
    wp_enqueue_style('newspress-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'newspress_scripts');

function newspress_widgets() {
    register_sidebar(array(
        'name' => __('Sidebar', 'newspress'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'newspress'),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}

?>
