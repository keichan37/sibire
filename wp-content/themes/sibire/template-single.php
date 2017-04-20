<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <div class="single-left">
            <?php while(have_posts()): the_post(); ?>
              <article>
                <span class="single-category"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                <time class="single-date" datetime="<?php the_time('c') ;?>"><span class="icon-clock"></span><?php the_time('Y.n.j') ;?></time>
                <h1 class="single-title"><?php the_title(); ?></h1>
                <? $txt = get_field('subtitle'); if($txt){ ?><h2 class="single-subtitle"><? echo $txt; ?></h2><? } ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
                ?>
                <?php if (has_post_thumbnail()): //アイキャッチある場合 ?>
                  <img class="single-eyecatch" src="<?php echo $thumbnail_url[0]; ?>">
                <?php else: //アイキャッチない場合 ?>
                  <img class="single-eyecatch" src="<?php echo get_template_directory_uri(); ?>/images/common/no-image-eyecatch.png">
                <?php endif; ?>
                <div class="single-content mce-content-body"><?php the_content(); //本文 ?></div>
              </article>
            <?php endwhile; ?>
            <?php get_template_part('partials/registration'); ?>
          </div>
          <div class="single-right">
            <aside>
              右カラム何入れようか？
            </aside>
          </div>
        </div>    
      </div>    
      
    </div>
    <?php get_template_part('partials/sns-footer'); ?>
    <?php get_footer("lp"); //フッターリニューアル?>
