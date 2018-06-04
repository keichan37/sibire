<aside>
  <!-- 求人のみ -->
  <?php if ( in_array(get_post_type(), array('recruit')) ): ?>
    <?php  $location = get_field('google_map'); if( !empty($location) ):?>
      <h4>勤務地</h4>
      <div class="single-map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
        <table>
          <tr>
            <th><span class="icon-link"></span></th>
            <td><a href="http://maps.google.com/maps?q=<?php echo $location['address']; ?>" target="_blank"><?php echo $location['address']; ?></a></td>
          </tr>
        </table>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <?php if(has_tag()==true) : ?>
    <h4>関連キーワード</h4>
    <ul class="single-tag">
      <?php
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li><a href="'. get_tag_link($tag->term_id) .'"><span class="icon-tag"></span>' . $tag->name . '</a></li>';
          }
        }
      ?>
    </ul>
  <?php endif; ?>
  <h4>関連記事</h4>
  <ul class="single-related-list">
    <?php
      $slug = get_post_type();
      $args = array( 
       'paged' => $paged,
       'post_type' => $slug,
       'post_status' => 'publish',
       'posts_per_page'   => 10,
       'has_password' => false,
       'post__not_in'=> array(get_the_ID())
      );
      $postslist = get_posts($args);
      foreach ($postslist as $post) : setup_postdata($post);
    ?>
    <?php
      $thumbnail_id = get_post_thumbnail_id();
      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail', true);
    ?>
    <li>
      <?php if (has_post_thumbnail()): ?>
        <img class="single-related-list-eyecatch" src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" data-echo="<?php echo $thumbnail_url[0]; ?>">
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  <?php 
  endforeach; 
  wp_reset_postdata();
  ?>
  </ul>
  <?php dynamic_sidebar('sidebar-1'); ?>
</aside>
