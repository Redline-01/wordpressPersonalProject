<?php
if (post_password_required()) {
    return;
}
?>

<div class="comments-section">
    <h3><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h3>

    <?php if (have_comments()) : ?>
        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 50,
                'reply_text' => 'Reply',
                'callback' => 'newspress_custom_comments'
            ));
            ?>
        </ul>

        <div class="comment-pagination">
            <?php paginate_comments_links(); ?>
        </div>
    <?php endif; ?>

    <div class="comment-form">
        <?php comment_form(); ?>
    </div>
    


</div>

