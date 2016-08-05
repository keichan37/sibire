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

                  <?php if (is_page() && $post->post_parent): //子ページ時に親ページへのリンクを表示 ?>
                    <a href="<?php echo get_page_link($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
                  <?php else: ?>
                    <div class="area-wrap">
                      <ul>
                      <?php
                        $child_posts = query_posts( 'numberposts=-1&order=ASC&orderby=post_title&post_type=page&post_parent=' . $post->ID );
                        if ( $child_posts ) {
                            foreach ( $child_posts as $child ) {
                                $c_title = apply_filters( 'the_title', $child->post_title );
                                $c_permalink = apply_filters( 'the_permalink', get_permalink( $child->ID ) );
                                $c_image_id = get_post_thumbnail_id($child->ID);
                                $c_image_url = wp_get_attachment_image_src($c_image_id, '', true);
                                $c_select = get_field('prefecture_select', $child->ID);
                      ?>
                      <li class="prefecture <?php echo $c_select; ?>">
                        <a href="<?php echo $c_permalink; ?>">
                          <?php echo $c_title; ?>
                        </a>
                      </li>
                      <?php }}?>
                      </ul>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/area/<? $select = get_field('select_area'); if($select){ ?><? echo $select; ?><? } ?>.png" alt="<? $select = get_field('select_area'); if($select){ ?><? echo $select; ?><? } ?>">
                    </div>
                    <?php endif; ?>


                  <ul class="cpt-ui-list"> 

                  <?php if (is_page() && $post->post_parent):?>
                    <?php
                      $c_select = get_field('prefecture_select', $child->ID);
                      $args = array(/* 配列（$args）に複数の引数を追加 */
                           'post_type' => 'offer', /* 表示する投稿タイプを指定 */
                           'meta_key' => 'prefecture', /* カスタムフィールドキー（meta_key） */
                           'meta_value' => $c_select, /* カスタムフィールド値（meta_value)  */
                           'meta_compare'=>'LIKE'
                      ); ?>
                  <?php else: ?>
                    <?php
                      $args = array(/* 配列（$args）に複数の引数を追加 */
                           'post_type' => 'offer', /* 表示する投稿タイプを指定 */
                           'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
                           'meta_value' => $select, /* カスタムフィールド値（meta_value)  */
                           'meta_compare'=>'LIKE'
                      ); ?>
                  <?php endif; ?>

                    <?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?><!-- ループの開始 -->
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
