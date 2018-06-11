  <?php get_header(); ?>
    <div id="summary" class="category">
      <div class="summary-cover">
        <div class="container">
          <h1><span class="icon icon-paper"></span>&nbsp;<?php single_cat_title(); ?></h1>
          <?php echo category_description(); ?>
        </div>
      </div>
      <div class="container">
        <div class="summary-grid-wrap">
          <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <?php get_template_part('partials/summary-grid'); ?>
          <?php endwhile; endif; ?>
        </div>
        <?php if (function_exists("pagination")) {
          pagination($custom_query->max_num_pages);
        } ?>
      </div>
    </div>    
      
  </div>    
  <?php get_footer(); ?>
