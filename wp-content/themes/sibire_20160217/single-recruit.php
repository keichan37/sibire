  <?php get_header(); ?>
      <div id="wrap">
        <header id="header" class="thin-header">
          <div class="container">
            <div class="logo">
              <a href="javascript:void(0);">シビレ株式会社</a>
            </div>
          </div>
        </header>
        <div id="company">
          <div id="contents">
            <div class="container">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1><?php the_title(); ?></h1>
                <div class="company-name">
                  <? $txt = get_field('recruit'); if($txt){ ?><? echo $txt; ?> <? } ?>
                </div>
                <div class="sns">
                  <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?> (<? $txt = get_field('recruit'); if($txt){ ?><? echo $txt; ?> <? } ?>)" data-lang="ja" data-hashtags="シビレる">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                </div>
                <?php/*
                <div class="company-img"><?php the_post_thumbnail( 980, 0 ); ?></div>
                */?>
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
