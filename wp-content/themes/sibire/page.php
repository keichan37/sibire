<?php /* Template Name: 固定ページ */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="page-cover scroll-cover">
      <h1 id="page-h1"><?php the_title(); ?></h1>
      </div>
      <div class="container">
        <div class="page-wrap">
          <?php while(have_posts()): the_post(); ?>
            <section>
              <div class="page-content"><?php the_content(); //本文 ?></div>
              <?php if (is_page('sitemap')) { ?>
                <?php wp_nav_menu( array('menu' => 'sitemap-left','container' => '','menu_class' => 'sitemap' )); ?>
                <?php wp_nav_menu( array('menu' => 'sitemap-right','container' => '','menu_class' => 'sitemap' )); ?>
              <?php }; ?>
            </section>
          <?php endwhile; ?>
          <?php wp_nav_menu( array('menu' => 'page_nav','container' => 'nav' ,'menu_class' => 'page-nav' )); ?>
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
        </div>    
      </div>    
      
    </div>
    <?php get_footer(); ?>
