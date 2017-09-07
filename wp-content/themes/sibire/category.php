<?php /* Template Name: カテゴリページ */ ?>

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
                <?php get_template_part('partials/common-grid'); ?>

              <?php endwhile; else: //投稿が存在しない場合 ?>
                <p>記事がありません</p>
              <?php endif; ?>
            </div>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>
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
