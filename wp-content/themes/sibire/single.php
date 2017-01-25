<?php /* ?>
title: 記事フォーマット
description: このファイルが基本フォーマットになる
<?php */ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post" <?php body_class(); ?>>
          <div id="contents">
            <div class="container">
              <div id="main-content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //投稿が存在する場合 ?>
                  <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                  <?php get_template_part('tag'); //タグ ?>
                  <time class="entry-date" datetime="<?php the_time('c') ;?>">
                    <?php the_time('Y年n月j日') ;?>
                  </time>
                  <h1 class="post-h1"><?php the_title(); ?><?php show_page_number(); ?></h1>
                  <div class="post-name">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>
                  <?php if ( in_array(get_post_type(), array('niche')) ): //シビレるニッチ用?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/single-niche-banner.jpg">
                    <?php if ( $page == 1 ) : // 1ページ目だけ表示 ?>
                      <div class="single-niche-top">
                        <div class="single-niche-top-image">
                          <img src="<?php the_field('single-niche-top-image'); ?>" alt="">
                        </div>
                        <div class="single-niche-top-text">
                          <? $txt = get_field('single-niche-top-text'); if($txt){ ?><? echo $txt; ?> <? } ?>
                        </div>
                        <div class="clear"></div>
                      </div>
                    <?php endif; ?>
                  <?php else: //シビレるニッチで非表示 ?>
                    <?php
                      $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true); //アイキャッチのURL取得
                    ?>
                    <?php if (has_post_thumbnail()): //アイキャッチある場合 ?>
                      <img class="post-eyecatch-img" src="<?php echo $thumbnail_url[0]; ?>">
                    <?php else: //アイキャッチない場合 ?>
                      <?php /* ?>
                      <div class="post-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);"></div>
                      <?php */ ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  
                  <?php the_content(); //本文 ?>
                <?php endwhile; else: //投稿が存在しない場合 ?>
                  <p>記事がありません</p>
                <?php endif; ?>

                <?php get_template_part('partials/link_pages'); //ページング ?>

              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
              <?php get_template_part('partials/iframe');?>
              <?php get_template_part('partials/other','list');?>
            </div>
          </div>
        </div>
        
        <?php if ( in_array(get_post_type(), array('event')) ): //イベントで非表示 ?>
        <?php else: ?>
          <div class="registration">
            <a href="/registration" class="registration-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
            </a>
            <p>イベント情報や最新のお知らせを優先的にご案内します。</p>
          </div>
        <?php endif; ?>
        <?php get_footer(); //フッター ?>
