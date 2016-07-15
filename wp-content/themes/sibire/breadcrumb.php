<? php /* ?>
title: パンくずリストの部分テンプレート
description: 固定ページ以外は3段階のパンくずになります。改行するとスペースが入るので1行で記述
<?php */ ?>

<div class="breadcrumb">
  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="<?php echo home_url(); ?>" itemprop="url">
      <span itemprop="title">TOP</span>
    </a>&gt; 
  </span>
  
  <? php /* ?>固定ページ以外表示<?php */ ?>
  <?php if (is_page()) {?>
  <?php } else{ ?>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <? php /* ?>
      <a href="/<?php echo esc_html(get_post_type_object($post->post_type)->name); ?>" itemprop="url">
        <span itemprop="title"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></a></span>
      </a>&gt;
      <?php */ ?>
      <span itemprop="title"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>&gt; 
    </span>
  <?php } ?>
  
  <? php /* ?>親要素がある場合<?php */ ?>
  <?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parentid ) { ?>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a href="<?php echo bloginfo('url'); ?>?p=<?php echo $parentid;?>" itemprop="url">
        <span itemprop="title"><?php echo get_page($parentid)->post_title; ?></span>
      </a>&gt;
    </span>
  <?php } ?>
  <?php the_title(); ?>

</div>
