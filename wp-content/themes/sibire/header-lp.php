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

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sibire_inc">
    <meta name="twitter:creator" content="@sibire_inc">
    <meta name="twitter:description" content="sibireは東京にこだわらない働き方を支援します">
    <?php /* ?>タイトル<?php */ ?>
    <?php if ( is_home() || is_front_page() ) : ?>
      <title><?php bloginfo('name'); ?></title>
      <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
      <meta content="<?php bloginfo('name'); ?>" property="og:title">
    <?php else: ?>
      <title><?php wp_title( '', true, '' ); ?></title>
      <meta name="twitter:title" content="<?php wp_title( '', true, '' ); ?>">
      <meta content="<?php wp_title( '', true, '' ); ?>" property="og:title">
    <?php endif; ?>
    <?php /* ?>説明<?php */ ?>
    <meta name="description" content="「地方で働きたい」エンジニアの方々に、移住希望地の仕事を紹介するサービス。地方のユニークなIT企業の紹介はもちろん、移住に利用できるお得な制度なども紹介します。地方移住でシビレる人生を実現しましょう！" />
    <meta property="og:description" content="sibireは東京にこだわらない働き方を支援します" />
    <?php /* ?>キーワード<?php */ ?>
    <?php if ( $post->my_keywords ): ?>
      <meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
    <?php else: ?>
      <meta name="keywords" content="地方,IT,エンジニア,移住,転職,Web" />
    <?php endif; ?>

    <meta content="<?php the_permalink(); ?>" property="og:url">
    <meta content="sibire" property="og:site_name">
    <meta content="website" property="og:type">

    <?php if (has_post_thumbnail()): ?>
      <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
      <meta name="twitter:image:src" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
    <?php else: ?>
      <meta content="<?php echo get_template_directory_uri(); ?>/OGP.png" property="og:image">
      <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/OGP.png">
    <?php endif; ?>
    <meta content="ja_JP" property="og:locale">

    <meta name="description" content="「地方で働きたい」エンジニアの方々に、移住希望地の仕事を紹介するサービス。地方のユニークなIT企業の紹介はもちろん、移住に利用できるお得な制度なども紹介します。地方移住でシビレる人生を実現しましょう！" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-lp.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style-front-page.css" type="text/css" media="all" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png" />

  <?php wp_head(); ?>
  </head>
  <body>
    <?php include_once("analyticstracking.php") ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=207637699615029";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="wrap">
      <header>
        <div class="container">
          <div class="logo">
            <a href="/">sibire</a>
          </div>

        </div>
      </header>
