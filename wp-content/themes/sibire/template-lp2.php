<?php /* Template Name: 新フロントページ */ ?>

  <?php get_header(); ?>
    <div id="lp">

      <div class="cover scroll-cover">
        <h1 class="rocknroll">
          エンジニア×地方特化型<br />転職支援サービス
        </h1>
      </div>
      <div class="container">
        <div class="section">
          <h2><b>“</b>サービスの流れ<b>”</b><span>SERVICE</span></h2>
          <ul class="service">
            <li>
              <h3><b>1</b><strong>求人を探す</strong></h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/sp.jpg" alt="スマホ">
              <p>気になる求人を探してエントリー</p>
            </li>
            <li>
              <h3><b>2</b><strong>スキルに合った求人を紹介</strong></h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/lang.jpg" alt="言語">
              <p>求人を探してほしい場合は、LINEで連絡</p>
            </li>
            <li>
              <h3><b>3</b><strong>選考開始</strong></h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/resume.jpg" alt="履歴書">
              <p>面接日程や面接方法の調整をシビレが代行</p>
            </li>
            <li>
              <h3><b>4</b><strong>内定！就業開始</strong></h3>
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-lp/keyboard.jpg" alt="キーボード">
              <p>好きな場所で働こう！</p>
            </li>
          </ul>
          <p class="message"><b class="caret"></b>企業の紹介から、面接の調整、就業開始までサポートします。</p>
        </div>
        <div class="section" id="job">
          <h2><b>“</b>求人情報<b>”</b><span>JOB</span></h2>
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => 'recruit',
                'posts_per_page' => 12,
                'tag__not_in' => 3762,
                'post_status' => 'publish',
                'has_password' => false,
              ); ?>
            <?php query_posts( $args ); ?>
              <div class="summary-grid-wrap">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('partials/summary-grid'); ?>
            <?php endwhile; ?>
              </div>

            <?php wp_reset_query();?>
          <a class="button button-small" href="/category/recruit">全て見る</a>
        </div>
        <div class="section" id="topic">
          <h2><b>“</b>トピック<b>”</b><span>TOPIC</span></h2>
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => array('recruit','interview','column','event','niche','blog'),
                'posts_per_page' => 4,
                'tag__in' => 4875,
                'post_status' => 'publish',
                'has_password' => false,
              ); ?>
            <?php query_posts( $args ); ?>
              <div class="summary-grid-wrap">
            <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('partials/summary-grid'); ?>
            <?php endwhile; ?>
              </div>

            <?php wp_reset_query();?>
        </div>

      </div>
      
    </div>
    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
