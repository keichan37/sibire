<?php /* Template Name: フロントページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container"></div>
      <div class="common-cover"></div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => array('recruit','interview','offer','column','event','niche'),
                'posts_per_page' => 27,
                'post_status' => 'publish',
                'has_password' => false,
              ); ?>
            <?php query_posts( $args ); ?>
            <?php while (have_posts()) : the_post(); 
             ?>
              <?php get_template_part('partials/common-grid'); ?>
            <?php endwhile; ?>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>

          </div>
        </div>    
        <div class="common-right">
          <div class="common-recruit-wrap">
            <ul>
              <?php
                $area_name = 'hokkaido';
                $area_title = '北海道';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'tohoku';
                $area_title = '東北';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'kanto';
                $area_title = '関東';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'hokuriku';
                $area_title = '北陸・甲信越';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'tokai';
                $area_title = '東海';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'kansai';
                $area_title = '関西';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'chugoku';
                $area_title = '中国';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'shikoku';
                $area_title = '四国';
                get_template_part('partials/area','map');
              ?>
              <?php
                $area_name = 'kyushu';
                $area_title = '九州・沖縄';
                get_template_part('partials/area','map');
              ?>
            </ul>
          </div>
          <?php get_template_part('partials/category'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
