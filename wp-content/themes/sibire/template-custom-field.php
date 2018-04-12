<?php /* Template Name: カスタム投稿タイプ一覧ページ */ ?>

  <?php get_header(); ?>
    <?php
      $category  = get_the_category();
      $cat_id    = $category[0]->cat_ID;
      $cat_slug  = $category[0]->category_nicename;
      $cat_slug2 = $category[1]->category_nicename;
    ?>
    <div id="summary" class="<? echo $cat_slug ?>">
      <div class="summary-cover">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <div class="container">
        <div class="summary-grid-wrap">
          <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
            $args = array(
              'paged' => $paged,
              'posts_per_page' => -1,
              'post_type' => $cat_slug,
              'post_status' => 'publish',
              'has_password' => false
            );
          ?>
          <?php
            $postslist = get_posts($args);
            foreach ($postslist as $post) : setup_postdata($post);
          ?>
            <?php get_template_part('partials/summary-grid'); ?>
          <?php 
            endforeach; 
            wp_reset_postdata();
          ?>
          <?php if (function_exists("pagination")) {
            pagination($custom_query->max_num_pages);
          } ?>
      </div>    
      
    </div>

    <?php endwhile; else: //投稿が存在しない場合 ?>
      <p>記事がありません</p>
    <?php endif; ?>
      
    </div>    
    <?php get_footer(); ?>
