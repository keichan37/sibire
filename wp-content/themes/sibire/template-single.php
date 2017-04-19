<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <?php while(have_posts()): the_post(); ?>
            <article>
              <time class="single-date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.n.j') ;?></time>
              <h1 class="single-title"><?php the_title(); ?></h1>
              <h2 class="single-subtitle"><? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?></h2>
              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
              ?>
              <?php if (has_post_thumbnail()): //アイキャッチある場合 ?>
                <div class="single-eyecatch" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
              <?php else: //アイキャッチない場合 ?>
                <div class="single-eyecatch" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/no-image.png);"></div>
              <?php endif; ?>
              <div class="single-content mce-content-body"><?php the_content(); //本文 ?></div>
            </article>
          <?php endwhile; ?>
        </div>    
      </div>    
      
    </div>
    <div class="sns-footer">
      <div class="sns-footer-inner">
        <a class="line" href="https://line.me/R/ti/p/%40urv2252f" target="_blank">LINE</a>
        <a class="wantedly" href="https://www.wantedly.com/companies/sibire" target="_blank">Wantedly</a>
        <a class="facebook" href="https://www.facebook.com/sibireinc" target="_blank">Facebook</a>
        <a class="twitter" href="https://twitter.com/sibire_inc" target="_blank">Twitter</a>
      </div>
    </div>
    <?php get_footer("lp"); //フッターリニューアル?>
