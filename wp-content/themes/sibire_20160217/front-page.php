
<html>
  <body style="text-align: center; margin: 0; padding: 0;">
  <img src="/wp-content/uploads/2016/02/comingsoon.png"/>
<?php /* ?>

  <?php get_header(); ?>
    <body>
      <div id="wrap">
        <header id="header">
          <div class="container">
            <div class="logo">
              <a href="javascript:void(0);">シビレ株式会社</a>
            </div>
          </div>
        </header>
        <div id="contents">
          <div class="container">
            <div class="post">
            <h2>投稿一覧</h2>
              <?php
                $args = array(
                  'paged' => $paged,
                  'posts_per_page' => 5
              ); ?>
              <?php query_posts( $args ); ?>
              <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); 
                   ?>
                  <div class="post">
                      <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                      <?php else: // サムネイルを持っていないときの処理 ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="80" height="60" />
                      <?php endif; ?>
                      <p><span class="ft-blue"><?php the_title(); ?></span><?php the_time("Y年m月j日"); ?><br />
                      <?php echo mb_strimwidth(strip_tags($post-> post_content), 0, 80, "...", "UTF-8"); ?><span class="ft-blue"><a href=<?php echo get_permalink(); ?>>続きを読む</a></span>
                      </p>
                  </div>
                  <?php endwhile; ?>     
              <?php else : ?>
                <p>投稿がありません</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php get_footer(); ?>
    </div>

<?php */ ?>
  </body>
</html>
