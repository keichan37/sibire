  <?php get_header(); ?>
        <div id="company">
          <div id="contents">
            <div class="container">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1><?php the_title(); ?></h1>
                <div class="company-name">
                  <? $txt = get_field('recruit'); if($txt){ ?><? echo $txt; ?> <? } ?>
                </div>
                <div class="company-img"><img src="/wp-content/uploads/2016/03/galileoscope.jpg"></div>
                <div class="articleDate"><span><i class="fa fa-calendar"></i>
                <ul class="tag">
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<li>' . $tag->name . '</li>';
                      }
                    }
                  ?>
                </ul>
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
        </div>
        <?php get_footer(); ?>
    </div>
  </body>
</html>
