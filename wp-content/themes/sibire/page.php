<?php /* Template Name: 固定ページ */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="container">
        <div class="page-wrap">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <?php wp_nav_menu( array('menu' => 'page_nav','container' => 'nav' ,'menu_class' => 'page-nav' )); ?>
          <?php while(have_posts()): the_post(); ?>
            <section>
              <h1><?php the_title(); ?></h1>
              <div class="page-content"><?php the_content(); //本文 ?></div>
              <?php if (is_page('sitemap')) { ?>
                <?php wp_nav_menu( array('menu' => 'global_menu','container' => '','menu_class' => 'sitemap' )); ?>
                <?php wp_nav_menu( array('menu' => 'sitemap','container' => '','menu_class' => 'sitemap' )); ?>
              <?php }; ?>
            </section>
          <?php endwhile; ?>
        </div>    
      </div>    
      
    </div>
    <?php get_footer(); ?>
