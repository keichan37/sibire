<?php /* Template Name: エリアテンプレート*/ ?>
  <?php get_header(); //ヘッダー ?>
        <div id="post">
          <div id="contents">
            <div class="container">
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

                <div class="area-wrap" id="area-wrap">
                  <ul>
                    <!-- 北海道 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'hokkaido',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="hokkaido">
                          <a href="#hokkaido" class="scroll">北海道</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 東北 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'tohoku',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="tohoku">
                          <a href="#tohoku" class="scroll">東北</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 関東 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'kanto',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="kanto">
                          <a href="#kanto" class="scroll">関東</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 北陸・甲信越 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'hokuriku',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="hokuriku">
                          <a href="#hokuriku" class="scroll">北陸・甲信越</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 東海 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'toukai',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="toukai">
                          <a href="#toukai" class="scroll">東海</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 関西 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'kansai',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="kansai">
                          <a href="#kansai" class="scroll">関西</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 中国 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'chugoku',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="chugoku">
                          <a href="#chugoku" class="scroll">中国</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 四国 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'shikoku',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="shikoku">
                          <a href="#shikoku" class="scroll">四国</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                    <!-- 九州・沖縄 -->
                    <?php
                      $args = array(
                           'post_type' => array('recruit','offer'),
                           'meta_key' => 'area',
                           'meta_value' => 'kyushu',
                           'meta_compare'=>'LIKE'
                      ); ?>
                    <?php query_posts( $args ); ?>
                      <?php if (have_posts()) : ?>
                        <li class="kyushu">
                          <a href="#kyushu" class="scroll">九州・沖縄</a>
                        </li>
                      <?php endif; ?>
                    <?php wp_reset_query();?>

                  </ul>
                </div>

                <div class="area">
                <!-- 北海道 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'hokkaido', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="hokkaido">北海道</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 東北 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'tohoku', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="tohoku">東北</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 関東 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'kanto', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="kanto">関東</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 北陸・甲信越 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'hokuriku', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="hokuriku">北陸・甲信越</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 東海 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'toukai', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="toukai">東海</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 関西 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'kansai', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="kansai">関西</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 中国 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'chugoku', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="chugoku">中国</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 四国 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'shikoku', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="shikoku">四国</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

                <div class="area">
                <!-- 九州・沖縄 -->
                <?php
                  $args = array(/* 配列（$args）に複数の引数を追加 */
                       'posts_per_page' => -1,
                       'post_type' => array('recruit','offer'),
                       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                       'meta_value' => 'kyushu', /* カスタムフィールド値（meta_value)  */
                       'meta_compare'=>'LIKE'
                  ); ?>

                <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

                  <?php if (have_posts()) : ?>
                    <a class="scroll-map" href="#area-wrap">エリア選択に戻る</a>
                    <h2 id="kyushu">九州・沖縄</h2>
                    <ul class="cpt-ui-list"> 
                    <?php while (have_posts()) : the_post(); ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()): ?>
                              <?php the_post_thumbnail(array(70, 70)); ?>
                            <?php endif; ?>

                              <?php get_template_part('tag'); //タグ ?>
                              <h3><?php the_title(); ?></h3>
                              <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>

                        </a>
                      </li>
                    <?php endwhile; ?>     
                    </ul>
                  <?php endif; ?>
                <?php wp_reset_query();?>
                </div>

              </div>

              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
            </div>
          </div> 
        </div>
        <?php get_footer(); //フッター ?>
    </div>
  </body>
</html>
