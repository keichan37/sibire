      <div class="scroll-top-wrap">
        <a class="e-scroll-top r-scroll-top scroll-top none" href="javascript:void(0);"></a>
      </div>
      <?php get_template_part('partials/sns-footer'); ?>
      <footer id="footer">
        <nav>
          <?php wp_nav_menu( array('menu' => 'footer_menu', 'menu_class' => 'footer_menu')); ?>
        </nav>
        <div class="copy">&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</div>
      </footer>

    </div>

  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.fadethis.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.slicknav.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/wpcf7.js"></script>
  <script>$(window).fadeThis({
    reverse:  false,
    offset: 10,
    distance: 40
  });
  $('.global_menu').slicknav({
    label: '',
		prependTo: '.menu-global_menu-container'
  });
  </script>

  </body>
</html>
