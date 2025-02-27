<?php
/*
Template Name: Entertainment News
*/
get_header();
?>

<h2>Entertainment News</h2>
<?php
$query = new WP_Query(array(
    'category_name' => 'entertainment',
    'posts_per_page' => 10
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
    <div class="news-item">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <img src="<?php the_post_thumbnail(); ?>" alt="">
        <p><?php the_excerpt(); ?></p>
    </div>
<?php
    endwhile;
else :
    echo "<p>No entertainment news available.</p>";
endif;

wp_reset_postdata();
get_footer();
?>
