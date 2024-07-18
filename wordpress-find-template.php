<?php
$pages = get_pages( [
    'meta_key'     => '_wp_page_template',
    'meta_value'   => 'template-name.php', // replace this
] );

foreach( $pages as $page ) {
    echo '<p>' . $page->post_title .'</p>';
}
?>