<?php /* Template Name: フロントページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="common-cover">
        <div class="common-cover-inner"><div class="container"><h1 class="site-title">OFF TOKYOしたい<br />エンジニアの転職を支援</h1></div></div>
      </div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => array('recruit','interview','offer','column','event','niche','blog'),
                'posts_per_page' => 27,
                'post_status' => 'publish',
                'has_password' => false,
              ); ?>
            <?php query_posts( $args ); ?>
            <?php while (have_posts()) : the_post(); 
             ?>
              <?php get_template_part('partials/common-grid'); ?>
            <?php endwhile; ?>

            <?php /* 
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>
            */ ?>
          </div>
        </div>    
        <div class="common-right">
          <?php get_template_part('partials/recruit-map'); ?>
          <?php get_template_part('partials/category'); ?>
          <?php get_template_part('partials/registration'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
