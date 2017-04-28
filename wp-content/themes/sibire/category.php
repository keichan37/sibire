<?php /* Template Name: カテゴリページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <?php $current_category = single_cat_title("", false); ?>
    <div id="common">
      <div class="common-cover category">
        <div class="container">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <h1><strong><?php single_cat_title(); ?></strong>カテゴリ一覧</h1>
        </div>
      </div>
      <div class="container">
        <div class="common-left">

          <div class="common-grid-wrap">
          <?php
            $category = get_the_category();
            $cat_slug = $category[0]->category_nicename;
            $args = array(
              'paged' => $paged,
              'category_name' => $current_category,
              'post_type' => array('recruit','interview','offer','column','event','niche'),
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <?php get_template_part('partials/common-grid'); ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata();?>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>

          </div>
        </div>    
        <div class="common-right">
          <?php get_template_part('partials/recruit-map'); ?>
          <?php get_template_part('partials/category'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
