<?php /* Template Name: イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-event">
      <div id="cover">
        <h1>
          <img class="slide-top" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-title.png" alt="<?php the_title(); ?>"/>
        </h1>
        <img class="slide-top" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-date.png" alt="2017/11/11 Sat 13:00~17:00 場所:STAR RISE TOWER 5F 'Studio Earth' (東京タワー直結)"/>
        <a class="button" href="entry">参加する</a>
        <?php get_template_part('partials/sns-share'); ?>
      </div>
      <section class="overview">
        <h2>“東京にこだわらない働き方”を体感するイベント</h2>
        <p>
          <span>
            OFF TOKYO MEETUP2017は、<br />
            全国のIT企業＆IT先進エリアが一挙に集まり、<br />
            各エリアや各企業での働き方を体感してもらうイベントです。 
          <span>
        </p>
      </section>
      <section class="content1">
        <h2 class="slide-top">地域を変えた<br />イノベーター対談</h2>
        <p>
          島根県に在住するまつもとゆきひろ氏と、鎌倉エリアを盛り上げる活動を行う柳澤大輔氏に<br />
          働きたい場所で東京に負けないキャリアを実現する方法を語ってもらいます。 
        </p>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-matsumoto.jpg" alt="まつもとゆきひろ"/>
          <figcaption>
            <h3>まつもとゆきひろ<span>氏</span></h3>
            <p>
              テキストテキストテキストテキストテキストテ
              テキストテキストテキストテキストテキ
              テキストテキストテキストテキストテキストテキストテキスキスト
              テキストテキストテキストテキストテキストテキストテキス
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-yanasawa.jpg" alt="柳澤大輔"/>
          <figcaption>
            <h3>柳澤大輔<span>氏</span></h3>
            <p>
              テキストテキストテキストテキストテキストテ
              テキストテキストテキストテキストテキ
              テキストテキストテキストテキストテキストテキストテキスキスト
              テキストテキストテキストテキストテキストテキストテキス
            </p>
          </figcaption>
        </figure>
      </section>
      <section class="company">
        <h2 class="slide-top">日本全国から企業が参加!</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-kayak.png" alt="面白法人カヤック">
            <span>鎌倉</span>
            <h3>面白法人カヤック</h3>
            <?php /* <a href="javascript:void(0);" target="_blank">Interview<b class="icon icon-open"></b></a> */ ?>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-salesforce.png" alt="株式会社セールスフォース・ドットコム">
            <span>白浜</span>
            <h3>株式会社セールスフォース・ドットコム</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-freee.png" alt="freee株式会社">
            <span>大阪</span>
            <h3>freee株式会社</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-dandoriworks.png" alt="株式会社ダンドリワークス">
            <span>日南</span>
            <h3>株式会社ダンドリワークス</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-nacl.png" alt="ネットワーク応用通信研究所">
            <span>松江</span>
            <h3>ネットワーク応用通信研究所</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-membersedge.png" alt="株式会社メンバーズエッジ">
            <span>北九州</span>
            <h3>株式会社メンバーズエッジ</h3>
          </li>
          
          <?php /*
          <li><span>酒田</span><h3>チェンジ・ザ・ワールド</h3></li>
          <li><span>仙台</span><h3>ワイヤードビーンズ</h3></li>
          <li><span>幕張</span><h3>スタートトゥデイ</h3></li>
          <li><span>福岡</span><h3>GMOぺパボ</h3></li>
          */ ?>

        </ul>
        <aside>&#x203B;50音順</aside>
      </section>
      <div class="participate participate1">
        <a class="button" href="entry">参加する</a>
      </div>
      <section class="municipality">
        <h2 class="slide-top">IT先進エリア</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-yokohama.png" alt="横浜市">
            <h3>横浜市</h3>
            <?php /* <a href="javascript:void(0);" target="_blank">Interview<b class="icon icon-open"></b></a> */ ?>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-kobe.png" alt="神戸市">
            <h3>神戸市</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-wakayama.png" alt="和歌山県">
            <h3>和歌山県</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-shimane.png" alt="島根県">
            <h3>島根県</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-tokushima.png" alt="徳島県">
            <h3>徳島県</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-fukuoka.png" alt="福岡市">
            <h3>福岡市</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-kitakyusyu.png" alt="北九州市">
            <h3>北九州市</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-miyazaki.png" alt="宮崎県">
            <h3>宮崎県</h3>
          </li>
        </ul>
        <aside>&#x203B;都道府県コード順</aside>
      </section>
      <section class="information">
        <table>
          <tr>
            <th>日時:</th>
            <td><time>2017年11月11日（土）12:00～18:00（予定）</time></td>
          </tr>
          <tr>
            <th>会場:</th>
            <td>STAR RISE TOWER 5F「Studio Earth」<br />※東京タワー直結（東京都港区芝公園4-4-7）</td>
          </tr>
          <tr>
            <th>参加費:</th>
            <td>無料</td>
          </tr>
          <tr>
            <th></th>
            <td>
              <table>
                <tr>
                  <th>募集人数:</th>
                  <td>500人</td>
                </tr>
                <tr>
                  <th>対象者:</th>
                  <td>東京以外の働き方に興味がある／地方で働くことに関心があるエンジニア、デザイナー、ディレクター</td>
                </tr>
                <tr>
                  <th>主催:</th>
                  <td>TEAM OFF TOKYO（シビレ株式会社、8infinity株式会社、株式会社am.、株式会社PR Table、株式会社東京リサイクル、合同会社laJapan、福岡移住計画、他) </td>
                </tr>
                <tr>
                  <th>協力:</th>
                  <td>株式会社team S、ネットワーク応用通信研究所、宮崎県、他</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </section>
      <section class="map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.657847" data-lng="139.744821"></div>
        </div>
        <div class="address">
          <address>〒105-0011 東京都港区芝公園４丁目４−７</address>
          <ul>
            <li>大江戸線 赤羽橋駅 / 赤羽橋口 徒歩5分</li>
            <li>日比谷線 神谷町駅 / 1 徒歩7分</li>
            <li>三田線 御成門駅 / A1 徒歩6分</li>
            <li>浅草線 大門駅 / A6 徒歩10分</li>
            <li>JR 浜松町駅 / 北口 徒歩15分</li>
          </ul>
        </div>
      </section>
      <div class="participate participate2">
        <a class="button" href="entry;">参加する</a>
        <footer>
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; 2017 sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
