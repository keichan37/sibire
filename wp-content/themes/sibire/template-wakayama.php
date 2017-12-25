<?php /* Template Name: 和歌山イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-wakayama">
      <div id="cover">
        <div class="container">
          <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-image.jpg" alt="">
          <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/logo.png" alt="<?php the_title(); ?>"/><time datetime="<?php the_time('c') ;?>"><?php the_time('Y年n月d日(D)'); ?></time></h1>
          <?php the_content(); //本文 ?>
          <a class="button" href="#form">参加する</a>
          <?php get_template_part('partials/sns-share'); ?>
        </div>
      </div>
      <div class="section map" id="map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.6644916" data-lng="139.6991901">
            <div  data-lat="35.6304639" data-lng="139.6539423">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/monsoon.png" width="200" alt="モンスーンカフェ"/>
              <br />
              <a href="http://www.monsoon-cafe.jp/shibuya/" target="_blank">モンスーンカフェ 渋谷</a>
            </div>
          </div>
        </div>
        <div class="address">
          <address>〒150-0041 東京都渋谷区神南1-6-8 神南カンパリビル 4Ｆ</address>
        </div>
      </div>
      <div id="form" class="container">
        <?php echo do_shortcode('[contact-form-7 id="31972" title="OFF TOKYO 和歌山キャリアフェア"]'); ?>
      </div>
    </div>
    <?php get_footer(); ?>
