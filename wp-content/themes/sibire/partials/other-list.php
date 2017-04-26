<div id="other-lists" class="inner-padding">
  <h3 class="other-title">関連記事</h3>
  <div class="other-recruit">
    <?php
      $slug = get_post_type();
      $args = array( 
       'paged' => $paged,
       'post_type' => array('recruit','interview','column','event','niche','blog'),
       'post_status' => 'publish',
       'posts_per_page'   => 20,
       'has_password' => false,
       'post__not_in'=> array(get_the_ID())
      );
      $postslist = get_posts($args);
      foreach ($postslist as $post) : setup_postdata($post);
      ?>
      <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
      ?>
      <a class="other-recruit-box" href="<?php the_permalink(); ?>">
        <div class="other-recruit-image" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
        <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
        <?php the_title(); ?>
      </a>
    <?php 
    endforeach; 
    wp_reset_postdata();
    ?>
  </div>
</div>
