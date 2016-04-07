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
            <a href="/registration">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration.png" alt="登録するにゃ">
            </a>
          </div>
          <div id="news">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/news-title-2x.png" alt="最新情報"></h2>

              <?php
                $args = array(
                  'paged' => $paged,
                  'post_type' => array('recruit','column'),
                  'posts_per_page' => 3,
                  'post_status' => 'publish',
                ); ?>
              <?php query_posts( $args ); ?>
              <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); 
                   ?>
                    <?php
                      $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                    ?>

                    <a href=<?php echo get_permalink(); ?> class="news">
                      <?php if (has_post_thumbnail()): ?>
                        <div class="news-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                      <?php else: ?>
                        <div class="news-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                      <?php endif; ?>
                          <span class="tag"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                      </div>
                      <div class="news-text">
                        <b><?php echo nl2br(get_post_meta($post->ID, 'recruit', true)); ?><?php echo nl2br(get_post_meta($post->ID, 'column', true)); ?></b>
                        <p><?php the_title(); ?></p>
                        <!--<span class="news-link">詳細はこちら</span>-->
                      </div>
                    </a>
                  <?php endwhile; ?>     
              <?php else : ?>
                <p>投稿がありません</p>
              <?php endif; ?>
              <div class="clear"></div>
            </div>
          </div>
          <div id="flow">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/flow-title-2x.png" alt="私たちは、地方移住をともなう転職を支援するエージェントです。"></h2>
              <img src="<?php echo get_template_directory_uri(); ?>/images/flow.jpg" class="flow-img" alt="登録 求人情報の提供 応募 選考・面接 内定・入社 移住">
            </div>
          </div>
          <div class="registration">
            <a href="/registration" class="registration-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-cat.png" class="registration-button-img">
            </a>
          </div>
          <div id="service">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/service-title-2x.png" alt="サービスの特徴"></h2>
              <div class="service-column-wrap">
                <div class="service-column japan">
                  <h3>日本全国の求人案件</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cow.jpg">
                  <p>47都道府県の求人情報保有。<br />やりたい生活・仕事から、<br />あなたに合ったエリアの推薦も</p>
                </div>
                <div class="service-column pickup">
                  <h3>人力でピックアップ</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/rickshaw.jpg">
                  <p>地方移住専門のITエージェントが、<br />あなたにマッチした求人を<br />ピックアップしてご紹介 </p>
                </div>
                <div class="service-column cooperate">
                  <h3>自治体と協同</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/castle.jpg">
                  <p>各自治体と協同し、<br />移住支援制度や補助制度など、<br />移住に役立つ情報をご提供 </p>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div id="recruit">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/recruit-title-2x.png" alt="求人紹介"></h2>
              <p class="p">地方のユニークなIT企業を、ピックアップしてご紹介</p>

              <?php
              $args = array(
               'post_type' => 'recruit',
               'numberposts'   => 10,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
              ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <a href=<?php echo get_permalink(); ?> class="recruit">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="recruit-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                  <?php else: ?>
                    <div class="recruit-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                  <?php endif; ?>
                    <p><?php the_title(); ?></p>
                    <div class="recruit-overray"></div>
                  </div>
                </a>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
              <div class="clear"></div>
            </div>
          </div>

          <div class="registration">
            <a href="/registration" class="registration-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-cat.png" class="registration-button-img">
            </a>
          </div>

          <?php /* ?>
          トヨさん作るまでコメントアウトやで
          <div id="column">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/column-title-2x.png" alt="コラム"></h2>
              <p class="p">テキストテキストテキスト</p>

              <?php
              $args = array(
               'post_type' => 'column',
               'numberposts'   => 5,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
              ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <a href=<?php echo get_permalink(); ?> class="column">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="column-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                  <?php else: ?>
                    <div class="column-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                  <?php endif; ?>
                    <p><?php the_title(); ?></p>
                    <div class="column-overray"></div>
                  </div>
                </a>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
              <div class="clear"></div>
            </div>
          </div>
          <?php */ ?>

          <div id="member">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/member-title-2x.png" alt="メンバー"></h2>
              <div class="member-wrap">
                <div class="toyota">
                  <a href="/member" class="member-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/toyota.jpg" alt="CEO 豊田昌代">
                  </a>
                </div>
                <div class="midori">
                  <a href="/member" class="member-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/midori.jpg" alt="COO 鈴木翠">
                  </a>
                </div>
                <div class="clear"></div>
              </div>
              <div class="balloon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/balloon-2x.png" alt="地方をオモシロく、シビレる場所にしていきたい。私たちはシビレる人、地方を増やします。">
              </div>

            </div>
          </div>

        </div>
        <?php get_footer(); ?>
    </div>

  </body>
</html>
