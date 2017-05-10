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
    
    <meta property="fb:app_id" content="207637699615029" />
    
    <?php if ( is_home() || is_front_page() ) : ?>
      <title><?php bloginfo('name'); ?></title>
      <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
      <meta content="<?php bloginfo('name'); ?>" property="og:title">
    <?php else: ?>
      <title><?php wp_title( '', true, '' ); ?></title>
      <meta name="twitter:title" content="<?php wp_title( '', true, '' ); ?>">
      <meta content="<?php wp_title( '', true, '' ); ?>" property="og:title">
    <?php endif; ?>

    <?php if ( is_home() || is_front_page() ) : ?>
      <meta content="website" property="og:type">
      <meta name="twitter:description" content="sibireは東京にこだわらない働き方を支援します">
      <meta name="description" content="sibireは東京にこだわらない働き方を支援します" />
      <meta property="og:description" content="sibireは東京にこだわらない働き方を支援します" />
    <?php else: ?>
      <meta content="artcle" property="og:type" />
      <meta name='twitter:description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>' />
      <meta name='description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>' />
      <meta property='og:description' content='<?php while(have_posts()): the_post();  echo get_the_excerpt('');endwhile;?>'>
    <?php endif; ?>
    
    <?php if ( $post->my_keywords ): ?>
      <meta name="keywords" content="<?php echo esc_attr( $post->my_keywords ); ?>" />
    <?php else: ?>
      <meta name="keywords" content="地方,IT,エンジニア,移住,転職,Web" />
    <?php endif; ?>

    <meta content="<?php the_permalink(); ?>" property="og:url">
    <meta content="sibire" property="og:site_name">

    <?php if (has_post_thumbnail()): ?>
      <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
      <meta name="twitter:image:src" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
    <?php else: ?>
      <meta content="<?php echo get_template_directory_uri(); ?>/OGP.png" property="og:image">
      <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/OGP.png">
    <?php endif; ?>
    <meta content="ja_JP" property="og:locale">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/editor.css" type="text/css" media="all" />
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
        <div class="header-inner">
          <div class="logo">
            <a href="/">sibire</a>
          </div>
          <?php wp_nav_menu( array('menu' => 'global_menu', 'menu_class' => 'global_menu')); ?>
        </div>
      </header>
