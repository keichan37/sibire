<?php /* Template Name: 著者 */ ?>

  <?php get_header(); ?>
    <?php $userId = get_query_var('author'); ?>
    <?php $user = get_userdata($userId); ?>
    <div id="summary" class="author">
      <div class="summary-cover">
        <div class="container">
          <h1><?php echo $user->last_name ; ?><?php echo $user->first_name ; ?><span>の投稿一覧</span></h1>
        </div>
      </div>
       
      <div class="container">
        <div class="summary-grid-wrap">
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => array('recruit','interview','column','event','niche','blog'),
              'posts_per_page' => 12,
              'author' => $userId,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
              ?>
              <a href="<?php the_permalink() ?>" class="summary-grid">
                <figure>
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" data-echo="<?php echo $thumbnail_url[0]; ?>" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/template-summary/default.png" />
                  <?php endif; ?>
                  <figcaption>
                    <h3><?php the_title(); ?></h3>
                    <h4><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></h4>
                  </figcaption>
                </figure>
              </a>
          <?php endwhile; ?>
        </div>


      <nav class="paginate-nav">
        <?php global $wp_rewrite;
          $total_posts_num = get_posts(
            array(
              'paged' => $paged,
              'posts_per_page' => -1,
              'author' => $userId,
              'post_type' => array('recruit','interview','column','event','niche','blog'),
              'post_status' => 'publish',
              'has_password' => false
            )
          );
          $max_posts_num = count($total_posts_num);
          $max_pages = ceil($max_posts_num/12);

          $paginate_base = get_pagenum_link(1);
          if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
            $paginate_format = '';
            $paginate_base = add_query_arg('paged','%#%');
          }
          else{
            $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/','paged');;
            $paginate_base .= '%_%';
          }
          echo paginate_links(array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $max_pages,
            'mid_size' => 12,
            'current' => ($paged ? $paged : 1),
            'prev_text' => '&lsaquo;',
            'next_text' => '&rsaquo;',
          ));
        ?>
      </nav>
      <?php  wp_reset_postdata(); ?>
      
    </div>

      
    </div>    
    <?php get_footer(); ?>
