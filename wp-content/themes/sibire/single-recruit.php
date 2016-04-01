  <?php get_header(); ?>
        <div id="company">
          <div id="contents">
            <div class="container">

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1><?php the_title(); ?></h1>
                <div class="company-name">
                  <? $txt = get_field('recruit'); if($txt){ ?><? echo $txt; ?> <? } ?>
                </div>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <div class="company-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                <div class="articleDate"><span><i class="fa fa-calendar"></i>
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
                  <?php the_time('Y年m月d日') ;?>
                </time>
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


                  <h4>関連記事</h4>
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
          </div>
        </div>
        <?php get_footer(); ?>
    </div>
  </body>
</html>
