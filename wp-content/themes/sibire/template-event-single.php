<?php /* Template Name: イベントLP 記事ページ */ ?>
  <?php get_header(); ?>
    <div id="template-event" class="template-event-single">
      <div id="sub-cover">
        <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-title.svg" alt="OFF TOKYO MEETUP 2017"/>
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
      <div class="section participate participate3">
        <div class="button-wrap">
          <strong class="reservation">要事前予約</strong>
          <a class="button" href="entry">参加する</a>
        </div>
        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
