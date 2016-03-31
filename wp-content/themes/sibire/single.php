  <?php get_header(); ?>
      <div id="contents">
        <div class="container">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">  <a href="<?php echo home_url(); ?>" title="Home" itemprop="url"> <span itemprop="title"><i class="fa fa-home"></i>トップページ</span> </a> &gt; </span>
            <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">&nbsp;<span itemprop="title" class="bcTitle"><?php the_title(); ?></span></span>
            <h1><?php the_title(); ?></h1>
            <div class="articleDate"><span><i class="fa fa-calendar"></i>
            <time class="entry-date" datetime="<?php the_time('c') ;?>">
              <?php the_time('Y年m月d日') ;?>
            </time>
            <?php the_content(); //本文 ?>
            <?php wp_link_pages('before=<div class="page-numbers">&after=</div>&next_or_number=number&pagelink=<span class="numbers">%</span>'); ?>
            <?php endwhile; else: ?>
              <p>記事がありません</p>
            <?php endif; ?>
            <?php previous_post_link(); ?>
            <?php next_post_link(); ?>
        </div>
      </div>
      <?php get_footer(); ?>
    </div>
  </body>
</html>
