<?php /* Template Name: 和歌山イベントLP 記事ページ */ ?>
  <?php get_header(); ?>
    <div id="template-event" class="template-event-single template-wakayama-single">
      <div id="sub-cover">
        <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-wakayama/cover-title.svg" alt="和歌山キャリアフェア"/>
        <h1><span><?php the_title(); ?></span></h1>
      </div>
      <article>
        <div class="single-content mce-content-body">
          <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;endif; ?>
        </div>
      </article>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <footer class="sns-footer">
        <?php get_template_part('partials/sns-share'); ?>
        <small>主催:公益財団法人 わかやま産業振興財団 和歌山県プロフェッショナル人材戦略拠点<br />Copyright &copy; Wakayama Prefecture. All Rights Reserved.</small>
      </footer>
      </div>
    </div>
    <?php get_footer(); ?>
