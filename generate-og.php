    <?php

    function g() {
        return get_template_directory_uri();
    }


    // Get the current queried object
    $queried_object = get_queried_object();

    // Determine the values for the Open Graph meta tags
    $og_title = '';
    $og_description = '';
    $og_url = get_permalink(); // Default to the permalink of the current page/post
    $og_image = ''; // Default to a placeholder image if no specific image is set
    $og_type = is_singular() ? 'article' : 'website'; // Use 'article' for posts and 'website' for other pages

    // Set the Open Graph title and description
    if (is_singular()) {
        $og_title = get_the_title();
        $og_description = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true) ?: get_the_excerpt();
        $og_image = get_the_post_thumbnail_url(get_the_ID(), 'full') || g() . '/assets/images/favicon.png';
    } elseif (is_category() || is_tag() || is_tax()) {
        $og_title = single_term_title('', false);
        $og_description = get_term_meta($queried_object->term_id, '_yoast_wpseo_metadesc', true) ?: term_description($queried_object->term_id);
        $og_url = get_term_link($queried_object->term_id);
    } elseif (is_home() || is_front_page()) {
        $og_title = get_bloginfo('name');
        $og_description = get_bloginfo('description');
        $og_image = g() . '/assets/images/favicon.png'; // Use custom logo if available
    } else {
        $og_title = wp_title('', false);
        $og_description = get_bloginfo('description');
    }

    // Fallback image
    if (!$og_image) {
        $og_image = g() . '/assets/images/favicon.png'; // Replace with your default image URL
    }

    // Output the meta tags
    ?>
    <meta property="og:title" content="<?= esc_attr($og_title); ?>"/>
    <meta property="og:description" content="<?= esc_attr(substr($og_description, 0, 300)); ?>"/>
    <meta property="og:type" content="<?= esc_attr($og_type); ?>"/>
    <meta property="og:url" content="<?= esc_url($og_url); ?>"/>
    <meta property="og:image" content="<?= esc_url($og_image); ?>"/>