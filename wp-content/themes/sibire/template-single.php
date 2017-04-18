<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <?php while(have_posts()): the_post(); ?>
            <section>
              <h1><?php the_title(); ?></h1>
              <div class="single-content"><?php the_content(); //本文 ?></div>
            </section>
          <?php endwhile; ?>
        </div>    
      </div>    
      
    </div>
    <div class="sns-footer">
      <div class="sns-footer-inner">
        <a class="line" href="https://line.me/R/ti/p/%40urv2252f" target="_blank">LINE</a>
        <a class="wantedly" href="https://www.wantedly.com/companies/sibire" target="_blank">Wantedly</a>
        <a class="facebook" href="https://www.facebook.com/sibireinc" target="_blank">Facebook</a>
        <a class="twitter" href="https://twitter.com/sibire_inc" target="_blank">Twitter</a>
      </div>
    </div>
    <?php get_footer("lp"); //フッターリニューアル?>