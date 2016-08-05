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
              <div class="owl-carousel">
                <?php
                  $args = array(
                    'paged' => $paged,
                    'post_type' => array('recruit','interview','offer','column','event'),
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
                          <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
                          <p><?php the_title(); ?></p>
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

          <div id="offers">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/offers-title-2x.png" alt="シビレる求人"></h2>

              <?php
              $args = array(
               'post_type' => array('recruit','offer'),
               'numberposts'   => 10,
               'post_status' => 'publish',
               'has_password' => false,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
              ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <a href=<?php echo get_permalink(); ?> class="offers">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="offers-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                  <?php else: ?>
                    <div class="offers-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                  <?php endif; ?>
                    <p><?php the_title(); ?></p>
                    <div class="offers-overray"></div>
                  </div>
                </a>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
              <div class="clear"></div>
              <a class="more-link" href="/recruit">もっと見る&nbsp;&gt;</a>
              <div class="clear"></div>
            </div>
          </div>

          <?php /* ?>
          <div id="recruit">
            <div class="container">
              <div class="edogawatama"><a href="/edogawatama"><img src="<?php echo get_template_directory_uri(); ?>/images/recruit2-edogawatama-2x.png" alt="“江戸川タマが行く！”"></a></div>
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/recruit2-title-2x.png" alt="シビレる企業訪問"></h2>
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
              <a class="more-link" href="/recruit">もっと見る&nbsp;&gt;</a>
              <div class="clear"></div>
            </div>
          </div>
          <?php */ ?>

          <div class="registration">
            <a href="/registration" class="registration-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
              <img src="<?php echo get_template_directory_uri(); ?>/images/registration-cat.png" class="registration-button-img">
            </a>
          </div>

          <div id="interviews">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/interview2-title-2x.png" alt="シビレビト発見伝"></h2>

              <?php
              $args = array(
               'post_type' => 'interview',
               'numberposts'   => 5,
               'post_status' => 'publish',
               'has_password' => false,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
              ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <a href=<?php echo get_permalink(); ?> class="interviews">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="interviews-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                  <?php else: ?>
                    <div class="interviews-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                  <?php endif; ?>
                    <p><?php the_title(); ?></p>
                    <div class="interviews-overray"></div>
                  </div>
                </a>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
              <div class="clear"></div>
              <a class="more-link" href="/interview">もっと見る&nbsp;&gt;</a>
              <div class="clear"></div>
            </div>
          </div>


          <div id="columns">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/columns-title-2x.png" alt="シビレる小ネタ"></h2>

              <?php
              $args = array(
               'post_type' => 'column',
               'numberposts'   => 5,
               'post_status' => 'publish',
               'has_password' => false,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
              ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                ?>
                <a href=<?php echo get_permalink(); ?> class="columns">

                  <?php if (has_post_thumbnail()): ?>
                    <div class="columns-img" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);">
                  <?php else: ?>
                    <div class="columns-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/no-image-2x.png);">
                  <?php endif; ?>
                    <p><?php the_title(); ?></p>
                    <div class="columns-overray"></div>
                  </div>
                </a>
              <?php 
              endforeach; 
              wp_reset_postdata();
              ?>
              <div class="clear"></div>
              <a class="more-link" href="/column">もっと見る&nbsp;&gt;</a>
              <div class="clear"></div>
            </div>
          </div>

          <div class="business">
            <a href="/business" class="business-button">
              <img src="<?php echo get_template_directory_uri(); ?>/images/business-text-2x.png" alt="法人の方はこちら" class="business-button-text">
              <img src="<?php echo get_template_directory_uri(); ?>/images/business-person.png" class="business-button-img">
            </a>
          </div>

          <div id="member">
            <div class="container">
              <h2><img src="<?php echo get_template_directory_uri(); ?>/images/member-title-2x.png" alt="メンバー"></h2>
              <div class="member-wrap">
                <div class="toyota">
                  <a href="/member#toyota" class="member-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/toyota.jpg" alt="CEO 豊田昌代">
                  </a>
                </div>
                <div class="midori">
                  <a href="/member#midori" class="member-link">
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
          <div class="clear"></div>
          
        </div>
        <?php get_footer(); ?>
    </div>

  </body>
</html>
