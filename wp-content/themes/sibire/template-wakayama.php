<?php /* Template Name: 和歌山イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-wakayama">
      <div id="cover">
        <div class="container">
          <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-arch.png" alt="">
          <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/logo.png" alt="<?php the_title(); ?>"/><time datetime="2018-03-10T14:00"></time></h1>
          <img class="building" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/building.png" alt="モンスーンカフェ 恵比寿店"/>
          <address>東京都渋谷区恵比寿4-4-6 MARIX恵比寿ビル 1F</address>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/panda.png" class="panda"/>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/okami.png" class="okami"/>
          <div class="content">
            <?php the_content(); //本文 ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/orange.png" class="content-img orange"/>
          </div>
          <a class="button" href="#form">参加する</a>
          <?php get_template_part('partials/sns-share'); ?>
        </div>
      </div>
      <div class="schedule">
        <table>
          <caption>開催概要</caption>
          <tbody>
            <tr>
              <th><time>14:00</time></th>
              <td>オープニング</td>
            </tr>
            <tr>
              <th><time>14:10</time></th>
              <td>ライトニングトーク 和歌山を選び働くキーマンの実例紹介</td>
            </tr>
            <tr>
              <th><time>14:20</time></th>
              <td><strong><span>第1部</span>　わかやまワークショップ</strong><br />〜和歌山で働く十人×都内在住の参加者〜</td>
            </tr>
            <tr>
              <th><time>15:10</time></th>
              <td><strong><span>第2部</span>　交流会</strong><br />和歌山の食を楽しみながら来場者と情報交換
              <ul>
                <li><span>企業プレゼン(各社2分程度)</span></li>
                <li><span>リアルタイムVR体験</span></li>
                <li><span>ディスカッションスペース など</span></li>
              </ul>
              </td>
            </tr>
            <tr>
              <th><time>17:30</time></th>
              <td>終了</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="section section1">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-1.png" alt="ワークショップ「わかやま“十人十色のくらしぶり”」"/>
        </h2>
        <p>和歌山県で活躍する企業の皆さんがこの日のために一挙集結。 東京ではできない和歌山らしい暮らしをアピールします。 各企業の特徴を知って、自分に合う企業に出会ってください。</p>
      </div>
      <div class="section section2">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-2.png" alt="リアルタイムVR企業訪問"/>
        </h2>
        <p>VRゴーグルを覗くと、目の前には和歌山県の景色が。 東京に居ながらリアルタイムに会社訪問を実現</p>
      </div>
      <div class="section section2">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-3.png" alt="和歌山のおいしいを体験！"/>
        </h2>
        <p>和歌山県が誇るおいしい地の物とお酒を召し上がれ。 海の幸も山の幸も味わいながら和歌山ぐらしを体感しよう。</p>
      </div>
      <div class="section map" id="map">
        <h2 class="h2">アクセス</h2>
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.645387" data-lng="139.7117809">
            <div data-lat="35.645387" data-lng="139.7117809">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/monsoon.png" width="200" alt="モンスーンカフェ"/>
              <br />
              <a href="http://www.monsoon-cafe.jp/ebisu/print/" target="_blank">モンスーンカフェ 恵比寿</a>
              <address>〒150-0013 東京都渋谷区恵比寿4-4-6 MARIX恵比寿ビル 1F</address>
              TEL:<a href="tel:0357893811">0357893811</a>
            </div>
          </div>
        </div>
      </div>
      <h2 class="h2" id="form">申し込みフォーム</h2>
      <div id="common">
        <?php /* ?><?php echo do_shortcode('[contact-form-7 id="31972" title="OFF TOKYO 和歌山キャリアフェア"]'); ?><?php */ ?>
        <?php echo do_shortcode('[contact-form-7 id="234" title="OFF TOKYO 和歌山キャリアフェア"]'); ?>
      </div>
    </div>
    <?php get_footer(); ?>
