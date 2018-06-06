<?php /* ?>
title: 検索結果
description: 検索結果が表示されます
<?php */ ?>

  <?php get_header(); //ヘッダー ?>
    
    <div id="summary">
      <div id="search">

        <?php
          $searchCat = $_GET['cat'];
          $searctTag = $_GET['tag'];
         
          $searchCatObj = get_term_by( 'ID', $searchCat, 'category');
          $searchTagObj = get_term_by( 'slug', $searctTag, 'post_tag');
         
          $searchCatStr = $searchCatObj->name;
          $searchTagStr = $searchTagObj->name;
         
          $found_cnt = $wp_query->post_count;
        ?>

        <div class="container">
          <div class="page-wrp">
            <?php if ($searchCatObj) echo 'カテゴリー: '.$searchCatStr; ?>
            <?php if ($searchTagObj) echo 'タグ: '.$searchTagStr; ?>
              <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
              <?php } else { ?>
                <div class="search-cover">
                  <h1>検索結果: <strong><?php the_search_query(); ?></strong></h1>
                  <i><?php echo $wp_query->found_posts; ?>件</i>
                </div>
              <?php } ?>


                <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
                  <div class="search-cover">
                    <h1>検索条件が入力されていません。</h1>
                  </div>
                  <?php get_search_form(); ?>
                <?php } else { ?>
                <?php if(have_posts()) : ?>
                  <?php get_search_form(); ?>
                  <?php get_template_part('partials/post-table'); ?>
                  <?php if (function_exists("pagination")) {
                    pagination($custom_query->max_num_pages);
                  } ?>
                 <?php else : ?>
                  <i>検索条件にヒットした記事がありませんでした。</i>
                  <?php get_search_form(); ?>
                <?php endif; ?>
              <?php } ?>

          </div>    
        </div>    
      </div>    
      
    </div>    
  <?php get_footer(); //フッター ?>
