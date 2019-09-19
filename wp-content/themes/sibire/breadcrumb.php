<div class="breadcrumb">
  <span class="icon icon-home"></span>
  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="<?php echo home_url(); ?>" itemprop="url">
      <span itemprop="title">TOP</span>
    </a>&nbsp;<span class="icon icon-rightArrow"></span>&nbsp;
  </span>
  
  <?php if (is_page() ||  is_404()) {?>
  <?php } elseif(is_tag() || is_category() ) {?>
    <?php single_cat_title(); ?>の検索結果
  <?php } else{ ?>
    <?php
      $category = get_the_category();
      $cat_id   = $category[0]->cat_ID;
      $cat_name = $category[0]->cat_name;
      $cat_slug = $category[0]->category_nicename;
    ?>

    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a href="/category/<?php echo $cat_slug; ?>" itemprop="url">
        <span itemprop="title"><?php echo $cat_name; ?></a></span>
      </a>&nbsp;<span class="icon icon-rightArrow"></span>&nbsp;
    </span>
  <?php } ?>
  
  <?php foreach ( array_reverse(get_post_ancestors($post->ID)) as $parentid ) { ?>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
      <a href="<?php echo bloginfo('url'); ?>?p=<?php echo $parentid;?>" itemprop="url">
        <span itemprop="title"><?php echo get_page($parentid)->post_title; ?></span>
      </a>
      &nbsp;&gt;&nbsp;
    </span>
  <?php } ?>
  <?php the_title(); ?>

</div>
