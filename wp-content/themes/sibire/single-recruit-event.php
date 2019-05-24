<?php
  /* Template Name: LOVEドラフト 記事ページ 
     Template Post Type: recruit-event
*/ ?>

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

    <div id="common" class="template-lovedraft-single">
      <div id="template-lovedraft">
        <div class="container">
          <div class="single-wrap">
            <div class="single">
              <div class="single-left">
                <a href="<?php echo get_permalink(44822); ?>"><img class="single-title-img" src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/single-title.png" alt="Wakayama Love ドラフト"></a>
                <?php while(have_posts()): the_post(); ?>
                  <article>
                    <h1 class="single-title"><?php the_title(); ?></h1>
                    <?php if ( is_user_logged_in() ): ?>
                      <a class="single-edit" href="/wp-admin/post.php?post=<?php the_ID(); ?>&action=edit">編集する</a>
                    <?php endif; ?>

                    <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>

                      <div class="single-content mce-content-body">

                        <?php the_content(); //本文 ?>
                        <?php get_template_part('partials/single-table-lovedraft'); ?>
                      </div>
                    <?php endif; //パスワード保護 ?>

                  </article>
                <?php endwhile; ?>
              </div>
            </div>
            <aside>
            </aside>
          </div>    
      </div>
      <footer id="footer" class="template-lovedraft-footer">
        <div class="container">
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-lovedraft/title.png" alt="Wakayama Love ドラフト">
          和歌山県
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
