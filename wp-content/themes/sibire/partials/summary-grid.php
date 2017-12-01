<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
?>
<?php if ($counter <= 1): ?>
  <a href=<?php echo get_permalink(); ?> class="summary-grid summary-grid-first">
<?php else: ?>
  <a href=<?php echo get_permalink(); ?> class="summary-grid">
<?php endif; ?>
  <figure>
    <?php if (has_post_thumbnail()): ?>
      <img src="<?php echo $thumbnail_url[0]; ?>" />
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/default.png" />
    <?php endif; ?>
    <figcaption>
      <h3><?php the_title(); ?></h3>
      <h4><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></h4>
      <?php if ($counter <= 1): ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
    </figcaption>
  </figure>
</a>
