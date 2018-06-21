  <?php get_header(); ?>
    <?php $userId = get_query_var('author'); ?>
    <?php $user = get_userdata($userId); ?>
    <div id="summary" class="tag">
      <div class="summary-cover">
        <div class="container">
          <h1><?php echo get_avatar( $user->ID ,34 ); ?>&nbsp;<?php echo $user->last_name ; ?><?php echo $user->first_name ; ?>の記事一覧</h1>
          <?php echo wpautop(get_the_author_meta('user_description')); ?>
          <i>全<?php echo $wp_query->found_posts; ?>件</i>
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
