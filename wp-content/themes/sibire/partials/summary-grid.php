<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>
<a href=<?php echo get_permalink(); ?> class="summary-grid">
  <figure>
    <?php if (has_post_thumbnail()): ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" data-echo="<?php echo $thumbnail_url[0]; ?>" />
    <?php else: ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/default.png" />
    <?php endif; ?>
    <figcaption>
      <?php if (!is_category()) { ?>
        <b class="category <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></b>
      <?php } ?>
      <h3><?php the_title(); ?></h3>
      <h4><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></h4>
    </figcaption>
  </figure>
</a>
