<?php /* Template Name: 新イベントページテンプレート*/ ?>

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
                    <div class="post-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                  <?php else: //アイキャッチない場合 ?>
                    <?php /* ?>
                    <div class="post-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);"></div>
                    <?php */ ?>
                  <?php endif; ?>
                  
                  <?php the_content(); //本文 ?>
                <?php endwhile; else: //投稿が存在しない場合 ?>
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
        <?php get_footer(); //フッター ?>
    </div>
  </body>
</html>
