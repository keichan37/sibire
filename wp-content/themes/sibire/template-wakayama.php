<?php /* Template Name: 和歌山イベントLP */ ?>

  <?php get_header(); ?>
    <div id="template-wakayama">
      <div id="cover">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); //本文 ?>
          <?php get_template_part('partials/sns-share'); ?>
        </div>
      </div>
      <div class="section map" id="map">
        <?php get_template_part('google_map');?>
        <div class="acf-map">
          <div class="marker" data-lat="35.6304639" data-lng="139.6539423">
            <div  data-lat="35.6304639" data-lng="139.6539423">
              <h1><img src="<?php echo get_template_directory_uri(); ?>/images/template-event/logo.jpg" alt="Coming Soon…"/></h1>
              <p>※Coming Soon…<br /><a href="javascript:void(0);" target="_blank">Coming Soon…</a></p>
            </div>
          </div>
        </div>
        <div class="section address">
          <address>〒105-0000 東京都</address>
        </div>
      </div>
      <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="31972" title="OFF TOKYO 和歌山キャリアフェア"]'); ?>
      </div>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <div class="section participate participate3">

        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
