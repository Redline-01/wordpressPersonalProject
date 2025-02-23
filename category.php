<?php get_header(); ?>

<div class="container">
    <h2><?php single_cat_title(); ?></h2>
    <div class="article-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="article">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else :
            echo '<p>No articles found.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>