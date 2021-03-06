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
    
    <?php if ( is_home() || is_front_page() ) : ?>
      <title><?php bloginfo('name'); ?></title>
      <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
      <meta content="<?php bloginfo('name'); ?>" property="og:title">
      <meta content="website" property="og:type">
      <meta content="<?php echo home_url(null, 'http'); ?>" property="og:url">
      <meta name="twitter:description" content="<?php bloginfo('description'); ?>">
      <meta name="description" content="<?php bloginfo('description'); ?>" />
      <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <?php else: ?>
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
    <?php endif; ?>
    
    <?php if ( $post->my_keywords ): ?>
      <meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
    <?php else: ?>
      <meta name="keywords" content="地方,IT,エンジニア,移住,転職,Web" />
    <?php endif; ?>

    <meta content="sibire" property="og:site_name">

    <?php if (has_post_thumbnail()): ?>
      <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
      <meta name="twitter:image:src" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
    <?php else: ?>
      <meta content="<?php echo get_template_directory_uri(); ?>/OGP.jpg" property="og:image">
      <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/OGP.jpg">
    <?php endif; ?>
    <meta content="ja_JP" property="og:locale">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/editor.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://rdgothic-icons.s3.amazonaws.com/rdgothic-icons.css" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5DN4B6X');</script>
    <!-- End Google Tag Manager -->
    <!-- User Heat Tag --> 
    <script type="text/javascript"> 
    (function(add, cla){window['UserHeatTag']=cla;window[cla]=window[cla]||function(){(window[cla].q=window[cla].q||[]).push(arguments)},window[cla].l=1*new Date();var ul=document.createElement('script');var tag = document.getElementsByTagName('script')[0];ul.async=1;ul.src=add;tag.parentNode.insertBefore(ul,tag);})('//uh.nakanohito.jp/uhj2/uh.js', '_uhtracker');_uhtracker({id:'uhNEVa9Hts'}); 
    </script> 
    <!-- End User Heat Tag --> 
    <?php if(is_page('17572')): ?>
      <!-- Begin INDEED conversion code -->
      <script type="text/javascript">
      /* <![CDATA[ */
      var indeed_conversion_id = '183861477270744';
      var indeed_conversion_label = '';
      /* ]]> */
      </script>
      <script type="text/javascript" src="//conv.indeed.com/applyconversion.js">
      </script>
      <noscript>
      <img height=1 width=1 border=0 src="//conv.indeed.com/pagead/conv/183861477270744/?script=0">
      </noscript>
      <!-- End INDEED conversion code -->
    <?php endif; ?>
    <?php if(is_page('31952')): ?>
      <!-- Twitter single-event website tag code -->
      <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
      <script type="text/javascript">twttr.conversion.trackPid('nyzr5', { tw_sale_amount: 0, tw_order_quantity: 0 });</script>
      <noscript>
      <img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=nyzr5&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
      <img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=nyzr5&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0" />
      </noscript>
      <!-- End Twitter single-event website tag code -->   
    <?php endif; ?>

    <? $txt = get_field('head_ad'); if($txt){ ?><? echo $txt; ?><? } ?>

    <script type="text/javascript" src="//webfont.fontplus.jp/accessor/script/fontplus.js?55gB3urzk3w%3D&delay=1&aa=1&ab=2"" charset="utf-8"></script>

  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DN4B6X"
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
      <?php $url = $_SERVER['REQUEST_URI']; ?>
      <?php if(strstr($url,'wakayama-careerfair')): ?>
        <?php if (is_page() && $post->post_parent): ?>
        <?php else: ?>
        <?php endif; ?>
      <?php elseif(strstr($url,'offtokyomeetup2017')): ?>
        <header class="offtokyomeetup2017-header">
          <div class="menu-global_menu-container">
            <?php wp_nav_menu( array('menu' => 'offtokyomeetup2017', 'menu_class' => 'global_menu')); ?>
          </div>
        </header>
      <?php else : ?>
        <header>
          <div class="header-inner">
            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php get_template_part('partials/brand'); ?>
            </a>
            <?php /* ?>
            <div class="logo">
              <?php echo '<a href="' . home_url(null, 'http') . '">sibire</a>';?>
            </div>
            <?php */ ?>
            <?php wp_nav_menu( array('menu' => 'global_menu', 'menu_class' => 'global_menu')); ?>
          </div>
        </header>
      <?php endif; ?>
      <div id="blur">
        <div id="transparent" class="none"></div>
