<?php

function blogsite_theme_support() {

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'blogsite_theme_support');


function blogsite_menus() {

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);

}

add_action('init', 'blogsite_menus');


function blogsite_styles() {

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('blogsite-style', get_template_directory_uri() . "/style.css" , array('blogsite-bootstrap') , $version, 'all');
    wp_enqueue_style('blogsite-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array() , '4.4.1', 'all');
    wp_enqueue_style('blogsite-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array() , '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'blogsite_styles');


function blogsite_scripts() {

   wp_enqueue_script('blogsite-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);

   wp_enqueue_script('blogsite-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);

   wp_enqueue_script('blogsite-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);

   wp_enqueue_script('blogsite-main', get_template_directory_uri()."/assets/js/main.js" , array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'blogsite_scripts');


?>