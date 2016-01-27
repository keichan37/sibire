<head>
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
    <meta name="keywords" content="シビレる日本を作る" />
  <?php endif; ?>

  <link href="favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/layout.css" type="text/css" media="all" />

  <meta content="" property="og:url">
  <meta content="" property="og:site_name">
  
  <meta content="website" property="og:type">
  <meta content="OGP.jpg" property="og:image">
  <meta content="ja_JP" property="og:locale">
</head>
