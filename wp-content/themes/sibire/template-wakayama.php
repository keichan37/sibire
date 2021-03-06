<?php /* Template Name: 和歌山イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-wakayama">
      <div id="cover">
        <div class="container">
          <img class="cover-image" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-arch.png" alt="">
          <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/logo.png" alt="<?php the_title(); ?>"/><time datetime="2018-03-10T14:00"></time></h1>
          <img class="building" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/building.png" alt="モンスーンカフェ 恵比寿店"/>
          <address>東京都渋谷区恵比寿4-4-6 MARIX恵比寿ビル 1F</address>

          <?php /* ?><img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/panda.png" class="panda"/><?php */ ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/okami.png" class="okami"/>
          <span>参加費:1000円(軽食とドリンクをお出しします。当日お支払いいただきます)</span>
          <div class="content">
            <?php the_content(); //本文 ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/orange.png" class="content-img orange"/>
          </div>
          <a class="button button-end" href="javascript:void(0);">本イベントは終了しました</a>
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
              <td><strong><span>第1部</span>　わかやまワークショップ</strong><br />〜和歌山で働く13人×都内在住の参加者〜</td>
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

      <div class="section interview" id="interview">
        <h2 class="h2">Interview　和歌山で働く「仕事の流儀」</h2>
        <ul>
        <?php
          $args = array( 
           'paged' => $paged,
           'post_type' => 'interview',
           'post__in' => array(34302),
           'post_status' => 'publish',
           'posts_per_page'   => 1,
           'has_password' => false
          );
          $postslist = get_posts($args);
          foreach ($postslist as $post) : setup_postdata($post);
        ?>
          <li>
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/company/empty.jpg">
                <?php endif; ?>
              </a>
              <figcaption>
                <div>
                  <strong><?php the_title(); ?></strong>
                  <br />
                  <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?><? } ?>
                </div>
              </figcaption>
            </figure>
          </li>
        <?php 
          endforeach; 
          wp_reset_postdata();
        ?>

        <?php
          $args = array( 
           'paged' => $paged,
           'post_type' => 'interview',
           'post__in' => array(34902),
           'post_status' => 'publish',
           'posts_per_page'   => 1,
           'has_password' => false
          );
          $postslist = get_posts($args);
          foreach ($postslist as $post) : setup_postdata($post);
        ?>
          <li>
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/company/empty.jpg">
                <?php endif; ?>
              </a>
              <figcaption>
                <div>
                  <strong><?php the_title(); ?></strong>
                  <br />
                  <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?><? } ?>
                </div>
              </figcaption>
            </figure>
          </li>
        <?php 
          endforeach; 
          wp_reset_postdata();
        ?>
        </ul>
      </div>

      <div class="section company" id="company">
        <h2 class="h2">出展企業</h2>
        <ul>
        <?php
          $parent_id = $post->post_parent;
          $slug = get_post_type();
          $args = array( 
           'meta_key' => 'subtitle',
           'orderby' => 'meta_value',
           'order' => 'ASC',
           'paged' => $paged,
           'post_type' => $slug,
           'post_status' => 'publish',
           'posts_per_page'   => -1,
           'post_parent' => get_the_ID(),
           'has_password' => false,
           'post__not_in'=> array(get_the_ID())
          );
          $postslist = get_posts($args);
          foreach ($postslist as $post) : setup_postdata($post);
        ?>
          <li>
            <figure>
              <?php $wakayama = get_post_meta($post->ID,"wakayama",true); ?>
              <?php if ($wakayama == 'true') : ?>
                <a href="<?php the_permalink(); ?>">
              <?php else : ?>
                <a class="fake-a" href="javascript: void(0);">
              <?php endif; ?>
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/company/empty.jpg">
                <?php endif; ?>
              </a>
              <figcaption>
                <div>
                  <strong><?php the_title(); ?></strong>
                  &nbsp;<? $txt = get_field('company_url'); if($txt){ ?><a href="<? echo $txt; ?>" target="_blank">[HP]</a><? } ?>
                </div>
                <?php if(has_tag()==true) : ?>
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<span class="tag">'. $tag->name .'</span>';
                      }
                    }
                  ?>
                <?php endif; ?>
              </figcaption>
            </figure>
          </li>
        <?php 
          endforeach; 
          wp_reset_postdata();
        ?>
        </ul>
      </div>

      <div class="section mc">
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/mc.jpg" alt="MC"/>
          <figcaption>
            <strong>司会　朝妻久実（クミッチェル）</strong>
            フリーアナウンサーとしてリポーター、キャスター、MCなどを行いながらも、東京都内の駅前で、出勤途中のサラリーマンを応援するチアリーダーの顔ももつ！
            地元を盛り上げたい気持ちも高く、イベントに参加いただく皆さんにエールを送ります。
          </figcaption>
        </figure>
      </div>

      <div class="section section1">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-1.png" alt="ワークショップ「わかやま“十人十色のくらしぶり”」"/>
        </h2>
        <p>和歌山県で活躍する企業の皆さんがこの日のために一挙集結。 東京ではできない和歌山らしい暮らしをアピールします。 各企業の特徴を知って、自分に合う企業に出会ってください。</p>
      </div>
      <div class="section section2">
        <h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/h2-2.png" alt="VR技術を駆使！和歌山の企業にバーチャル訪問"/>
        </h2>
        <p>180&deg;3Dライブで東京に居ながらリアルタイムでVR企業訪問！さらに360&deg;動画を利用したVR企業訪問も</p>
        <div class="figure-list">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/helicopter.jpg" alt=""/>
            <figcaption>リゾート地・白浜の企業をリアルタイムVRで訪問 </figcaption>
          </figure>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/vr.jpg" alt=""/>
            <figcaption>東京の会場にいながら、目の前に和歌山の景色が広がります</figcaption>
          </figure>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/okami.jpg" alt=""/>
            <figcaption>美人女将・3Dのんちゃんとバーチャル対面</figcaption>
          </figure>
        </div>
      </div>
      <div class="section section3">
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

      <?php /* ?>
      <h2 class="h2" id="form">申し込みフォーム</h2>
      <div id="common">
        <?php echo do_shortcode('[contact-form-7 id="31972" title="OFF TOKYO 和歌山キャリアフェア"]'); ?>
      </div>
      <?php */ ?>
    </div>
    <?php get_footer(); ?>
