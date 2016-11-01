<?php /* ?>
title: 記事フォーマット
description: このファイルが基本フォーマットになる
<?php */ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post">
          <div id="contents">
            <div class="container">
              <div id="main-content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //投稿が存在する場合 ?>
                  <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                  <?php get_template_part('tag'); //タグ ?>
                  <time class="entry-date" datetime="<?php the_time('c') ;?>">
                    <?php the_time('Y年n月j日') ;?>
                  </time>
                  <h1 class="post-h1"><?php the_title(); ?></h1>
                  <div class="post-name">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>
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
                  
                  <?php the_content(); //本文 ?>
                <?php endwhile; else: //投稿が存在しない場合 ?>
                  <p>記事がありません</p>
                <?php endif; ?>

                <?php if ( in_array(get_post_type(), array('offer','recruit')) ): //シビレる求人に表示 ?>
                  <img class="post_image1" src="<?php the_field('offer_image1'); ?>" alt="">
                  <img class="post_image2" src="<?php the_field('offer_image2'); ?>" alt="">
                  <img class="post_image3" src="<?php the_field('offer_image3'); ?>" alt="">
                  <div class="post-information"><? $txt = get_field('offer_table'); if($txt){ ?><? echo $txt; ?> <? } ?></div>

                  <?php
                    $fields = get_field_objects($post_id);
                    $dir_array = $fields["area"]["choices"];
                    $check = get_field('area');
                    if($check): //日本地図で拠点を表示 ?>
                      <div class="area <?php foreach($check as $value): ?><?php echo $value; ?> <?php endforeach ?>">
                        <b><?php foreach($check as $value): ?><?php echo $dir_array[$value]; ?><br /><?php endforeach ?></b>
                      </div>
                    <?php endif ?>

                <?php endif; ?>

              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
              <div id="other-lists" class="inner-padding">
                <h3 class="other-title">関連記事</h5>
                <div class="other-recruit">
                  <?php
                    $slug = get_post_type();
                    $args = array( 
                     'paged' => $paged,
                     'post_type' => array('recruit','interview','column','offer','event'),
                     'post_status' => 'publish',
                     'posts_per_page'   => 20,
                     'has_password' => false,
                     'post__not_in'=> array(get_the_ID())
                    );
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) : setup_postdata($post);
                    ?>
                    <?php
                      $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                    ?>
                    <a class="other-recruit-box" href="<?php the_permalink(); ?>">
                      <div class="other-recruit-image" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                      <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
                      <?php the_title(); ?>
                    </a>
                  <?php 
                  endforeach; 
                  wp_reset_postdata();
                  ?>
                </div>
              </div>
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
    </div>
  </body>
</html>
