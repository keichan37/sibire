<?php /* ?>
title: 固定ページフォーマット
description: このファイルが基本フォーマットになる
<?php */ ?>

  <?php get_header(); ?>
        <div id="contents">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page-cover">
              <div class="container">
                <h1><?php the_title(); ?><?php show_page_number(); ?></h1>
              </div>
            </div>
            <div class="container">
              <div id="main-content">
                <?php get_template_part('breadcrumb'); ?>
                <?php the_content(); //本文 ?>
              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
            <?php endwhile; else: ?>
              <p>記事がありません</p>
            <?php endif; ?>
          </div>
        </div>
        <?php get_footer(); ?>
    </div>

  </body>
</html>
