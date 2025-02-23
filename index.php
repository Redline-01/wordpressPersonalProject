<?php get_header(); ?>


<h2>Latest News</h2>

<div class="news-section">
    <h3>Sports</h3>
    <?php
    $sports = new WP_Query(array('category_name' => 'sports', 'posts_per_page' => 3));
    if ($sports->have_posts()) :
        while ($sports->have_posts()) : $sports->the_post();
    ?>
        <div class="news-item">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>

<div class="news-section">
    <h3>Politics</h3>
    <?php
    $politics = new WP_Query(array('category_name' => 'politics', 'posts_per_page' => 3));
    if ($politics->have_posts()) :
        while ($politics->have_posts()) : $politics->the_post();
    ?>
        <div class="news-item">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>

<div class="news-section">
    <h3>Entertainment</h3>
    <?php
    $entertainment = new WP_Query(array('category_name' => 'entertainment', 'posts_per_page' => 3));
    if ($entertainment->have_posts()) :
        while ($entertainment->have_posts()) : $entertainment->the_post();
    ?>
        <div class="news-item">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>

<div class="news-section">
    <h3>Technology</h3>
    <?php
    $tech = new WP_Query(array('category_name' => 'technology', 'posts_per_page' => 3));
    if ($tech->have_posts()) :
        while ($tech->have_posts()) : $tech->the_post();
    ?>
        <div class="news-item">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>