<h1>Detecting mobile version via PHP</h1>
<?php
function globalVars() {
    global $isMob; 
    $isMob = isset($_SERVER["HTTP_USER_AGENT"]) && preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
add_action('after_setup_theme', 'globalVars');
?>