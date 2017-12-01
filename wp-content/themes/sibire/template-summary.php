<?php /* Template Name: OFF TOKYO */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="container">
        <h1>
          <?php the_title(); ?>
        </h1>
        <?php get_template_part('partials/sns-share'); ?>
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="container">
        <?php dynamic_sidebar('event-report'); ?>
        <h2>OFF TOKYO Engineer Story</h2>
        <div class="common-grid-wrap">
          <?php
            $args = array( 
             'post_type' => 'interview',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'posts_per_page' => -1
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
        </div>
        <h2>OFF TOKYO IT先進エリア</h2>
        <div class="common-grid-wrap">
          <?php
            $args = array( 
             'post_type' => 'niche',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'posts_per_page' => -1
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
        </div>
        <h2>TEAM OFF TOKYO</h2>

      </div>    
      
    </div>    
    <?php get_footer(); ?>
