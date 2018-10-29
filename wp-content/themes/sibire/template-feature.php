<?php /* Template Name: 特集ページ */ ?>

  <?php get_header(); ?>
    <?php
      $posttags = get_the_tags();
    ?>
    <div id="lp" class="feature">
      <div class="feature-cover">
        <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-feature/h1-<?php if ( $posttags[0] ) {echo $posttags[0]->name;} ?>.png" alt="<?php the_title(); ?>">
        </h1>
        <div class="feature-content"><?php the_content(); //本文 ?></div>
      </div>
      <div class="container">
        <div class="section">
          <h2><b>“</b>求人情報<b>”</b><span><?php if ( $posttags[0] ) {echo $posttags[0]->name;} ?></span></h2>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => 'recruit',
              'tag' => 'wakayama',
              'posts_per_page' => 10,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <div class="topic-summary owl-carousel">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/lp-grid'); ?>
          <?php endwhile; ?>
            </div>
          <?php wp_reset_query();?>
        </div>

        <div class="section">
          <h2><b>“</b>トピック<b>”</b><span><?php if ( $posttags[0] ) {echo $posttags[0]->name;} ?></span></h2>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => array('interview','column','event','blog'),
              'tag' => 'wakayama',
              'posts_per_page' => 12,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <div class="topic-summary owl-carousel">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('partials/lp-grid'); ?>
          <?php endwhile; ?>
            </div>
          <?php wp_reset_query();?>
        </div>

      </div>
    </div>

    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
