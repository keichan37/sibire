<?php /* Template Name: OFF TOKYO */ ?>

  <?php get_header(); ?>
    <div id="summary">
      <div class="summary-cover">
        <div class="container">
          <h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/cover.png" alt="<?php the_title(); ?>"/>
          </h1>
          <?php the_content(); ?>
          <?php get_template_part('partials/sns-share'); ?>
        </div>
      </div>
      <div class="container">
        <div class="summary-widget"><?php dynamic_sidebar('event-report'); ?></div>
        <h2 class="summary-h2">OFF TOKYO Engineer Story</h2>
        <div class="summary-grid-wrap">
          <?php
            $args = array( 
             'post_type' => 'interview',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'order' => 'ASC',
             'posts_per_page' => 1
            );
          ?>
          <?php
            $postslist = get_posts($args);
            foreach ($postslist as $post) : setup_postdata($post);
          ?>
            <?php get_template_part('partials/summary-grid-first'); ?>
          <?php 
            endforeach; 
            wp_reset_postdata();
          ?>
          <?php
            $args = array( 
             'post_type' => 'interview',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'order' => 'ASC',
             'offset' => '1',
             'posts_per_page' => 50
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
        <h2 class="summary-h2">OFF TOKYO IT先進エリア</h2>
        <div class="summary-grid-wrap">
          <?php
            $args = array( 
             'post_type' => 'niche',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'order' => 'ASC',
             'posts_per_page' => 1
            );
          ?>

          <?php
            $postslist = get_posts($args);
            foreach ($postslist as $post) : setup_postdata($post);
          ?>
          <?php get_template_part('partials/summary-grid-first'); ?>
          <?php 
            endforeach; 
            wp_reset_postdata();
          ?>
          <?php
            $args = array( 
             'post_type' => 'niche',
             'post_status' => 'publish',
             'has_password' => false,
             'tag' => 'offtokyo',
             'order' => 'ASC',
             'offset' => '1',
             'posts_per_page' => 50
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
        <div class="logo-wrap">
          <h2 class="logo-h2"><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/h2.png" alt="TEAM OFF TOKYO"/></h2>
          <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-sapporo.png" alt="札幌市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-sendai.png" alt="仙台市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-yokohama.png" alt="横浜市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-kobe.png" alt="神戸市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-wakayama.png" alt="和歌山市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-shimane.png" alt="島根県"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-tokushima.png" alt="徳島県"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-fukuoka.png" alt="福岡市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-kitakyusyu.png" alt="北九州市"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/emblem-miyazaki.png" alt="宮崎県"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-sibire.png" alt="sibire"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-8infinity.png" alt="8infinity"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-am.png" alt="am."/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-prtable.png" alt="PR TABLE"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-tokyo.png" alt="TOKYO RECYCLE"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-lajapan.png" alt="lajapan"/></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/logo-fukuoka.png" alt="福岡移住計画"/></li>
          </ul>
        </div>

      </div>    
      
    </div>
    <div class="summary-footer"> 
      <?php get_footer(); ?>
    </div>
