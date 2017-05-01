<?php /* Template Name: 404ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container">
        <div class="page-wrap">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <section>
            <h1>ページが見つかりませんでした</h1>
            <div class="page-content">あなたがアクセスしようとしたページは削除されたかURLが変更されています。</div>
          </section>
        </div>    
      </div>    
      
    </div>
    <?php get_footer("lp"); //フッターリニューアル?>
