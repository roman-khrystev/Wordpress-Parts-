# Remove extra slashes
RewriteEngine On
RewriteCond %{REQUEST_URI} ^(.*)//(.*)$
RewriteRule . %1/%2 [R=301,L]

--------------

# Redirecting from uppercase to lowercase links
RewriteMap lc int:tolower
RewriteCond %{REQUEST_URI} [A-Z]
RewriteRule (.*) ${lc:$1} [R=301,L]

OR


add_action('template_redirect', function () {
    $url = $_SERVER['REQUEST_URI'];
    if (preg_match('/[A-Z]/', $url)) { 
        wp_redirect(home_url(strtolower($url)), 301);
        exit;
    }
});