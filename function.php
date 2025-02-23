<?php
function newspress_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'newspress'),
    ));
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'newspress_theme_setup');
?>
