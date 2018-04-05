<div class="single-related-wrap">
  <h4>関連記事</h4>
  <div class="single-related-lists owl-carousel owl-theme">
    <?php
      $slug = get_post_type();
      $args = array( 
       'paged' => $paged,
       'post_type' => $slug,
       'post_status' => 'publish',
       'posts_per_page'   => 15,
       'has_password' => false,
       'post__not_in'=> array(get_the_ID())
      );
      $postslist = get_posts($args);
      foreach ($postslist as $post) : setup_postdata($post);
      ?>
      <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
      ?>
      <a class="single-related" href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()): ?>
          <img class="single-related-eyecatch owl-lazy" data-src="<?php echo $thumbnail_url[0]; ?>" />
        <?php else: ?>
          <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
        <?php endif; ?>
        <h5><?php the_title(); ?></h5>
        <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
      </a>
    <?php 
    endforeach; 
    wp_reset_postdata();
    ?>
  </div>
</div>
