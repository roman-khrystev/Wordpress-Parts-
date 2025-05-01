<?php
$big = 999999999;
echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => 'page/%#%/',
    'current' => max(1, get_query_var('paged')),
    'total' => $myposts->max_num_pages,
    'add_args' => false,
    'type' => 'plain'
));
?>
