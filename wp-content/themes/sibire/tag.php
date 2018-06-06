<?php /* Template Name: タグページ */ ?>

  <?php get_header(); ?>
    <div id="summary" class="tag">
      <div class="summary-cover">
        <div class="container">
          <h1><strong>関連キーワード <?php single_tag_title(); ?></strong></h1>
        </div>
      </div>
      <div class="container">
        <div class="summary-grid-wrap">
          <?php
            $current_id = get_queried_object_id();
            $args = array(
              'paged' => $paged,
              'tag_id' => $current_id,
              'post_type' => array('recruit','interview','offer','column','event','niche','blog'),
              'posts_per_page' => 12,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <?php get_template_part('partials/summary-grid'); ?>
            <?php endwhile; endif; ?>
            <?php wp_reset_postdata();?>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>

          </div>
        </div>    
        </div>
      </div>    
      
    </div>    
    <?php get_footer(); ?>
