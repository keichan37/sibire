
<?php /* Template Name: イベントLP プログラム */ ?>

  <?php get_header(); ?>
    <div id="template-event">
      <div id="cover">
        <h1>
          <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-title.svg" alt="<?php the_title(); ?>"/>
        </h1>
        <?php get_template_part('partials/sns-share'); ?>
      </div>
      </div>
      <div class="section participate participate1">
        <a class="button" href="entry#page-h1">参加する</a>
      </div>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <div class="section participate participate3">
        <a class="button" href="entry#page-h1">参加する</a>
        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
