<?php /* Template Name: エリアテンプレート*/ ?>
  <?php get_header(); //ヘッダー ?>
        <div id="post" class="template-area">
          <div id="contents">
            <div class="container">
              <div class="relative">
                <div id="main-content">
                  <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                  <?php get_template_part('tag'); //タグ ?>
                  <time class="entry-date" datetime="<?php the_time('c') ;?>">
                    <?php the_time('Y年n月j日') ;?>
                  </time>
                  <h1 class="post-h1"><?php the_title(); ?></h1>
                  <div class="post-name">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>

                  <div class="inner-padding inner-margin">

                    <!-- partials/area-list.phpに引数を渡して出力 -->
                    <?php
                      $area_name = 'hokkaido';
                      $area_title = '北海道';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'tohoku';
                      $area_title = '東北';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'kanto';
                      $area_title = '関東';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'hokuriku';
                      $area_title = '北陸・甲信越';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'tokai';
                      $area_title = '東海';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'kansai';
                      $area_title = '関西';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'chugoku';
                      $area_title = '中国';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'shikoku';
                      $area_title = '四国';
                      get_template_part('partials/area','list');
                    ?>
                    <?php
                      $area_name = 'kyushu';
                      $area_title = '九州・沖縄';
                      get_template_part('partials/area','list');
                    ?>

                  </div>
                </div>

                <div id="sidebar">
                  <div class="e-fixed-box fixed-box-area-wrap"></div>
                  <div class="fixed-box r-fixed-box-area fixed-area-box">
                    <div class="area-map-wrap" id="area-map-wrap">
                      <ul>
                        <!-- partials/area-map.phpに引数を渡して出力 -->
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

                    <a class="recruit-registration" href="/registration"><span class="icon-head"></span>登録する</a>
                    <div class="recruit-registration-window"><b class="caret"></b>イベント情報や最新のお知らせを<br />優先的にご案内します。<span class="icon-mail"></span></div>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div> 
        </div>
        <?php get_footer(); //フッター ?>
