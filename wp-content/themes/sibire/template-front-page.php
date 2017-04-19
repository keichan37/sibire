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
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
                ?>

                <a href=<?php echo get_permalink(); ?> class="common-grid <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>">
                  <div class="common-grid-img"
                    <?php if (has_post_thumbnail()): ?>
                      style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"
                    <?php endif; ?>
                  >
                  </div>
                  <h3><?php the_title(); ?></h3>
                  <div class="common-grid-text-wrap">
                    <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
                    <time class="common-grid-time"><?php the_date('Y.m.d'); ?></time>
                  </div>
                  <span class="common-grid-tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                </a>
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
          <div class="common-category-wrap">
            <h2 class="common-category-title">カテゴリ一覧</h2>
            <ul class="common-category">
              <?php
                $args = array(
                  'orderby' => 'order',
                  'order' => 'ASC',
                  'exclude' => '1' // 「未設定」カテゴリを除外

                );
                $cat_all = get_categories($args);
                foreach($cat_all as $value): ?>
                  <li><a href="<?php echo get_category_link($value); /* カテゴリへのリンク */ ?>"><?php echo esc_html($value->name); /* カテゴリ名 */ ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
