<?php /* Template Name: カスタム投稿タイプ一覧ページ */ ?>

  <?php get_header(); ?>
    <div id="common">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php
          $category  = get_the_category();
          $cat_id    = $category[0]->cat_ID;
          $cat_slug  = $category[0]->category_nicename;
          $cat_slug2 = $category[1]->category_nicename;
        ?>
      <div class="common-cover custom-field <? echo $cat_slug ?>">
        <div class="container">
          <?php get_template_part('breadcrumb');?>
          <h1>
            <?php if ( $post->post_parent > 0 ): //子要素の場合?>
              <?php $parent_id = $post->post_parent; echo get_the_title($parent_id);?> / 
            <?php endif ; ?>
            <?php the_title(); ?>
          </h1>
        </div>
      </div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">
            <?php if ( $post->post_parent > 0 ): //子要素の場合?>
              <?php $area_name = get_post_meta($post->ID, 'area_name', true);?>
              <?php
                $args = array( 
                 'post_type' => array($cat_slug,$cat_slug2),
                 'post_status' => 'publish',
                 'has_password' => false,
                 'meta_query' => array(
                   array(
                    'key' => 'area',
                    'value' => $area_name,
                    'compare'=> 'LIKE'
                   )
                 ),
                 'posts_per_page' => -1
                );
              ?>

            <?php else : ?>
              <?php
                $args = array(
                  'posts_per_page' => -1,
                  'post_type' => array($cat_slug,$cat_slug2),
                  'post_status' => 'publish',
                  'has_password' => false
                );
              ?>
            <?php endif ; ?>

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
