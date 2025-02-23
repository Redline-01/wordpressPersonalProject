<?php
if (post_password_required()) {
    return;
}
?>

<div class="comments-section">
    <h3><?php comments_number('No Comments', 'One Comment', '% Comments'); ?></h3>

    <?php if (have_comments()) : ?>
        <ul class="comment-list">
            <?php wp_list_comments(array('style' => 'ul', 'short_ping' => true)); ?>
        </ul>
    <?php endif; ?>

    <div class="comment-form">
        <?php comment_form(); ?>
    </div>
</div>
