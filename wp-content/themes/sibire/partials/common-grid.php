<a href=<?php echo get_permalink(); ?> class="common-grid <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>">
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
