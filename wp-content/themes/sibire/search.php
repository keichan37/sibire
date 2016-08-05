<?php /* ?>
title: 検索結果
description: 検索結果が表示されます
<?php */ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post">
          <div id="contents">
            <div class="container">
              <div id="main-content">
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
                <h1 class="post-h1"><?php the_search_query(); ?>で検索した結果: <?php echo $wp_query->found_posts; ?>件</h1>
                <div class="post-name">
                </div>
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
                  </ul>
                <?php else: ?>
                  <div class="post">
                    <p>申し訳ございません。<br />該当するページがございません。</p>
                  </div>
                <?php endif; ?>
                <?php echo $wp_query->found_posts; ?>件
              </div>

              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <div class="registration">
          <a href="/registration" class="registration-button">
            <img src="<?php echo get_template_directory_uri(); ?>/images/registration-text-2x.png" alt="登録する" class="registration-button-text">
          </a>
          <p>イベント情報や最新のお知らせを優先的にご案内します。</p>
        </div>
        <?php get_footer(); //フッター ?>
    </div>
  </body>
</html>
