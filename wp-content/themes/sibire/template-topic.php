<?php /* Template Name: トピック */ ?>

  <?php get_header(); ?>
    <div id="summary" class="topic">
      <div class="summary-cover">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
      <div class="container">
        <div class="summary-grid-wrap">
          <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
              'paged' => $paged,
              'posts_per_page' => 12,
              'post_type' => array('recruit','interview','column','event','niche','blog'),
              'post_status' => 'publish',
              'has_password' => false
            );
          ?>
          <?php
            $postslist = get_posts($args);
            foreach ($postslist as $post) : setup_postdata($post);
          ?>
            <?php get_template_part('partials/summary-grid'); ?>
          <?php endforeach; ?>
        </div>    
        <nav class="paginate-nav">
          <?php global $wp_rewrite;
            $total_posts_num = get_posts(
              array(
                'paged' => $paged,
                'posts_per_page' => -1,
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
        <?php  wp_reset_postdata();?>
      
    </div>

    <?php endwhile; else: //投稿が存在しない場合 ?>
      <p>記事がありません</p>
    <?php endif; ?>
      
    </div>    
    <?php get_footer(); ?>
