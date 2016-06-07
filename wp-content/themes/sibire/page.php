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
                  <h4 class="relation-title">新着情報</h4>
                    <ul class="relation">
                      <?php
                        $slug = get_post_type();
                        $args = array(
                         'paged' => $paged,
                         'post_type' => array('recruit','interview','column','offer','event'),
                         'posts_per_page'   => 10,
                         'post_status' => 'publish',
                        );
                        $postslist = get_posts($args);
                        foreach ($postslist as $post) : setup_postdata($post);
                        ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">
                          <p><span class="tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span><?php the_title(); ?></p>
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
