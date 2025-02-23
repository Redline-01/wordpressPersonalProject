<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<style>
    .breaking-news {
        background: red;
        color: white;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }
</style>



<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

    <div class="header">
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    <nav class="nav-menu">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
    <div class="breaking-news">
    <marquee>
        <?php
        $breaking_news = new WP_Query(array('posts_per_page' => 5));
        while ($breaking_news->have_posts()) : $breaking_news->the_post(); ?>
            <a href="<?php the_permalink(); ?>" style="color: white; margin-right: 20px;"><?php the_title(); ?></a>
        <?php endwhile; wp_reset_postdata(); ?>
    </marquee>
</div>
