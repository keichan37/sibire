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

              <div id="main-content">
                <?php the_content(); //本文 ?>
                <?php endwhile; else: ?>
                  <p>記事がありません</p>
                <?php endif; ?>
                
              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>

            </div>
          </div>
        </div>
        <?php get_footer(); ?>
    </div>
  </body>
</html>
