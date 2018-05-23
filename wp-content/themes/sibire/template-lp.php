<?php /* Template Name: LP */ ?>

  <?php get_header(); ?>
    <div id="lp">
      <div class="cover">
        <h1>
          <?php get_template_part('partials/title'); ?>
        </h1>
        <a class="button" href="/registration">サービスに申し込む</a>
      </div>
      <div class="container">
        <h2><b>“</b>サービスの流れ<b>”</b><span>SERVICE</span></h2>
        <ul class="service">
          <li><b>1</b><strong>サービス申し込み</strong><p>働きたいエリアやスキルを登録</p></li>
          <li><b>2</b><strong>スキルに合った求人を紹介</strong><p>LINEやメール、やりやすい方法で連絡します</p></li>
          <li><b>3</b><strong>選考開始</strong><p>遠方の場合、Web面談などにも対応</p></li>
          <li><b>4</b><strong>内定・就業開始</strong><p>東京にこだわらず働こう！</p></li>
        </ul>
        <p>企業の紹介から、面接の調整、就業開始までサポートします。</p>
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
