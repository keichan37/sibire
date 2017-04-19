<?php /* ?>
title: 検索結果
description: 検索結果が表示されます
<?php */ ?>

  <?php get_header(); //ヘッダー ?>
                <div class="breadcrumb">
                  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a href="<?php echo home_url(); ?>" itemprop="url">
                      <span itemprop="title">TOP</span>
                    </a>&gt; 
                  </span>
                  <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <span itemprop="title">検索結果</span>
                  </span>
                </div>

                <?php
                  $searchCat = $_GET['cat'];
                  $searctTag = $_GET['tag'];
                 
                  $searchCatObj = get_term_by( 'ID', $searchCat, 'category');
                  $searchTagObj = get_term_by( 'slug', $searctTag, 'post_tag');
                 
                  $searchCatStr = $searchCatObj->name;
                  $searchTagStr = $searchTagObj->name;
                 
                  $found_cnt = $wp_query->post_count;
                ?>

                <?php if ($searchCatObj) echo 'カテゴリー: '.$searchCatStr; ?>
                <?php if ($searchTagObj) echo 'タグ: '.$searchTagStr; ?>
                  <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
                  <?php } else { ?>
                    <h1 class="post-h1"><?php the_search_query(); ?>で検索した結果: <?php echo $wp_query->found_posts; ?>件</h1>
                  <?php } ?>
                <div class="post-name">
                </div>
                <?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
                  <p>検索条件が入力されていません。</p>
                <?php } else { ?>
                <?php if(have_posts()) : ?>
                  <ul class="cpt-ui-list">
                    <?php while(have_posts()):the_post() ?>
                      <li>
                        <a href=<?php echo get_permalink(); ?>>
                          <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(array(70, 70)); ?>
                          <?php else: ?>
                            <img width="70" height="70" src="<?php echo get_template_directory_uri(); ?>/images/no-image256.png" alt="画像はありません">
                          <?php endif; ?>

                            <?php get_template_part('tag'); //タグ ?>
                            <h3><?php the_title(); ?></h3>
                            <?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?>
                        </a>
                      </li>
                    <?php endwhile; ?>
                 <?php else : ?>
                  <p>検索条件にヒットした記事がありませんでした。</p>
                <?php endif; ?> </ul>
                <?php echo $wp_query->found_posts; ?>件
              <?php } ?>
              </div>

            </div>
          </div>
        </div>
        <?php get_footer(); //フッター ?>
    </div>
  </body>
</html>
