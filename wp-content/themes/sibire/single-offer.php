  <?php get_header(); ?>
        <div id="post">
          <div id="contents">
            <div class="container">

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="post-h1"><?php the_title(); ?></h1>
                <div class="post-name">
                  <? $txt = get_field('offer'); if($txt){ ?><? echo $txt; ?> <? } ?>
                </div>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>

            </div>
                <?php if (has_post_thumbnail()): ?>
                  <div class="post-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                <?php else: ?>
                  <div class="post-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);"></div>
                <?php endif; ?>
            <div class="container">
                <ul class="tag">
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<li>' . $tag->name . '</li>';
                      }
                    }
                  ?>
                </ul>
                <time class="entry-date" datetime="<?php the_time('c') ;?>">
                  <?php the_time('Y年n月j日') ;?>
                </time>
                <div class="clear"></div>
                <?php the_content(); //本文 ?>
                <?php wp_link_pages('before=<div class="page-numbers">&after=</div>&next_or_number=number&pagelink=<span class="numbers">%</span>'); ?>
                <?php endwhile; else: ?>
                  <p>記事がありません</p>
                <?php endif; ?>

                <img class="post_image1" src="<?php the_field('offer_image1'); ?>" alt="">
                <img class="post_image2" src="<?php the_field('offer_image2'); ?>" alt="">
                <img class="post_image3" src="<?php the_field('offer_image3'); ?>" alt="">

                <div class="post-information"><? $txt = get_field('offer_table'); if($txt){ ?><? echo $txt; ?> <? } ?></div>

                <div class="registration">
                  <a href="/registration" class="registration-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/registration-cat.png" class="registration-button-img">
                  </a>
                </div>


                <h5>最新情報</h5>
                <ul class="post-grid">
                  <?php
                    $slug = get_post_type();
                    $args = array(
                     'paged' => $paged,
                     'post_type' => array('recruit','interview','column','offer','event'),
                     'posts_per_page'   => 15,
                     'post_status' => 'publish',
                     'post__not_in'=> array(get_the_ID())
                    );
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) : setup_postdata($post);
                    ?>
                  <li>
                    <a href="<?php the_permalink(); ?>">
                      <div class="post-grid-img" 
                        <?php if (has_post_thumbnail()): ?>
                          style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"
                        <?php else: ?>
                        <?php endif; ?>
                      ></div>
                      <?php the_title(); ?>
                    </a>
                  </li>

                <?php 
                endforeach; 
                wp_reset_postdata();
                ?>
                <div class="clear"></div>
              </ul>
            </div>
          </div>
        </div>
        <?php get_footer(); ?>
    </div>
  </body>
</html>
