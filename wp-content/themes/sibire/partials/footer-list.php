<?php
  global $footer_post_title; 
  global $footer_post_type;
  global $footer_post_link;
?>
<div class="footer-post">
  <h4 class="h4-footer"><i class="icon icon-folder"></i><a href="/<?php echo $footer_post_link; ?>"><?php echo $footer_post_title; ?></a></h4>
  <ul class="ul-footer">
    <?php
      $args = array(
       'post_type' => $footer_post_type,
       'numberposts'   => 10,
       'post_status' => 'publish',
       'has_password' => false,
      );
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post);
    ?>
      <li>
        <a href=<?php echo get_permalink(); ?> class="line-list">
          <?php the_title(); ?>
        </a>
      </li>
    <?php 
    endforeach; 
    wp_reset_postdata();
    ?>
  </ul>
  <a class="footer-post-more-link" href="/<?php echo $footer_post_link; ?>">もっと見る</a>
</div>
