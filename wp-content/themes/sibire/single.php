<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header("lp"); ?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); ?>
          <div class="single-left">
            <?php while(have_posts()): the_post(); ?>
              <article>
                <span class="single-category"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                <time class="single-date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.n.j') ;?></time>
                <h1 class="single-title"><?php the_title(); ?></h1>
                <? $txt = get_field('subtitle'); if($txt){ ?><h2 class="single-subtitle"><? echo $txt; ?></h2><? } ?>
                <?php get_template_part('partials/sns-share'); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
                ?>
                <?php if (has_post_thumbnail()): ?>
                  <img class="single-eyecatch" src="<?php echo $thumbnail_url[0]; ?>">
                <?php else: ?>
                  <img class="single-eyecatch" src="<?php echo get_template_directory_uri(); ?>/images/common/no-image-eyecatch.png">
                <?php endif; ?>

                <!-- PRとインタビュー -->
                <?php if ( in_array(get_post_type(), array('interview')) ): ?>
                  <div class="single-top-box">
                    <img src="<?php the_field('avatar'); ?>" alt="">
                    <div class="single-top-box-text"><? $txt = get_field('profile'); if($txt){ ?><? echo $txt; ?> <? } ?></div>
                  </div>
                <?php elseif ( in_array(get_post_type(), array('niche')) ): ?>
                  <?php if ( $page == 1 ) : // 1ページ目だけ表示 ?>
                    <div class="single-top-box">
                      <img src="<?php the_field('single-niche-top-image'); ?>" alt="">
                      <div class="single-top-box-text"><? $txt = get_field('single-niche-top-text'); if($txt){ ?><? echo $txt; ?> <? } ?></div>
                    </div>
                  <?php endif; ?>
                <?php endif; ?>

                <div class="single-content mce-content-body">
                  <?php the_content(); //本文 ?>
                  <?php get_template_part('partials/link_pages'); //ページング ?>
                  <?php get_template_part('partials/single-table'); ?>
                </div>
              </article>
            <?php endwhile; ?>
          </div>
          <div class="single-right">
            <?php get_template_part('partials/sidebar'); ?>
          </div>
          <aside>
            <?php get_template_part('partials/registration'); ?>
            <?php get_template_part('partials/related-list'); ?>
          </aside>
        </div>    
      </div>    
      
    </div>
    <?php get_footer("lp"); ?>
