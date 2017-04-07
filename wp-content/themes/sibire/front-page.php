  <?php get_header(); ?>
        <div id="contents">
          <div id="gif">
            <div class="container">
              <h1 id="message"><img src="<?php echo get_template_directory_uri(); ?>/images/midashi-2x.png" alt="エンジニアよ、地方でシビレろ"></h1>
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/37.gif"
              >
            </div>
          </div>
          <div id="registration">
            <a href="/service">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration.png" alt="東京を脱出するニャ！">
            </a>
          </div>
          <?php dynamic_sidebar('top-banner-1'); ?>

          <?php /* ?>最新情報<?php */ ?>
          <div id="news">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/news-title-2x.png" alt="最新情報"></h2>
              <div class="owl-carousel">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => array('recruit','interview','offer','column','event','niche'),
                    'posts_per_page' => 15,
                    'post_status' => 'publish',
                    'has_password' => false,
                  ); ?>
                <?php query_posts( $args ); ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); 
                     ?>
                      <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                      ?>

                      <a href=<?php echo get_permalink(); ?> class="news item">
                        <?php if (has_post_thumbnail()): ?>
                          <div class="news-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                        <?php else: ?>
                          <div class="news-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                        <?php endif; ?>
                            <span class="tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                        </div>
                        <div class="news-text">
                          <?php if ( in_array(get_post_type(), array('offer','recruit')) ): //シビレる求人に表示 ?>
                            <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
                            <p><?php the_title(); ?></p>
                          <?php else: ?>
                            <b><?php the_title(); ?></b>
                            <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
                          <?php endif; ?>
                        </div>
                      </a>
                    <?php endwhile; ?>     
                <?php else : ?>
                  <p>投稿がありません</p>
                <?php endif; ?>
              </div>
              <div class="clear"></div>
            </div>
          </div>

          <?php /* ?>シビレビト<?php */ ?>
          <div id="interviews">
            <div class="container">
              <h2><a href="interview"><img src="<?php echo get_template_directory_uri(); ?>/images/interview2-title-2x.png" alt="シビレビト発見伝"></a></h2>

              <?php
                $post_type = 'interview';
                $post_link = 'interview';
                get_template_part('partials/grid','list');
              ?>
            </div>

          </div>

          <?php /* ?>ニッチ<?php */ ?>
          <div id="niche" class="niche-banner">
            <div class="container">
              <a href="/niche"><img src="<?php echo get_template_directory_uri(); ?>/images/front-page/niche_banner.jpg" alt="シビレるニッチ"></a>
            </div>
          </div>

          <?php /* ?>小ネタ<?php */ ?>
          <div id="columns">
            <div class="container">
              <h2><a href="/column"><img src="<?php echo get_template_directory_uri(); ?>/images/columns-title-2x.png" alt="シビレる小ネタ"></a></h2>

              <?php
                $post_type = 'column';
                $post_link = 'column';
                get_template_part('partials/grid','list');
              ?>

            </div>
          </div>

          <?php /* ?>イベント<?php */ ?>
          <div id="event">
            <div class="container">
              <h2><a href="/event"><img src="<?php echo get_template_directory_uri(); ?>/images/event-title-2x.png" alt="シビレる集"></a></h2>

              <?php
                $post_type = 'event';
                $post_link = 'event';
                get_template_part('partials/grid','list');
              ?>

            </div>
          </div>
          <div id="banner">
            <a href="/service">
              <img src="<?php echo get_template_directory_uri(); ?>/images/service_banner.jpg" alt="最適な環境で、最高の技術を sibireは東京にこだわらず働きたいエンジニアのための転職を支援するサービスです。">
            </a>
          </div>

          <?php /* ?>求人<?php */ ?>
          <div id="offers">
            <div class="container">
              <h2><a href="/recruit"><img src="<?php echo get_template_directory_uri(); ?>/images/offers-title-2x.png" alt="シビレる求人"></a></h2>
              <?php
                $post_type = array('recruit','offer');
                $post_link = 'recruit';
                get_template_part('partials/grid','list');
              ?>
            </div>
          </div>


          <div class="registration">
            <?php get_template_part('partials/registration');?>
          </div>

          <div class="line">
            <h3>LINE@始めました</h3>
            <a href="https://line.me/R/ti/p/%40urv2252f" target="_blank"><img height="36" border="0" alt="友だち追加" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png"></a>
          </div>

          <?php /* ?>メンバー<?php */ ?>
          <div id="member">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/member-title-2x.png" alt="メンバー"></h2>
              <div class="member-image"><?php dynamic_sidebar('member-banner'); ?></div>
              <div class="balloon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/balloon-2x.png" alt="地方をオモシロく、シビレる場所にしていきたい。私たちはシビレる人、地方を増やします。">
              </div>

            </div>
          </div>
          <div class="clear"></div>

          <div class="business">
            <a href="/business" class="business-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/business-text-2x.png" alt="法人の方はこちら" class="business-button-text">
              <img src="<?php echo get_template_directory_uri(); ?>/images/business-person.png" class="business-button-img">
            </a>
          </div>

        </div>
        <?php get_footer(); ?>
