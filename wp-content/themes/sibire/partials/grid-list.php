<?php
  global $post_type;
  global $post_link;
  $args = array(
   'post_type' => $post_type,
   'numberposts'   => 10,
   'post_status' => 'publish',
   'has_password' => false,
  );
$postslist = get_posts($args);
foreach ($postslist as $post) : setup_postdata($post);
?>

  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
  ?>
  <a href=<?php echo get_permalink(); ?> class="grid-list">

    <?php if (has_post_thumbnail()): ?>
      <div class="grid-list-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
    <?php else: ?>
      <div class="grid-list-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
    <?php endif; ?>
      <p><?php the_title(); ?></p>
      <div class="grid-list-overray"></div>
    </div>
  </a>
<?php 
endforeach; 
wp_reset_postdata();
?>
<div class="clear"></div>
<a class="more-link" href="/<?php echo $post_link; ?>">もっと見る&nbsp;&gt;</a>
<div class="clear"></div>
