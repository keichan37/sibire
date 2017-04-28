<?php /* ?>
title: 一覧ページ
description: 各投稿の一覧ページです
<?php */ ?>

<?php /* Template Name: 一覧ページ*/ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post">
          <div id="contents">
            <div class="container">
              <div id="main-content">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //投稿が存在する場合 ?>
                  <?php
                    $category = get_the_category();
                    $cat_id   = $category[0]->cat_ID;
                    $cat_name = $category[0]->cat_name;
                    $cat_name2 = $category[1]->cat_name;
                    $cat_slug = $category[0]->category_nicename;
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                  ?>
                  <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                  <time class="entry-date" datetime="<?php the_time('c') ;?>">
                    <?php the_time('Y年n月j日') ;?>
                  </time>
                  <h1 class="post-h1"><?php the_title(); ?></h1>
                  <div class="post-name">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>
                  <ul class="post-list"> 
                    <?php
                    $args = array(
                      'posts_per_page' => -1,
                      'post_type' => array($cat_name,$cat_name2),
                      'post_status' => 'publish',
                      'has_password' => false,
                    );
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) : setup_postdata($post);
                    ?>
                      <li class="post-list-li">
                        <a href=<?php echo get_permalink(); ?>>
                          <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(array(100, 100)); ?>
                          <?php endif; ?>

                            <?php get_template_part('tag'); //タグ ?>
                            <time><?php the_date(); ?></time>
                            <h3><?php the_title(); ?></h3>
                            <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>
                        </a>
                      </li>
                    <?php 
                    endforeach; 
                    wp_reset_postdata();
                    ?>
                  </ul>
                  <div class="clear"></div>

                <?php /* ?>
                  <div class="ce">
                    <?php $numposts = $wpdb->get_var("SELECT count(*) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '$cat_name'");
                    if (0 < $numposts)
                      $numposts = number_format($numposts);
                    echo '全'. $numposts .'件';
                    ?>
                  </div>
                <?php */ ?>

                <?php endwhile; else: //投稿が存在しない場合 ?>
                  <p>記事がありません</p>
                <?php endif; ?>


              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <?php get_footer(); //フッター ?>
