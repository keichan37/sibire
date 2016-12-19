      <div class="scroll-top-wrap">
        <a class="e-scroll-top r-scroll-top scroll-top none icon-arrow-up" href="javascript:void(0);"></a>
      </div>
      <footer id="footer">
        <div class="container">
          <div class="footer-inner">
            <h4 class="h4-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">シビレ株式会社</a></h4>
            <?php wp_nav_menu( array('menu' => 'footer_menu')); ?>
          </div>
          <div class="menu-footer_menu_bottom-container">
            <?php
              global $footer_post_title; 
              global $footer_post_type;
              global $footer_post_link; 
            ?>
            <?php
              $footer_post_title = 'シビレビト発見伝';
              $footer_post_type = 'interview';
              $footer_post_link = 'interview';
              get_template_part('partials/footer','list');
            ?>
            <?php
              $footer_post_title = 'シビレるニッチ';
              $footer_post_type = 'niche';
              $footer_post_link = 'niche';
              get_template_part('partials/footer','list');
            ?>
            <?php
              $footer_post_title = 'シビレる小ネタ';
              $footer_post_type = 'column';
              $footer_post_link = 'column';
              get_template_part('partials/footer','list');
            ?>
            <?php
              $footer_post_title = 'シビレる集';
              $footer_post_type = 'event';
              $footer_post_link = 'event';
              get_template_part('partials/footer','list');
            ?>
            <?php
              $footer_post_title = 'シビレる求人';
              $footer_post_type = array('recruit','offer');
              $footer_post_link = 'recruit';
              get_template_part('partials/footer','list');
            ?>
            <div class="clear"></div>
          </div>
          <div class="copy">&copy; 2016 sibire ,inc. All Rights Reserved.</div>
        </div>
      </footer>

    </div>

  <?php wp_footer(); ?>
  </body>
</html>
