
<?php
// Get the current post ID
$current_post_id = get_the_ID();

// Get the categories of the current post
$categories = get_the_category();

if ($categories) {
    $category_ids = array();

    // Extract category IDs
    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }

    // Query for random posts in the same categories
    $args = array(
        'category__in'   => $category_ids,
        'post__not_in'   => array($current_post_id),
        'posts_per_page' => 4,
        'orderby'        => 'rand'
    );

    $related_posts = new WP_Query($args);

    if ($related_posts->have_posts()) {
        echo '  <div class="block"><div class="container"><h2 class="h2">TITLE</h2><ul class="same-posts">';
        while ($related_posts->have_posts()) {
            $related_posts->the_post();
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        }
        echo '</ul></div></div>';
    }

    // Reset post data
    wp_reset_postdata();
}
?>