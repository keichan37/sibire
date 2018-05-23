<?php /* Template Name: LP */ ?>

  <?php get_header(); ?>
    <div id="lp">
      <div class="cover">
        <h1>
          <?php get_template_part('partials/title'); ?>
        </h1>
        <div class="balloon balloon1">収入を落とさずに<br />地方で働きたい</div>
        <div class="balloon balloon2">多様な働き方を<br />実践したい！</div>
        <div class="balloon balloon3">東京以外の<br />魅力的な求人に<br />出会いたい！</div>
        <a class="button" href="/registration">サービスに申し込む</a>
      </div>
      <div class="container">
        <h2><b>“</b>サービスの流れ<b>”</b><span>SERVICE</span></h2>
        <ul class="service">
          <li>
            <h3><b>1</b><strong>サービス申し込み</strong></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/sp.jpg" alt="スマホ">
            <p>働きたいエリアやスキルを登録</p>
          </li>
          <li>
            <h3><b>2</b><strong>スキルに合った求人を紹介</strong></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/lang.jpg" alt="言語">
            <p>LINEやメール、やりやすい方法で連絡します</p>
          </li>
          <li>
            <h3><b>3</b><strong>選考開始</strong></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/resume.jpg" alt="履歴書">
            <p>遠方の場合、Web面談などにも対応</p>
          </li>
          <li>
            <h3><b>4</b><strong>内定・就業開始</strong></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/keyboard.jpg" alt="キーボード">
            <p>東京にこだわらず働こう！</p>
          </li>
        </ul>
        <p class="message">企業の紹介から、面接の調整、就業開始までサポートします。</p>
        <h2><b>“</b>3つのメリット<b>”</b><span>MERIT</span></h2>
        <ul class="merit">
          <li>働きたいエリアの求人を探してもらえる</li>
          <li>地方でしかできない魅力的な求人も紹介。「仕事」から住む場所を決めてもOK!</li>
          <li>東京にこだわらず働く「OFF TOKYO」をテーマとしたイベントを優先的にご案内</li>
        </ul>
        <a class="button" href="/registration">サービスに申し込む</a>
        <h2><b>“</b>トピック<b>”</b><span>TOPIC</span></h2>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => array('recruit','interview','column','event','niche','blog'),
              'posts_per_page' => 3,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
          <?php while (have_posts()) : the_post(); 
           ?>
            <?php get_template_part('partials/common-grid'); ?>
          <?php endwhile; ?>

          <?php wp_reset_query();?>
        <a class="button" href="/registration">全て見る</a>
        <h2><b>“</b>sibire利用者の声<b>”</b><span>VOICE</span></h2>
      </div>
      
    </div>
    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
