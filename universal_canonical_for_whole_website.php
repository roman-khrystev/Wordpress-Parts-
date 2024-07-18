<?php
// Paste this snippet in functions.php

function add_custom_canonical_tag() {
    global $wp;
    
    if (is_singular()) {
        echo '<link rel="canonical" href="' . get_permalink() . '"/>' . "\n";
    } elseif (is_category()) {
        echo '<link rel="canonical" href="' . get_category_link(get_queried_object_id()) . '"/>' . "\n";
    } elseif (is_tag()) {
        echo '<link rel="canonical" href="' . get_tag_link(get_queried_object_id()) . '"/>' . "\n";
    } elseif (is_tax()) {
        echo '<link rel="canonical" href="' . get_term_link(get_queried_object_id()) . '"/>' . "\n";
    } elseif (is_home()) {
        echo '<link rel="canonical" href="' . home_url('/') . '"/>' . "\n";
    } elseif (is_archive()) {
        echo '<link rel="canonical" href="' . get_post_type_archive_link(get_post_type()) . '"/>' . "\n";
    } elseif (is_author()) {
        echo '<link rel="canonical" href="' . get_author_posts_url(get_the_author_meta('ID')) . '"/>' . "\n";
    } elseif (is_search()) {
        echo '<link rel="canonical" href="' . get_search_link() . '"/>' . "\n";
    } else {
        echo '<link rel="canonical" href="' . home_url(add_query_arg(array(), $wp->request)) . '"/>' . "\n";
    }
}
add_action('wp_head', 'add_custom_canonical_tag');

?>