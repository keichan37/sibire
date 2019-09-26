<?php /* Template Name: LOVEドラフト東京LP */ ?>

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

          <div id="template-lovedraft" class="template-lovedraft-tokyo">
            <div id="cover">
              <div class="container">
                <h1><?php get_template_part('partials/lovedraft'); ?></h1>
                <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/schedule-tokyo.png" alt="">
                <p class="sponsored">主催：和歌山県<br />イベント受託：シビレ株式会社<br />集客協力：株式会社ネットマーケティング「Omiai」</p>
                <div class="content">
                  <?php the_content(); //本文 ?>
                </div>
                <a class="button" href="#form">エントリーフォームはこちら</a>
              </div>
            </div>
            <div class="section flow">
              <div class="container">
                <h2>和歌山県に<b>“スカウト”</b>されるまでの流れ</h2>
                <ul class="lovedraft-flow">
                  <li>
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/entry.png" alt="">
                      <figcaption>エントリー</figcaption>
                    </figure>
                    <p>和歌山でできる仕事をチェック！<br />このページからイベントにエントリー</p>
                    <b>→</b>
                  </li>
                  <li>
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/event.png" alt="">
                      <figcaption>イベント参加</figcaption>
                    </figure>
                    <p>イベントに参加して、<br />あなた自身をPRしよう</p>
                    <b>→</b>
                  </li>
                  <li>
                    <figure class="figure-scout">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/scout.png" alt="">
                      <figcaption class="scout">和歌山が<br /><span>あなたをスカウト！</span></figcaption>
                    </figure>
                    <p>市町村が「ほしい！」人を指名。<br />イベント内で結果発表！</p>
                    <b>→</b>
                  </li>
                  <li>
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/invitation.png" alt="">
                      <figcaption>現地にご招待</figcaption>
                    </figure>
                    <p>マッチングした人には交通費を補助！<br />現地で仕事や暮らしを体験</p>
                    <b>→</b>
                  </li>
                  <li>
                    <figure class="figure-scout">
                      <figcaption class="scout">移住へ</figcaption>
                    </figure>
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
                      <td><time datetime="2019-11-15T19:30">2019年11月15日（金）19：30～22:30（開場19:00）</time></td>
                    </tr>
                    <tr>
                      <th>場所</th>
                      <td>DIAGONAR RUN TOKYO</td>
                    </tr>
                    <tr>
                      <th>住所</th>
                      <td><address>東京都中央区八重洲２丁目８−７ 福岡ビル 4F</address></td>
                    </tr>
                    <tr>
                      <th>アクセス</th>
                      <td>東京駅 徒歩9分 / 有楽町駅 徒歩7分 / 京橋駅 徒歩3分</td>
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
                      <th>その他</th>
                      <td>和歌山県ならではのおやつをご用意</td>
                    </tr>
                  </tbody>
                </table>
                <h3 class="timetable">タイムテーブル</h3>
                <table class="timetable">
                  <thead>
                    <tr>
                      <th>時間</th>
                      <th>プログラム</th>
                      <th>コンテンツ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><time>19:40</time>～</td>
                      <td>Contents1<br />みんなで自己紹介！</td>
                      <td>グループに分かれて自己紹介！<br />あなたのことを知ってもらおう</td>
                    </tr>
                    <tr>
                      <td><time>20:40</time>～</td>
                      <td>Contents2<br />スカウトを獲得せよ！</td>
                      <td>市町村や事業所に直接アプローチ<br />スカウトを獲得しよう！</td>
                    </tr>
                    <tr>
                      <td><time>21:40</time>～</td>
                      <td>Contents3<br />あなたにこそ和歌山に来てほしい！</td>
                      <td>スカウトの結果発表！<br />マッチングしたら現地へご招待</td>
                    </tr>
                    <tr>
                      <td><time>22:00</time>～</td>
                      <td>SpecialContents<br />スカウト獲得！再アプローチ</td>
                      <td>マッチングしなかった人も<br />再アプローチでスカウトGet！</td>
                    </tr>
                  </tbody>
                </table>
          
              </div>
            </div>

            <div id="form" class="section form">
              <div class="container">
                <h2 class="h2"><b>エントリーフォーム</b></h2>
                <p>
                   スカウトされた方には、招待チケットをご用意。<br />
                   エントリー時に、あなた自身の経験・PRポイントを明記し、 しっかりアピールしよう。
                </p>

                <?php $url = $_SERVER['REQUEST_URI']; ?>
                  <?php if(strstr($url,'wakayama_draft_tokyo')): ?>
                    <?php echo do_shortcode('[contact-form-7 id="45072" title="和歌山LOVEドラフト フォーム"]'); ?>
                  <?php else: ?>
                    <?php echo do_shortcode('[contact-form-7 id="10" title="local"]'); ?>
                  <?php endif; ?>
              </div>
            </div>
            <div class="section recruit" id="recruit">
              <div class="container">
                <h3>和歌山でできる<b>Wanted!</b>なシゴト</h3>
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => array('recruit-event'),
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
