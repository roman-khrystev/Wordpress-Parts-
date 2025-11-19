<?php

$args = array(
    'numberposts' => -1,
    'post_type'   => 'post',
    'category'    => $args['catId'],
    'meta_key'    => 'post_order_in_category_lis',  
    'orderby'     => 'meta_value_num',             
    'order'       => 'ASC',                         
);
 
?>