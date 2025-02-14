<?php
// get pages which use template
function get_pages_using_template($template_name) { 
    $pages = get_pages();
    $pages_using_template = array();
 
    foreach ($pages as $page) { 
        $meta = get_post_meta($page->ID);
 
        if (isset($meta['_wp_page_template'][0]) && $meta['_wp_page_template'][0] == $template_name) {
            $pages_using_template[] = get_page_link($page->ID);
        }
    }

    return $pages_using_template;
}
 
$template_name = 'template-custom.php'; // CHANGE NAME
$pages_links = get_pages_using_template($template_name);

// Выводим ссылки на страницы
foreach ($pages_links as $link) {
    echo '<a href="' . esc_url($link) . '">' . esc_url($link) . '</a><br>';
}

?>