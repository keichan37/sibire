<?php
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>
<a class="single-related" href="<?php the_permalink(); ?>">
  <?php
    $days = 7;
    $today = date_i18n('U');
    $entry = get_the_time('U');
    $kiji = date('U',($today - $entry)) / 86400 ;
    if( $days > $kiji ){
      echo '<i class="single-related-new">New</i>';
  }?>
  <?php if (has_post_thumbnail()): ?>
    <img class="single-related-eyecatch owl-lazy" data-src="<?php echo $thumbnail_url[0]; ?>" />
  <?php else: ?>
    <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
  <?php endif; ?>
  <b class="category <?php echo $cat_slug; ?>"><?php echo $cat_name; ?></b>
  <h5><?php the_title(); ?></h5>
  <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
</a>
