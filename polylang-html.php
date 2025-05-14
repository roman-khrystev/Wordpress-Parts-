<?php
$languages = pll_the_languages([
  'dropdown' => 0,
  'show_flags' => 0,
  'show_names' => 1,
  'hide_current' => 1,
  'raw' => 1,
]);

$current_lang = pll_current_language('name');
?>

<div class="lang"> 
    <a class="lang-item" href="#"><?= esc_html($current_lang) ?></a>
    <div class="lang-menu"> 
        <?php foreach ($languages as $lang): ?>
            <a class="lang-item" href="<?= esc_url($lang['url']) ?>">
                <?= esc_html($lang['name']) ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>