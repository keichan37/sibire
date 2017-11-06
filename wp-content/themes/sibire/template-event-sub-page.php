<?php /* Template Name: イベントLP サブページ */ ?>
  <?php get_header(); ?>
    <div id="template-event" class="template-event-sub-page">
      <div id="sub-cover">
        <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-title.svg" alt="OFF TOKYO MEETUP 2017"/>
        <h1><?php the_title(); ?></h1>
      </div>
      
      <?php $url = $_SERVER['REQUEST_URI']; ?>
      <?php if(strstr($url,'program')): ?>
        <div class="program-wrap">
          <section class="program">
            <time>11:30</time>
            <h2>受付開始</h2>
          </section>
          <section class="program">
            <time>12:00</time>
            <h2>イベントSTART！</h2>
          </section>
          <section class="program">
            <time>12:30〜13:00</time>
            <strong>Round1</strong>
            <h2>OFF TOKYOマッチ！</h2>
            <p>プロレスのゴングでOFF TOKYO MEETUP スタート!</p>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-hidaka.jpg" alt="日高郁人">
              <figcaption>日高郁人</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-sugawara.jpg" alt="菅原拓也">
              <figcaption>菅原拓也</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-sugi.jpg" alt="SUGI">
              <figcaption>SUGI</figcaption>
            </figure>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-guinness.jpg" alt="ショーン・ギネス">
              <figcaption>ショーン・ギネス</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>13:00〜14:00</time>
            <strong>Round2</strong>
            <h2>トークセッション 「地域を変えたイノベーター対談」</h2>
            <p>Ruby開発者・まつもとゆきひろ氏×面白法人カヤック・柳澤大輔氏が 今回、対談を初めて実現。東京を離れてもイノベーションを起こし続ける 方法を語ります。ファシリテータは、元衆議院議員の宮崎謙介氏。</p>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-miyazaki.jpg" alt="宮崎謙介">
              <figcaption>東京都/元衆議院議員</figcaption>
            </figure>
            <div class="clear"></div>
            <figure class="ri">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-matsumoto.jpg" alt="まつもとゆきひろ">
              <figcaption>まつもとゆきひろ<br />島根県松江市/Ruby開発者</figcaption>
            </figure>
            <figure class="le">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-yanasawa.jpg" alt="柳澤大輔">
              <figcaption>柳澤大輔<br />神奈川県鎌倉市/面白法人カヤック創業者</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>14:00 〜14:20</time>
            <strong>Round3</strong>
            <h2>IT先進エリアによるピッチプレゼン</h2>
            <p>IT先進エリア10自治体が、<br />自エリアの魅力とアピールポイントをピッチ形式で語ります。</p>
          </section>
          <section class="program">
            <time>14:20～14:40</time>
            <strong>Round4</strong>
            <h2>エンジニア“スーパープレゼンテーション”(1)</h2>
            <h3>「OSSを仕事にする、書き続ける技術」</h3>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-yamashita.jpg" alt="山下和彦">
              <figcaption>山下和彦/GMOペパボ株式会社</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>14:50 〜15:20</time>
            <strong>Round5</strong>
            <h2>企業LT（ライトニングトーク)(1)</h2>
            <p>1社7分！自社の魅力とプロダクト、<br />開発手法などを限られた時間で語ります。(3社)</p>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-freee.jpg" alt="freee">
              <figcaption>freee</figcaption>
            </figure>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-monstarlab.jpg" alt="モンスター・ラボ">
              <figcaption>モンスター・ラボ</figcaption>
            </figure>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-opt.jpg" alt="オプト">
              <figcaption>オプト</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>15:20～15:40</time>
            <strong>Round6</strong>
            <h2>エンジニア“スーパープレゼンテーション”(2)</h2>
            <h3>「技術コミュニティのつくり方～OFF TOKYO後のリアル」</h3>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-yamada.jpg" alt="山田真次">
              <figcaption>山田真次/面白法人カヤック</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>15:50〜16:30</time>
            <strong>Round7</strong>
            <h2>企業LT（ライトニングトーク)(2)</h2>
            <p>1社7分！自社の魅力とプロダクト、<br />開発手法などを限られた時間で語ります。(4社)</p>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-nacl.jpg" alt="ネットワーク応用通信研究所">
              <figcaption>ネットワーク応用通信研究所</figcaption>
            </figure>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-membersedge.jpg" alt="メンバーズエッジ">
              <figcaption>メンバーズエッジ</figcaption>
            </figure>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-changetheworld.jpg" alt="チェンジ・ザ・ワールド">
              <figcaption>チェンジ・ザ・ワールド</figcaption>
            </figure>
            <figure class="figure-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/logo-chatwork.jpg" alt="ChatWork">
              <figcaption>ChatWork</figcaption>
            </figure>
          </section>
          <section class="program">
            <time>17:00〜18:00</time>
            <strong>Round9</strong>
            <h2>OFF TOKYO ご当地お酒フェス</h2>
            <p>参加者も企業もエリア担当者も、ご当地のお酒を楽しみながら会場全体で乾杯！ <br />ご当地のお酒に投票していく「OFF TOKYO 酒類コンクール2017」も開催 </p>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-hayashi.jpg" alt="林生馬">
              <figcaption>林生馬/日本テキーラ協会会長 </figcaption>
            </figure>
            <h4>ご当地お酒ラインナップ </h4>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-01.jpg">
              <figcaption>宮城県/勝山</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-02.jpg">
              <figcaption>宮城県/伯楽星</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-03.jpg">
              <figcaption>宮城県/綿谷</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-04.jpg">
              <figcaption>兵庫県/福寿 純米吟醸</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-05.jpg">
              <figcaption>兵庫県/六甲ビール 熟</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-06.jpg">
              <figcaption>和歌山県/紀土 純米大吟醸</figcaption>
            </figure>

            <?php /*
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-07.jpg">
              <figcaption>島根県/月山</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-08.jpg">
              <figcaption>島根県/七冠馬</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-09.jpg">
              <figcaption>島根県/十旭日</figcaption>
            </figure>
            */ ?>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-18.jpg">
              <figcaption>福岡県/天心 純米吟醸酒</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-19.jpg">
              <figcaption>福岡県/皿倉 純米吟醸</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-10.jpg">
              <figcaption>福岡県/百年蔵</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-11.jpg">
              <figcaption>宮崎県/キャンベルアーリーロゼ</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-12.jpg">
              <figcaption>宮崎県/京屋酒造 油津吟</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-13.jpg">
              <figcaption>宮崎県/匠の蔵</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-14.jpg">
              <figcaption>長崎県/五島芋</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-15.jpg">
              <figcaption>長崎県/五島麦</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-16.jpg">
              <figcaption>長崎県/マスカット・ベリー</figcaption>
            </figure>
            <figure class="figure-sake">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sake-17.jpg">
              <figcaption>長崎県/ナイアガラ スパークリング</figcaption>
            </figure>
          </section>
        </div>
        <section class="sub-stage">
          <h2>Sub Stage</h2>
          <ul>
            <li>
              <h3>キャリアデザインセミナー</h3>
              <p>釈迦院知則さん<br />あなたがもつ「数値」をもとに、算命学と統計学、心理学でキャリアの方向性をアドバイスします。</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sub-career.jpg" alt="キャリアデザインセミナー">
            </li>
            <li>
              <h3>ご当地飲食試食コーナー</h3>
              <p>宮崎県、五島市<br />宮崎県と五島市のお菓子や飲食物をお楽しみいただきます。</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sub-tasting.jpg" alt="試食コーナー">
            </li>
            <li>
              <h3>「キッズ×ロボット×寺子屋」体験</h3>
              <p>寺子屋ラボ<br />日本の「寺」を活用した“21世紀型の寺子屋”キッズ向けプログラミング教室</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sub-terakoya.jpg" alt="寺子屋">
            </li>
            <li>
              <h3>リアルタイムVR企業訪問</h3>
              <p>NTTドコモ<br />研究開発中のVR機器を利用し、福岡の企業をバーチャル訪問。リアルタイムで訪問した感覚を味わっていただけます</p>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sub-vr.jpg" alt="リアルタイムVR">
            </li>
          </ul>
          <div class="supplement-wrap">
            <p id="supplement" class="supplement">
              <time>16:00-18:00</time>
              お酒解禁!地酒コーナーOPEN＆お弁当引換開始<br />
              地酒と楽しめるおつまみ弁当を限定販売。
              <?php /*
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/sub-lunch-box.jpg" alt="弁当"><br />
               */ ?>
              <br />
              <span>※お弁当は1000円です。当日お支払いください。<br />※写真はイメージです。内容は異なる場合があります。</span>
            </p>
          </div>
        </section>
      <?php else: ?>
        <div id="common" class="entry-wrap">
          <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;endif; ?>
        </div>
      <?php endif; ?>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <div class="section participate participate3">
        <?php $url = $_SERVER['REQUEST_URI']; ?>
        <?php if(strstr($url,'program')): ?>
          <?php get_template_part('partials/template-event-button'); ?>
        <?php else: ?>
        <?php endif; ?>
        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
