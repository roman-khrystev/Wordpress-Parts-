<?php 
if (function_exists('pll_register_string')) {
    pll_register_string('my_button_default_text', 'btntext', 'Other', false);
}
 
function my_button_shortcode($atts) {
    $atts = shortcode_atts(array(
        'url'  => '#',
        'text' => pll__('btntext'), 
        'target' => '_self',
        'class'  => 'custom-button'
    ), $atts, 'mybutton');

    return '<a href="' . esc_url($atts['url']) . '" target="' . esc_attr($atts['target']) . '" class="' . esc_attr($atts['class']) . '">' . esc_html($atts['text']) . '</a>';
}
 
add_shortcode('mybutton', 'my_button_shortcode');

?>

// usage
[mybutton url="https://example.com" text="Start" target="_blank"]
