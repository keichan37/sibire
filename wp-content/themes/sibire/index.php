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
          <?php if ( have_posts() ) : ?>

            <?php if ( is_home() && ! is_front_page() ) : ?>
              <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
              </header>
            <?php endif; ?>

            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
              get_template_part( 'content', get_post_format() );

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
              'next_text'          => __( 'Next page', 'twentyfifteen' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
            ) );

          // If no content, include the "No posts found" template.
          else :
            get_template_part( 'content', 'none' );

          endif;
          ?>

          <?php
            $args = array(
                 'category_name' => 'blog',
                 'paged' => $paged,
                 'posts_per_page' => 5
            ); ?>
            <?php query_posts( $args ); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); 
                /* ループ開始 */ ?>
                <div class="post">
                    <p><span class="ft-blue"><?php the_title(); ?></span>　<?php the_author_nickname(); ?>　<?php the_time("Y年m月j日"); ?><br />
                    <?php echo mb_strimwidth(strip_tags($post-> post_content), 0, 80, "...", "UTF-8"); ?><span class="ft-blue"><a href=”<?php echo get_permalink(); ?>”>続きを読む</a></span>
                    </p>
                </div>
                <?php endwhile; ?>     
            <?php else : ?>
                    <p>記事がありません</p>
            <?php endif; ?>

        </div>
      </div>
      <?php get_footer(); ?>
    </div>
  </body>
</html>
