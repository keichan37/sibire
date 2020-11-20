<div class="single-related-wrap">

  <?php if(has_tag()==true) : ?>
    <h4>タグ</h4>
    <ul class="single-tag">
      <?php
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li><a href="'. get_tag_link($tag->term_id) .'"><span class="icon icon-tag"></span>' . $tag->name . '</a></li>';
          }
        }
      ?>
    </ul>
  <?php endif; ?>

  <?php if( has_tag('4822') || has_tag('4842')) : ?>
    <div class="kiraboshi-banner">
      <?php if( get_field('kiraboshi-prefecture') === "akita"): ?>
        <a href="https://www.kira-boshi.jp/category/akita/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/akita.png" alt='秋田のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "aomori"): ?>
        <a href="https://www.kira-boshi.jp/category/aomori/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/aomori.png" alt='青森のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "miyagi"): ?>
        <a href="https://www.kira-boshi.jp/category/miyagi/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/miyagi.png" alt='宮城のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "yamagata"): ?>
        <a href="https://www.kira-boshi.jp/category/yamagata/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/yamagata.png" alt='山形のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "fukushima"): ?>
        <a href="https://www.kira-boshi.jp/category/fukushima/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/fukushima.png" alt='福島のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "iwate"): ?>
        <a href="https://www.kira-boshi.jp/category/iwate/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/iwate.png" alt='岩手のキラ☆企業'>
        </a>
      <?php elseif( get_field('kiraboshi-prefecture') === "niigata"): ?>
        <a href="https://www.kira-boshi.jp/category/niigata/" target="_blank" rel="nofollow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/niigata.png" alt='新潟のキラ☆企業'>
        </a>
      <?php endif; ?>
      <a href="https://www.kira-boshi.jp/" target="_blank" rel="nofollow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/kiraboshi/banner.png" alt="東北・新潟のキラ☆企業">
      </a>
    </div>
  <?php endif; ?>

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
