<?php /* ?>
title: 検索結果
description: 検索結果が表示されます
<?php */ ?>

  <?php get_header(); //ヘッダー ?>

    <div id="common">
      <div class="common-cover tag">
        <div class="container">
          <div class="breadcrumb">
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <a href="<?php echo home_url(); ?>" itemprop="url">
                <span itemprop="title">TOP</span>
              </a>&gt; 
            </span>
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
              <span itemprop="title"><?php the_search_query(); ?></strong>の検索結果</span>
            </span>
          </div>

          <?php
            $searchCat = $_GET['cat'];
            $searctTag = $_GET['tag'];
           
            $searchCatObj = get_term_by( 'ID', $searchCat, 'category');
            $searchTagObj = get_term_by( 'slug', $searctTag, 'post_tag');
           
            $searchCatStr = $searchCatObj->name;
            $searchTagStr = $searchTagObj->name;
           
            $found_cnt = $wp_query->post_count;
          ?>

          <?php if ($searchCatObj) echo 'カテゴリー: '.$searchCatStr; ?>
          <?php if ($searchTagObj) echo 'タグ: '.$searchTagStr; ?>
            <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
            <?php } else { ?>
              <h1>“<strong><?php the_search_query(); ?></strong>”の検索結果<?php echo $wp_query->found_posts; ?>件</h1>
            <?php } ?>
          <div class="post-name">
          </div>

        </div>
      </div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">

            <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
              <h2>検索条件が入力されていません。</h2>
            <?php } else { ?>
            <?php if(have_posts()) : ?>
              <?php while(have_posts()):the_post() ?>
                <?php get_template_part('partials/common-grid'); ?>
              <?php endwhile; ?>
             <?php else : ?>
              <h2>検索条件にヒットした記事がありませんでした。</h2>
            <?php endif; ?> </ul>
          <?php } ?>


          </div>
        </div>    
        <div class="common-right">
          <?php get_search_form(); ?>
          <?php get_template_part('partials/recruit-map'); ?>
          <?php get_template_part('partials/tag'); ?>
          <?php get_template_part('partials/registration'); ?>
        </div>
      </div>    
      
    </div>    
  <?php get_footer(); //フッター ?>
