  <?php get_header(); ?>
        <div id="contents">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-cover">
              <div class="container">
                <h1><?php the_title(); ?><?php show_page_number(); ?></h1>
              </div>
            </div>
            <div class="container">
                <div class="left-side">
                  <?php the_content(); //本文 ?>
                </div>
                <div class="right-side">
                    <h4>新着情報</h4>
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

                </div>
                <div class="clear"></div>
            <?php endwhile; else: ?>
              <p>記事がありません</p>
            <?php endif; ?>
          </div>
        </div>
        <?php get_footer(); ?>
    </div>

  </body>
</html>
