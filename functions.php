<?php

function blogsite_resources() {
    wp_enqueue_style('blogsite-bootstrap', get_template_directory_uri() . "/style.css" , array() , '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'blogsite_resources');

?>