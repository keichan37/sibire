  <?php get_header(); ?>
        <div id="contents">
          <div class="container">
            <h2>いつもシビレをご覧頂きありがとうございます。大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。</h2>
            
            <h4>求人情報</h4>
              <ul class="relation">
                <?php
                  $slug = get_post_type();
                  $args = array(
                   'paged' => $paged,
                   'post_type' => 'recruit',
                   'posts_per_page'   => 10,
                   'post_status' => 'publish',
                  );
                  $postslist = get_posts($args);
                  foreach ($postslist as $post) : setup_postdata($post);
                  ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?> <span class="tag">(<?php echo esc_html(get_post_type_object($post->post_type)->label); ?>)</span>
                  </a>
                </li>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
            </ul>

            <h4>コラム</h4>
              <ul class="relation">
                <?php
                  $slug = get_post_type();
                  $args = array(
                   'paged' => $paged,
                   'post_type' => 'column',
                   'posts_per_page'   => 10,
                   'post_status' => 'publish',
                  );
                  $postslist = get_posts($args);
                  foreach ($postslist as $post) : setup_postdata($post);
                  ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?> <span class="tag">(<?php echo esc_html(get_post_type_object($post->post_type)->label); ?>)</span>
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
