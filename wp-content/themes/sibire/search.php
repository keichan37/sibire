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
                    <span itemprop="title"><?php the_search_query(); ?>で検索した結果</span>
                  </span>
                </div>
                <h2>"<?php the_search_query(); ?>"で検索した結果: <?php echo $wp_query->found_posts; ?>件</h2>
                
                <?php if(have_posts()) : ?>
                  <ul class="">
                    <?php while(have_posts()):the_post() ?>
                      <li>
                        <a href="<?php echo get_permalink(); ?>">
                          <h3><?php the_title(); ?></h3>
                          <div class="post"> 
                            <?php if (has_post_thumbnail()) : ?>
                              <p class="postThumbnail"><?php the_post_thumbnail(); ?></p>
                            <?php endif; ?>
                          </div>
                          <?php the_excerpt(); ?>
                        </a>
                      </li>
                    <?php endwhile; ?>
                  </ul>
                <?php else: ?>
                  <div class="post">
                    <p>申し訳ございません。<br />該当するページがございません。</p>
                  </div>
                <?php endif; ?>
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
