<div class="sidebar">
    <h3>Categories</h3>
    <ul><?php wp_list_categories(array('title_li' => '')); ?></ul>

    <h3>Recent Posts</h3>
    <ul><?php wp_get_archives(array('type' => 'postbypost', 'limit' => 5)); ?></ul>
</div>