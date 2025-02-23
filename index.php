<?php get_header(); ?>

<div class="container">
    <h2>Top Stories</h2>
    <div class="article-grid">
        <?php
        $top_stories = new WP_Query(array(
            'category_name' => 'top-stories',
            'posts_per_page' => 3
        ));
        while ($top_stories->have_posts()) : $top_stories->the_post(); ?>
            <div class="article">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <h2>Trending News</h2>
    <div class="article-grid">
        <?php
        $trending_news = new WP_Query(array(
            'category_name' => 'trending',
            'posts_per_page' => 3
        ));
        while ($trending_news->have_posts()) : $trending_news->the_post(); ?>
            <div class="article">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <div class="pagination">
    <?php
    echo paginate_links(array(
        'mid_size' => 2,
        'prev_text' => __('« Prev', 'newspress'),
        'next_text' => __('Next »', 'newspress'),
    ));
    ?>
</div>

    </div>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>