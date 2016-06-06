  <?php get_header(); ?>
        <div id="interview">
          <div id="contents">
            <div class="container">

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>


                <?php if (has_post_thumbnail()): ?>
                  <div class="interview-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                <?php else: ?>
                  <div class="interview-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                <?php endif; ?>
                <div class="title-box">
                  <h1><?php the_title(); ?></h1>
                  <div class="interview-name">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>
                </div>
                </div>
                <div class="interview-profile">
                  <img src="<?php the_field('avatar'); ?>" alt="">
                  <div class="profile-text"><? $txt = get_field('profile'); if($txt){ ?><? echo $txt; ?> <? } ?></div>
                  <div class="clear"></div>
                </div>
                <?php the_content(); //本文 ?>
                <?php wp_link_pages('before=<div class="page-numbers">&after=</div>&next_or_number=number&pagelink=<span class="numbers">%</span>'); ?>
                <?php endwhile; else: ?>
                  <p>記事がありません</p>
                <?php endif; ?>

                <div class="registration">
                  <a href="/registration" class="registration-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/registration-cat.png" class="registration-button-img">
                  </a>
                </div>


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
        </div>
        <?php get_footer(); ?>
    </div>
  </body>
</html>
