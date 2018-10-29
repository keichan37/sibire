<?php /* Template Name: 特集ページ */ ?>

  <?php get_header(); ?>
    <?php
      $posttags = get_the_tags();
      $posttag = $posttags[0]->slug;
    ?>
    <div id="lp" class="feature <?php echo $posttag; ?>">
      <div class="feature-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/template-feature/cover-<?php echo $posttag; ?>.jpg') ;">
        <h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/template-feature/h1-<?php echo $posttag; ?>.png" alt="<?php the_title(); ?>">
        </h1>
        <div class="feature-content"><?php the_content(); //本文 ?></div>
      </div>
      <div class="container">
        <div class="section">
          <h2><b>“</b>求人情報<b>”</b><span><?php echo $posttag; ?></span></h2>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => 'recruit',
              'tag' => $posttag,
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

        <?php if(post_custom('pagelink')): ?>
          <div class="section">
            <a class="pagelink" href="<?  $pagelink = get_field('pagelink');if($pagelink){ foreach((array)$pagelink as $value) {echo $value;}} ?>" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/template-feature/pagelink-<?php echo $posttag; ?>.jpg') ;"><img src="<?php echo get_template_directory_uri(); ?>/images/template-feature/pagelinktext.png" alt="移住などに関する制度情報"></a>
          </div>
        <?php endif; ?>

        <div class="section">
          <h2><b>“</b>トピック<b>”</b><span><?php echo $posttag; ?></span></h2>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => array('interview','column','event','blog'),
              'tag' => $posttag,
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
