<?php /* Template Name: イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-event">
      <div id="cover" style="opacity: 0;">
        <h1>
          <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover.png" alt="<?php the_title(); ?>"/>
        </h1>
        <img class="freeentrance" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-freeentrance.png" alt="入場無料"/>
        <?php get_template_part('partials/template-event-button'); ?>
        <?php get_template_part('partials/sns-share'); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-soumusyo.jpg" alt="総務省"/>
      </div>
      <div id="marquee" class="marquee">
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/01.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/02.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/03.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/04.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/05.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/06.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/07.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/08.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/09.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/10.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/11.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/12.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/13.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/14.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/15.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/16.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/17.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/18.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/19.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/20.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/21.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/22.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/23.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/24.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/25.jpg" alt=""/>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/marquee/26.jpg" alt=""/>
      </div>
      <div class="section overview" id="overview">
        <h2>OFF TOKYOを体感! スペシャル・コンテンツ</h2>
        <nav>
          <?php wp_nav_menu( array('menu' => 'offtokyomeetup2017-content', 'menu_class' => 'content-menu')); ?>
        </nav>
      </div>
      <div class="section content1" id="content1">
        <h2 class="slide-top">地域を変えた<br />イノベーター対談</h2>
        <p>
          島根県に在住するまつもとゆきひろ氏と、鎌倉エリアを盛り上げる活動を行う柳澤大輔氏に<br />
          働きたい場所で東京に負けないキャリアを実現する方法を語ってもらいます。<br />
          一般公開できない話もあるため、外部には公開しないセッションとなります。
        </p>
        <span class="time">13:00〜14:00</span>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-matsumoto.jpg" alt="まつもとゆきひろ"/>
          <figcaption>
            <h3>まつもとゆきひろ<span>氏</span></h3>
            <p>
              プログラミング言語「Ruby」の生みの親。島根県松江市在住で、Ruby開発の功績から同市の名誉市民にも選ばれた。松江市ではRubyを軸にしたまちづくりも行われており、地域の産業構造の変革に影響を与えた
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-yanasawa.jpg" alt="柳澤大輔"/>
          <figcaption>
            <h3>柳澤大輔<span>氏</span></h3>
            <p>
              社員の給与をサイコロを振って決める「サイコロ給」などユニークな制度で知られる面白法人カヤックの代表。ひとつの街だけに企業が集中するのではなく、個性ある企業がそれぞれの地域で、その街の特色を生かしながら活躍する「鎌倉資本主義」を提唱するとともに、「満員電車回避制度」など、新たな働き方のスタイルも提唱している
            </p>
          </figcaption>
        </figure>

        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/sub-page/avatar-miyazaki.jpg" alt="宮崎謙介"/>
          <figcaption>
            <h3><span class="facilitator">ファシリテーター</span>宮崎謙介氏<span>氏</span></h3>
            <p>
              東京都新宿区生まれ。前衆議院議員。26歳で起業し日々奮闘する中で、社会の大きな問題に行きつき国政選挙に出馬し当選。2度の選挙を勝ち抜き、法案を作るなどし、志を実現する。大きな挫折の後に二度目の起業に踏み出す。現在は地方にある課題のひとつ、プログラミング教育を促進する事業を行う。
            </p>
          </figcaption>
        </figure>
        <p class="attention">
          <strong>メディア完全非公開!</strong>
          当セッションは動画配信等、メディア公開を行っていません。<br />地域を変えたふたりの対談を聞かれたい方は事前参加をお願いします。
        </p>
      </div>

      <div class="section content2" id="content2">
        <h2 class="slide-top">エンジニア<br />“スーパープレゼンテーション”</h2>
        <p>
          OFF TOKYOしたエリアで、<br />イノベーションの火を起こすエンジニアたちが、「技術を磨く術」を語ります。
        </p>
        <div class="figure-wrap">
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-yamashita.jpg" alt="山下和彦"/>
            <figcaption>
              <span class="time">14:20～14:40</span>
              <h3 class="line2">「OSSを仕事にする、<br />書き続ける技術」</h3>
              <p>
                GMOペパボ ホスティング事業部<br />
                <strong>山下和彦</strong>氏<br />
                <span>
                  Golang、Ruby、mrubyを主戦場とし、インフラレイヤーからアプリケーションレイヤーまで幅広く知見を持ち合わせる。Linux認証基盤のSTNSの開発(http://stns.jp)を行う
                </span>
              </p>
            </figcaption>
          </figure>
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-yamada.jpg" alt="山田真次"/>
            <figcaption>
              <span class="time">15:20～15:40</span>
              <h3>「技術コミュニティのつくり方～OFF TOKYO後のリアル」</h3>
              <p>
                面白法人カヤック　技術部<br />
                <strong>山田真次</strong>氏<br />
                <span>
                  社内システムやグループウェア、パブリッククラウドなど「管理」と名のつくものを一手に担う。湘南エリアの技術コミュニティに関わってきた 
                </span>
              </p>
            </figcaption>
          </figure>
          <?php /*
          <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/avatar-tanabe.jpg" alt=""/>
            <figcaption>
              <span class="time">16:30～16:50</span>
              <h3>「東京を離れた新しい働き方＆働き方UPDATE」</h3>
              <p>
                ヤフー株式会社<br />
                <strong>田邉昭博</strong>氏<br />
                <span>
                  2012年、ヤフー株式会社に入社。ビッグデータエンジニアとしてデータ＆サイエンスソリューション統括本部の関西拠点に従事しながら、クリエイター人財戦略室にて採用担当を兼務
                </span>
              </p>
            </figcaption>
          </figure>
          */ ?>
        </div>
      </div>
      <div class="section company" id="company">
        <h2 class="slide-top">出展企業</h2>
        <p>
          日本全国から企業がブース参加します。<br />
          <b class="lt">LT</b>マークがついている企業はライトニングトークに登壇します。
        </p>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-anysense.png" alt="株式会社エニセンス">
            <span>福岡</span>
            <h3>株式会社エニセンス</h3>
            <?php /* <a href="javascript:void(0);" target="_blank">Interview<b class="icon icon-open"></b></a> */ ?>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-opt.png" alt="株式会社オプト">
            <span>仙台</span><b class="lt">LT</b>
            <h3>株式会社オプト</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-kayak.png" alt="面白法人カヤック">
            <span>鎌倉</span>
            <h3>面白法人カヤック</h3>
            <a href="https://www.pr-table.com/kayac/stories/795" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-gmocloud.png" alt="GMOクラウド株式会社">
            <span>北九州</span>
            <h3>GMOクラウド株式会社</h3>
            <a href="https://www.pr-table.com/gmocloud/stories/800" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-gmopepabo.png" alt="GMOペパボ株式会社">
            <span>福岡</span>
            <h3>GMOペパボ株式会社</h3>
            <a href="https://www.pr-table.com/pepabo/stories/787" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-salesforce.png" alt="株式会社セールスフォース・ドットコム">
            <span>白浜</span>
            <h3>株式会社セールスフォース・ドットコム</h3>
            <a href="https://www.pr-table.com/salesforcecom/stories/782" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-dandoliworks.png" alt="株式会社ダンドリワークス">
            <span>日南</span>
            <h3>株式会社ダンドリワークス</h3>
            <a href="https://www.pr-table.com/dandoliworks/stories/786" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-chatwork.png" alt="ChatWork株式会社">
            <span>大阪</span>
            <span>神戸</span><b class="lt">LT</b>
            <h3>ChatWork株式会社</h3>
            <a href="https://www.pr-table.com/chatwork/stories/796" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-changetheworld.png" alt="株式会社チェンジ・ザ・ワールド">
            <span>酒田</span><b class="lt">LT</b>
            <h3>株式会社チェンジ・ザ・ワールド</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-nacl.png" alt="ネットワーク応用通信研究所">
            <span>松江</span><b class="lt">LT</b>
            <h3>ネットワーク応用通信研究所</h3>
            <a href="https://www.pr-table.com/NaCl/stories/778" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-bright-sys.png" alt="株式会社ブライトシステム">
            <span>大阪</span>
            <h3>株式会社ブライトシステム</h3>
            <a href="/recruit/26362" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-freee.png" alt="freee株式会社">
            <span>大阪</span><b class="lt">LT</b>
            <h3>freee株式会社</h3>
            <a href="https://www.pr-table.com/freee/stories/794" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-membersedge.png" alt="株式会社メンバーズエッジ">
            <span>仙台</span>
            <span>北九州</span><b class="lt">LT</b>
            <h3>株式会社メンバーズエッジ</h3>
            <a href="https://www.pr-table.com/membersedge/stories/785" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-monstarlab.png" alt="株式会社モンスター・ラボ">
            <span>松江</span><b class="lt">LT</b>
            <h3>株式会社モンスター・ラボ</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-yahoo.png" alt="ヤフー株式会社">
            <span>名古屋</span>
            <span>大阪</span>
            <span>博多</span>
            <span>北九州</span>
            <h3>ヤフー株式会社</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-wiredbeans.png" alt="株式会社ワイヤードビーンズ">
            <span>仙台</span>
            <h3>株式会社ワイヤードビーンズ</h3>
            <a href="https://www.pr-table.com/wiredbeans/stories/797" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <?php /*
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-comingsoon.png" alt="Coming Soon…">
          </li>
          */ ?>

        </ul>
        <aside>&#x203B;50音順&nbsp;&nbsp;&nbsp;&#x203B;決定している企業の一部を掲載</aside>
      </div>
      <div class="section participate participate1">
        <?php get_template_part('partials/template-event-button'); ?>
      </div>
      <div class="section municipality" id="municipality">
        <h2 class="slide-top">IT先進エリア</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-sapporo.png" alt="札幌市">
            <h3>札幌市</h3>
            <a href="https://www.70seeds.jp/offtokyo-sapporo-313/" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-sendai.png" alt="仙台市">
            <h3>仙台市</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-yokohama.png" alt="横浜市">
            <h3>横浜市</h3>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-kobe.png" alt="神戸市">
            <h3>神戸市</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-wakayama.png" alt="和歌山県">
            <h3>和歌山県</h3>
            <a href="https://www.70seeds.jp/offtokyo-wakayama-315/" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-shimane.png" alt="島根県">
            <h3>島根県</h3>
            <a href="https://www.70seeds.jp/offtokyo-shimane-312/" target="_blank">Interview<b class="icon icon-open"></b></a>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-tokushima.png" alt="徳島県">
            <h3>徳島県</h3>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/emblem-fukuoka.png" alt="福岡市">
            <h3>福岡市</h3>
            <a href="https://www.70seeds.jp/offtokyo-fukuoka-314/" target="_blank">Interview<b class="icon icon-open"></b></a>
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
      </div>
      <div class="section information" id="information">
        <table>
          <tr class="strong">
            <th>日時:</th>
            <td><time datetime="2017-11-11 12:00">2017年11月11日</time>（土）12:00～18:00（予定）</td>
          </tr>
          <tr class="strong">
            <th>会場:</th>
            <td>STAR RISE TOWER 5F「Studio Earth」<br />※東京タワー直結（東京都港区芝公園4-4-7）</td>
          </tr>
          <tr class="strong">
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
                  <td>TEAM OFF TOKYO（シビレ株式会社、8infinity株式会社、株式会社am.、株式会社PR Table、株式会社東京リサイクル、合同会社laJapan、福岡移住計画) </td>
                </tr>
                <tr>
                  <th>協力:</th>
                  <td>NTTドコモ、Sansan、ネットワーク応用通信研究所、宮崎県、五島市、CData Software Japan、ワークスアプリケーションズ</td>
                </tr>
                <tr>
                  <th>メディア協賛:</th>
                  <td>@IT、TURNS</td>
                </tr>
                <tr>
                  <th>後援:</th>
                  <td>総務省</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
      <div class="section map" id="map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.657847" data-lng="139.744821">
            <div  data-lat="35.657847" data-lng="139.744821">
              <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-starrisetower.jpg" alt="STAR RISE TOWER"/></h1>
              <p>※東京タワー直結（東京都港区芝公園4-4-7）<br /><a href="http://starrise-tower.com/#s-access" target="_blank">http://starrise-tower.com</a></p>
            </div>
          </div>
        </div>
        <div class="section address">
          <address>〒105-0011 東京都港区芝公園4-4-7</address>
          <ul>
            <li>大江戸線 赤羽橋駅 / 赤羽橋口 徒歩5分</li>
            <li>日比谷線 神谷町駅 / 1 徒歩7分</li>
            <li>三田線 御成門駅 / A1 徒歩6分</li>
            <li>浅草線 大門駅 / A6 徒歩10分</li>
            <li>JR 浜松町駅 / 北口 徒歩15分</li>
          </ul>
        </div>
      </div>
      <div class="section participate participate2">
        <?php get_template_part('partials/template-event-button'); ?>
      </div>
      <div class="section cooperate" id="cooperate">
        <h2>協力</h2>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-docomo.png" alt="株式会社NTTドコモ"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-sansan.png" alt="Sansan株式会社"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-nacl.png" alt="ネットワーク応用通信研究所"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-miyazaki.png" alt="宮崎県"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-goto.png" alt="五島市"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-cdata.png" alt="CData Software Japan"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-wap.png" alt="株式会社ワークスアプリケーションズ"></li>
        </ul>
        <h2>メディア協賛</h2>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-@it.png" alt="@IT"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-turns.png" alt="TURNS"></li>
        </ul>
        <h2>主催 TEAM OFF TOKYO</h2>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-sibire.png" alt="シビレ株式会社"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-8infinity.png" alt="8infinity株式会社"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-am.png" alt="株式会社am"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-prtable.png" alt="株式会社PR Table"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-tokyorecycle.png" alt="株式会社東京リサイクル"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-lajapan.png" alt="合同会社laJapan"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-fukuokaijyu.png" alt="福岡移住計画"></li>
        </ul>
        <h2>後援</h2>
        <ul>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo-soumusyo.png" alt="総務省"></li>
        </ul>
      </div>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <div class="section participate participate3">
        <?php /*
        <table class="time-table">
          <caption><strong>Contents</strong></caption>
          <tr>
            <th><span>12:00〜16:00</span></th>
            <td>
              <ul>
                <li>「キッズ×ロボット×寺子屋」体験</li>
                <li>宮崎県・飲食コーナー</li>
                <li>五島市・飲食コーナー</li>
                <li>キャリアデザインセミナー</li>
              </ul>
            </td>
          </tr>
          <tr>
            <th><span>16:00〜</span></th>
            <td>全国地酒の試飲会</td>
          </tr>
          <tr>
            <th><span>12:30〜</span></th>
            <td>OFF TOKYOマッチ！</td>
          <tr>
          <tr>
            <th><span>17:00〜</span></th>
            <td>OFF TOKYO PARTY</td>
          <tr>
        </table>
        */ ?>

        <?php get_template_part('partials/template-event-button'); ?>
        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
