<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
?>
<a href=<?php echo get_permalink(); ?> class="common-grid <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>">
  <?php
    $days = 7;
    $today = date_i18n('U');
    $entry = get_the_time('U');
    $kiji = date('U',($today - $entry)) / 86400 ;
    if( $days > $kiji ){
      echo '<div class="common-grid-new"></div>';
  }?>
  <div class="common-grid-img"
    <?php if (has_post_thumbnail()): ?>
      style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"
    <?php endif; ?>
  >
  </div>
  <h3><?php the_title(); ?></h3>
  <div class="common-grid-text-wrap">
    <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
    <time class="common-grid-time"><?php the_date('Y.m.d'); ?></time>
  </div>
  <span class="common-grid-tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
</a>
