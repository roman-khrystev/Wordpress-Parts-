<?php
$prev = get_previous_post(true);
$next = get_next_post(true);
?>

<?php if ( $prev ): ?>
<a href="<?= esc_url( get_permalink( $prev ) ); ?>" class="prev-btn" rel="prev"> 
  <div class="btn-content">
    <span class="para"><?= pll__('Previous post') ?></span>
    <h4 class="title"><?= esc_html( get_the_title( $prev ) ); ?></h4>
  </div>
</a>
<?php endif; ?>

<?php if ( $next ): ?>
<a href="<?= esc_url( get_permalink( $next ) ); ?>" class="next-btn" rel="next">
  <div class="btn-content">
    <span class="para"><?= pll__('Next post') ?></span>
    <h4 class="title"><?= esc_html( get_the_title( $next ) ); ?></h4>
  </div> 
</a>
<?php endif; ?>
