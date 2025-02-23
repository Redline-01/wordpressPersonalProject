<?php get_header(); ?>

<div class="container">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p>Published on: <?php the_time('F j, Y'); ?></p>
            <div class="content"><?php the_content(); ?></div>
        <?php endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
    <?php
if (comments_open() || get_comments_number()) :
    comments_template();
endif;
?>

<div class="author-box">
    <h3>About the Author</h3>
    <p><strong><?php the_author(); ?></strong></p>
    <p><?php the_author_meta('description'); ?></p>
    <h3>Share this post:</h3>
<a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">Facebook</a> |
<a href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank">Twitter</a> |
<a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank">WhatsApp</a>

</div>
 

</div>

<?php get_sidebar(); ?>
<h3>Related Posts</h3>
<div class="article-grid">
    <?php
    $related = new WP_Query(array(
        'category__in' => wp_get_post_categories(get_the_ID()),
        'posts_per_page' => 3,
        'post__not_in' => array(get_the_ID())
    ));
    while ($related->have_posts()) : $related->the_post(); ?>
        <div class="article">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>



<?php get_footer(); ?>