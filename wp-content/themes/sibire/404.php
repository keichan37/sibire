  <?php get_header(); ?>
        <div id="contents">
          <div class="container">
            <h2>いつもシビレをご覧頂きありがとうございます。大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。</h2>
            

            <h4 class="relation-title">新着情報</h4>
              <ul class="relation">
                <?php
                  $slug = get_post_type();
                  $args = array(
                   'paged' => $paged,
                   'post_type' => array('recruit','interview','column','offer','event'),
                   'posts_per_page'   => 10,
                   'post_status' => 'publish',
                   'post__not_in'=> array(get_the_ID())
                  );
                  $postslist = get_posts($args);
                  foreach ($postslist as $post) : setup_postdata($post);
                  ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <div class="p"><span class="tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span><br /><?php the_title(); ?></div>
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(array(50, 50)); ?>
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png" alt="no image" title="no image" width="50" height="50" />
                    <?php endif; ?>
                  </a>
                </li>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
            </ul>
          </div>


        </div>
        <?php get_footer(); ?>
    </div>

  </body>
</html>
