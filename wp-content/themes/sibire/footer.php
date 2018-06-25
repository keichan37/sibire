      <?php $url = $_SERVER['REQUEST_URI']; ?>
      <?php if(strstr($url,'wakayama-careerfair')): ?>
        <footer id="footer" class="template-wakayama-footer">
          主催:公益財団法人 わかやま産業振興財団 和歌山県プロフェッショナル人材戦略拠点
          <div class="copy">Copyright &copy; Wakayama Prefecture. All Rights Reserved.</div>
        </footer>
      <?php elseif(strstr($url,'offtokyomeetup2017')): ?>
      <?php else : ?>
      <?php get_template_part('partials/sns-footer'); ?>
        <div class="scroll-top-wrap">
          <a class="e-scroll-top r-scroll-top scroll-top none" href="javascript:void(0);"></a>
        </div>
        <footer id="footer">
          <nav>
            <?php wp_nav_menu( array('menu' => 'footer_menu', 'menu_class' => 'footer_menu')); ?>
          </nav>
          <ol class="tag-list">
            <li><strong>人気タグ</strong>:</li>
            <?php wp_list_categories('orderby=count&order=DESC&taxonomy=post_tag&title_li=&number=9&show_count=1');?>
          </ol>
          <?php get_search_form(); ?>
          <small class="pay">有料職業紹介事業許可番号04-ユ-300214</small>
          <small class="copy">&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      <?php endif; ?>

    </div>
  </div>

  <?php wp_footer(); ?>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.fadethis.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.slicknav.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/echo.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/wpcf7.js"></script>

  <?php if(is_page('offtokyomeetup2017')): ?>
    <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/template-event.js"></script>
    <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.liMarquee.js "></script>
  <?php else : ?>
  <?php endif; ?>
  <script>
    $(window).fadeThis({
      reverse:  false,
      offset: 10,
      distance: 40
    });
    $('.global_menu').slicknav({
      label: '',
      prependTo: 'body',
      allowParentLinks: true,
      showChildren: true,
    });
    $(".slicknav_btn").click(function(){
      $('#blur').toggleClass("blur");
      $('#transparent').toggleClass("none");
      $('header').toggleClass("slicknav_open");
    });
    //$(window).on('load',function(){
      //$('#marquee').liMarquee({
        //scrollDelay: 2000,
        //scrollStop: true,
        //stopOutScreen: true,
        //dragAndDrop: true,
        //startShow: true
      //});
    //})
    // echo.jsを初期化(起動)する
      echo.init() ;
  </script>

  </body>
</html>
