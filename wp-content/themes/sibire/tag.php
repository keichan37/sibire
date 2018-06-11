  <?php get_header(); ?>
    <div id="summary" class="tag">
      <div class="summary-cover">
        <div class="container">
          <h1><span class="icon icon-tag"></span>&nbsp;<strong><?php single_tag_title(); ?></strong></h1>
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
