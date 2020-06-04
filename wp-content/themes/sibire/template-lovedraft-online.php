<?php /* Template Name: LOVEドラフト オンライン LP */ ?>

<!doctype html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta content="no-cache" http-equiv="Pragma">
    <meta content="no-cache" http-equiv="Cache-Control">
    <meta content="0" http-equiv="Expires">
    <meta content="text/css" http-equiv="Content-Style-Type">
    <meta content="text/javascript" http-equiv="Content-Script-Type">
    <meta content="index, follow" name="robots">
    <meta content="width=device-width, initial-scale=1" id="viewport" name="viewport">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sibire_inc">
    <meta name="twitter:creator" content="@sibire_inc">
    
    <title><?php wp_title( '', true, '' ); ?></title>
    <meta name="twitter:title" content="<?php wp_title( '', true, '' ); ?>">
    <meta content="<?php wp_title( '', true, '' ); ?>" property="og:title">
    <meta content="article" property="og:type" />
    <?php
      $permalink = get_permalink();
      $httplink = str_replace( 'https://', 'http://', $permalink );
    ?>
    <meta content="<?php echo $httplink ;?>" property="og:url">
    <meta name='twitter:description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>' />
    <meta name='description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>' />
    <meta property='og:description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>'>
    <meta name="keywords" content="地方,IT,エンジニア,移住,転職,Web" />
    <meta content="sibire" property="og:site_name">
    <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
    <meta name="twitter:image:src" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
    <meta content="ja_JP" property="og:locale">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/editor.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://rdgothic-icons.s3.amazonaws.com/rdgothic-icons.css" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png" />
    
    <!-- Google Tag Manager adinte-->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T5QQFS5');
    </script>
    <!-- End Google Tag Manager -->
    <!-- User Heat Tag --> 
    <script type="text/javascript"> 
    (function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhNEVa9Hts'}); 
    </script> 
    <? $txt = get_field('head_ad'); if($txt){ ?><? echo $txt; ?><? } ?>
    <script type="text/javascript" src="//webfont.fontplus.jp/accessor/script/fontplus.js?55gB3urzk3w%3D&delay=1&aa=1&ab=2"" charset="utf-8"></script>

  <?php wp_head(); ?>
  </head>
  <body <?php body_class( $class ); ?>>
    <?php include_once("analyticstracking.php") ?>
    <!-- Google Tag Manager (noscript) adinte -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5QQFS5"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=207637699615029";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="wrap">
      <div id="blur">
        <div id="transparent" class="none"></div>

          <div id="template-lovedraft" class="template-lovedraft2020">
            <div id="cover">
              <div class="container">
                <h1><?php get_template_part('partials/lovedraft2020'); ?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/datetime.png" alt="">
                <a class="button" href="#form">参加エントリー</a>
              </div>
            </div>
            <div class="section flow">
              <div class="container">
                <h2>自分だけのキャリアを手にするまでの流れ</h2>
                <p class="description">やりたい仕事にエントリーして、あなたらしいキャリアをスタートさせよう。</p>
                <ul class="lovedraft2020-flow">
                  <li>
                    <h4><b>1</b><span>まずはエントリー</span></h4>
                    <p>和歌山ならではの仕事をwebでチェック。あなたらしさを発揮できる仕事を選んでエントリー。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/flow1.png" alt="">
                  </li>
                  <li>
                    <h4><b class="nth-child2">2</b><span>オンラインイベントへ参加</span></h4>
                    <p>自宅などからイベント参加。オンラインで交流し、市町村にスカウトしてもらおう。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/flow2.png" alt="">
                  </li>
                  <li>
                    <h4><b class="nth-child3">3</b><span>マッチングしたら和歌山へ訪問</span></h4>
                    <p>イベントで双方がマッチングしたら(両想いになったら)、市町村へご招待。仕事だけでなく現地の暮らしを体感。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/flow3.png" alt="">
                  </li>
                  <li>
                    <h4><b class="nth-child4">4</b><span>移住</span></h4>
                    <p>和歌山で暮らすイメージがついたら、移住に向けての一歩を進めましょう</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="section schedule">
              <div class="container">
                <h3><b>イベント</b>概要</h3>
                <table class="overview">
                  <tbody>
                    <tr>
                      <th>日時</th>
                      <td><time datetime="2020-08-01T15:00">2020年8月1日（土）15：00～17:00</time></td>
                    </tr>
                    <tr>
                      <th>実施方法</th>
                      <td>オンラインで開催</td>
                    </tr>
                    <tr>
                      <th>参加費</th>
                      <td>無料</td>
                    </tr>
                    <tr>
                      <th>定員</th>
                      <td>30名 (先着順にご案内)</td>
                    </tr>
                    <tr>
                      <th>主催</th>
                      <td>和歌山県</td>
                    </tr>
                    <tr>
                      <th>企画・運営</th>
                      <td>シビレ株式会社</td>
                    </tr>
                  </tbody>
                </table>
                <p class="rule">
                  <b>オンラインイベントのため、自宅からイベントサイトへアクセスして参加いただくことになります。</b><br />
                  ◆必須環境<br />
                  ・ZoomをインストールしてあるPCまたはタブレット（講演者が資料の画面共有をしたり、プレゼンターがデモを見せたりします<br />
                   ので、見やすさの観点からPC推奨）<br />
                  ・安定したインターネット環境<br />
                   （参考：通信データ量は、300MB／時間程度です。Skypeの1/5〜1/7程度 ）<br />
                  ◆推奨環境<br />
                  ・イヤホンまたはヘッドホン<br />
                  ◆参加方法<br />
                  Zoomはアカウントを登録していなくても、URLをクリックするだけで参加することができます。<br />
                  主催者からアナウンスのあったURLをクリックして入室してください。<br />
                  お名前を入力するウィンドウが出ることがありますが、入力していただくのは本名でもニックネームでも構いません。
                </p>
                <h3 class="timetable">タイムテーブル</h3>
                <table class="timetable timetable2020">
                  <thead>
                    <tr>
                      <th>時間</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><time>15:00</time>～</td>
                      <td>Start!</td>
                      <td><ul><li>イベント進行</li><li>説明</li></ul></td>
                    </tr>
                    <tr>
                      <td><time>15:10</time>～</td>
                      <td>Contents1 みんなで自己紹介！<br />あなたを知ってもらって 市町村にスカウトしてもらおう！</td>
                      <td><ul><li>市町村による1分プレゼン</li><li>参加者 1分自己紹介</li></ul></td>
                    </tr>
                    <tr>
                      <td><time>16:00</time>～</td>
                      <td>Contents2 スカウトを獲得せよ！<br />市町村・事業所へ個別アプローチ</td>
                      <td><ul><li>参加者と市町村の交流タイム</li></ul>※個別ルームを用意するので仕事の詳細を聞くことも可能</td>
                    </tr>
                    <tr>
                      <td><time>16:40</time>～</td>
                      <td>Contents3 告白タイム</td>
                      <td><ul><li>行きたい市町村を選ぼう</li></ul></td>
                    </tr>
                    <tr>
                      <td><time>16:50</time>～</td>
                      <td> Contents4 あなたにこそ和歌山に来てほしい！<br />スカウト結果発表！</td>
                      <td><ul><li>市町村が来てほしい人を投票</li></ul></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="section recruit" id="recruit">
              <div class="container">
                <h3><b>気になる仕事</b>を探して<br />イベントへエントリー</h3>
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => array('recruit-event'),
                    'meta_key' => 'event',
                    'meta_value' => 'online',
                    'meta_compare' => 'LIKE',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                    'has_password' => false,
                    'orderby' => 'modified',
                    'order' => 'DESC',
                  ); ?>
                <?php query_posts( $args ); ?>
                <ul>
                  <?php while (have_posts()) : the_post(); ?>
                    <li>
                      <a href=<?php echo get_permalink(); ?>>
                        <h4>
                        <?php
                          $title = get_the_title($ID);
                          $title = str_replace("  ", "<br />", $title);
                          echo $title;
                        ?>
                        </h4>
                        <?php
                          $posttags = get_the_tags();
                          if ($posttags) {
                            foreach($posttags as $tag) {
                              echo '<b>' . $tag->name . '</b>';
                            }
                          }
                        ?>
                      </a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>

            <div id="form" class="section form">
              <div class="container">
                <h2 class="h2"><b>エントリーフォーム</b></h2>
                <p>
                  イベントでマッチングしたら、招待チケットを差し上げます！<br />
                  エントリー時に、あなた自身の経験・PRポイントを明記し、 しっかりアピールしよう。
                </p>

                <?php $url = $_SERVER['REQUEST_URI']; ?>
                  <?php if(strstr($url,'wakayama-draft-online')): ?>
                    <?php echo do_shortcode('[contact-form-7 id="45072" title="和歌山LOVEドラフト フォーム"]'); ?>
                  <?php else: ?>
                    <?php echo do_shortcode('[contact-form-7 id="10" title="local"]'); ?>
                  <?php endif; ?>
              </div>
            </div>

          <footer id="footer" class="template-lovedraft-footer">
            <div class="container">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/title.png" alt="Wakayama Love ドラフト">
              和歌山県&nbsp;&nbsp;
              問合せ先:<a href="mailto:info@sibire.co.jp">info@sibire.co.jp</a>&nbsp;&nbsp;
              <small>Copyright &copy; Wakayama Prefecture. All Rights Reserved.</small>
            </div>
          </footer>
        </div>
  </div>

  <?php wp_footer(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.fadethis.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.slicknav.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/echo.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/wpcf7.js"></script>

  <script>
    $(window).fadeThis({
      reverse:  false,
      offset: 10,
      distance: 40
    });
    $('.global_menu').slicknav({
      label: '',
      prependTo: 'body',
      allowParentLinks: true,
      showChildren: true,
    });
    $(".slicknav_btn").click(function(){
      $('#blur').toggleClass("blur");
      $('#transparent').toggleClass("none");
      $('header').toggleClass("slicknav_open");
    });
    //$(window).on('load',function(){
      //$('#marquee').liMarquee({
        //scrollDelay: 2000,
        //scrollStop: true,
        //stopOutScreen: true,
        //dragAndDrop: true,
        //startShow: true
      //});
    //})
    // echo.jsを初期化(起動)する
      echo.init() ;
  </script>

  </body>
</html>
