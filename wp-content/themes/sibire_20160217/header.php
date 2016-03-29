<!doctype html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta content="no-cache" http-equiv="Pragma">
    <meta charset="utf-8">
    <meta content="no-cache" http-equiv="Cache-Control">
    <meta content="0" http-equiv="Expires">
    <meta content="text/css" http-equiv="Content-Style-Type">
    <meta content="text/javascript" http-equiv="Content-Script-Type">
    <meta content="index, follow" name="robots">
    <meta content="width=device-width, initial-scale=1" id="viewport" name="viewport">

    <!-- タイトル -->
    <?php if ( $post->my_title ): ?>
      <title><?php echo esc_html( $post->my_title ); ?></title>
      <meta content="<?php echo esc_html( $post->my_title ); ?>" property="og:title">
    <?php else: ?>
      <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
      <meta content="<?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?>" property="og:title">
    <?php endif; ?>
    
    <!-- 説明 -->
    <?php if ( $post->my_description ): ?>
      <meta name="description" content="<?php echo esc_attr( $post->my_description ); ?>" />
      <meta content="<?php echo esc_attr( $post->my_description ); ?>" property="og:description">
    <?php else: ?>
      <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta content="<?php bloginfo('description'); ?>" property="og:description">
    <?php endif; ?>

    <!-- キーワード -->
    <?php if ( $post->my_keywords ): ?>
      <meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
    <?php else: ?>
      <meta name="keywords" content="シビレる仕事を、地方で" />
    <?php endif; ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/layout.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/company.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/responsive.css" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png" />

    <meta content="http://www.sibire.co.jp" property="og:url">
    <meta content="sibire" property="og:site_name">
    
    <meta property="og:title" content="シビレ株式会社" />
    <meta property="og:description" content="シビレる仕事を、地方で" />
    <meta content="website" property="og:type">
    <meta content="<?php echo get_template_directory_uri(); ?>/OGP.png" property="og:image">
    <meta content="ja_JP" property="og:locale">
  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=506335716079745";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div id="wrap">
      <header id="header">
        <div class="container">
          <div class="logo">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-2x.png" alt="シビレ株式会社">
            </a>
          </div>

          <div id="sns">
            <div class="facebook">
              <div class="fb-like" data-href="http://www.sibire.co.jp" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            </div>
            <div class="twitter">
              <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.sibire.co.jp" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレる">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </header>
