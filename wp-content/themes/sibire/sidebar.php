<?php /* ?>
title: サイドバーの部分テンプレート
<?php */ ?>

<?php dynamic_sidebar('sidebar-1'); ?>
<h5 class="relation-title">Twitter</h5>
<div class="ce">
  <a class="twitter-timeline" height="400" href="https://twitter.com/sibire_inc" data-chrome="noheader nofooter" data-width="500" data-widget-id="739715991165247488">@sibire_incさんのツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
<br />
<h5 class="relation-title">Facebook</h5>
<div class="ce">
  <div class="fb-page" data-href="https://www.facebook.com/sibireinc" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/sibireinc" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sibireinc">シビレ株式会社</a></blockquote></div>
</div>
<br />
<?php get_template_part('partials/service');?>
<?php /* ?>
<h5 class="relation-title">関連情報</h5>
<ul class="relation">
  <?php
    $slug = get_post_type();
    $args = array( 
     'paged' => $paged,
     'post_type' => array('recruit','interview','column','offer','event'),
     'posts_per_page'   => 10,
     'post_status' => 'publish',
     'has_password' => false,
     'post__not_in'=> array(get_the_ID())
    );
    $postslist = get_posts($args);
    foreach ($postslist as $post) : setup_postdata($post);
    ?>
  <li>
    <a href="<?php the_permalink(); ?>">
      <div class="p"><?php the_title(); ?>
      <span class="tag">(<?php echo esc_html(get_post_type_object($post->post_type)->label); ?>)</span></div>
      <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail(array(60, 60)); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png" alt="no image" title="no image" width="60" height="60" />
      <?php endif; ?>
    </a>
  </li>
  <?php 
  endforeach; 
  wp_reset_postdata();
  ?>
</ul>
<?php */ ?>
