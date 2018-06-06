<?php /* Template Name: 404ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="summary" class="error">
      <div class="summary-cover">
        <div class="container">
          <h1>ページが見つかりませんでした</h1>
          <div class="page-content">あなたがアクセスしようとしたページは削除されたかURLが変更されています。</div>
        </div>    
      </div>    
      <?php get_search_form(); ?>
      
    </div>
    <?php get_footer("lp"); //フッターリニューアル?>
