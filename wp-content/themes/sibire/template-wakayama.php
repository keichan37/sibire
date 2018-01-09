<?php /* Template Name: 和歌山イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-wakayama">
      <div id="cover">
        <div class="container">
          <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-image.jpg" alt="">
          <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-arch.png" alt="">
          <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/logo.png" alt="<?php the_title(); ?>"/><time datetime="<?php the_time('c') ;?>"><?php the_time('Y年n月d日(D)'); ?></time></h1>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/building.png" alt="モンスーンカフェ 恵比寿店"/>
          <address>東京都渋谷区恵比寿4-4-6 MARIX恵比寿ビル 1F</address>
          <div class="content">
            <?php the_content(); //本文 ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/orange.png" class="content-img orange"/>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/panda.png" class="content-img panda"/>
          </div>
          <a class="button" href="#common">参加する</a>
          <?php get_template_part('partials/sns-share'); ?>
        </div>
      </div>
      <div class="section section1">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-1.png" alt="ワークショップ「わかやま“十人十色のくらしぶり”」"/>
        </h2>
        <p>和歌山県で活躍する10社10人がこの日のために一挙集結。東京ではできない和歌山らしい暮らしをアピールします。
企業10社の特徴を知って、自分に合う企業に出会ってください。</p>
      </div>
      <div class="section section2">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-2.png" alt="リアルタイムVR企業訪問"/>
        </h2>
        <p>VRゴーグルを覗くと、目の前には和歌山県の企業が！東京に居ながらリアルタイムに会社訪問を実現</p>
      </div>
      <div class="section section2">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-3.png" alt="和歌山のおいしいを体験！"/>
        </h2>
        <p>和歌山県が誇るおいしい地の物とお酒を召し上がれ。海の幸も山の幸も味わいながら和歌山ぐらしを体感しよう。</p>
      </div>
      <div class="section map" id="map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.645387" data-lng="139.7117809">
            <div data-lat="35.645387" data-lng="139.7117809">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/monsoon.png" width="200" alt="モンスーンカフェ"/>
              <br />
              <a href="http://www.monsoon-cafe.jp/ebisu/print/" target="_blank">モンスーンカフェ 恵比寿</a>
              <address>〒150-0013 東京都渋谷区恵比寿4-4-6 MARIX恵比寿ビル 1F</address>
            </div>
          </div>
        </div>
      </div>
      <div id="common" class="container">
        <?php echo do_shortcode('[contact-form-7 id="31972" title="OFF TOKYO 和歌山キャリアフェア"]'); ?>
      </div>
    </div>
    <?php get_footer(); ?>
