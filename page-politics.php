<?php
/*
Template Name: Politics News
*/
get_header();
?>

<h2>Politics News</h2>
<?php
$query = new WP_Query(array(
    'category_name' => 'politics',
    'posts_per_page' => 10
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
    <div class="news-item">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
    </div>
<?php
    endwhile;
else :
    echo "<p>No politics news available.</p>";
endif;

wp_reset_postdata();
get_footer();
?>
