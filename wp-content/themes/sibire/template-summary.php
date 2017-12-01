<?php /* Template Name: OFF TOKYO */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="container">
        <h1>
          <?php the_title(); ?>
        </h1>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="container">
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


          <?php get_template_part('partials/registration'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer(); ?>
