<?php /* Template Name: カスタム投稿タイプ一覧ページ */ ?>

  <?php get_header(); ?>
    <div id="common">
        <div class="common-cover custom-field <? echo $cat_name ?>">
          <div class="container">
            <?php get_template_part('breadcrumb');?>
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
        <div class="container">
            <div class="common-left">
              <div class="common-grid-wrap">
                <?php if(have_posts()): while(have_posts()):the_post(); ?>
                  <?php
                    $args = array( 
                     'post_type' => array(post,recruit,column,niche,interview,media,'blog'),
                     'post_status' => 'publish',
                     'has_password' => false,
                     'posts_per_page' => -1
                    );
                  ?>

                  <?php
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) : setup_postdata($post);
                  ?>
                  <?php get_template_part('partials/common-grid'); ?>
                  <?php 
                    endforeach; 
                    wp_reset_postdata();
                  ?>
                  <?php if (function_exists("pagination")) {
                    pagination($custom_query->max_num_pages);
                  } ?>


            <?php endwhile; else: //投稿が存在しない場合 ?>
              <p>記事がありません</p>
            <?php endif; ?>
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
    <?php get_footer(); ?>
