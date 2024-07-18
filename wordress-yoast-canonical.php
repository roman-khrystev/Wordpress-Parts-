<?php
// Change canonical for paged
// Paste this snippet in functions.php

add_filter('wpseo_canonical', 'customCanonicalToPaged'); 
function customCanonicalToPaged($canonical) {
    if (is_paged()) {
        $canonical = 'https://domain.com/path/';
    }

    return $canonical;
}