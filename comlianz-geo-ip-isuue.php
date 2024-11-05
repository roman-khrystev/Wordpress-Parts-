// Fixing geo ip not initialized issue for Comlianz plugin
INSERT INTO `wp_options` (option_name, option_value, autoload)
VALUES ('cmplz_geo_ip_file', 'wp-content/uploads/complianz/maxmind/GeoLite2-country.mmdb', 'no');