<?php /* Template Name: タグページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="common-cover tag">
        <div class="container">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <h1><strong><?php single_tag_title(); ?></strong>の検索結果</h1>
        </div>
      </div>
      <div class="container">
        <div class="common-left">

          <div class="common-grid-wrap">
          <?php
            $current_id = get_queried_object_id();
            $args = array(
              'paged' => $paged,
              'tag_id' => $current_id,
              'post_type' => array('recruit','interview','offer','column','event','niche','blog'),
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
          <?php get_template_part('partials/tag'); ?>
          <?php get_template_part('partials/registration'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
