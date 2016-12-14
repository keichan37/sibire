      <div class="scroll-top-wrap">
        <a class="e-scroll-top r-scroll-top scroll-top none icon-arrow-up" href="javascript:void(0);"></a>
      </div>
      <footer id="footer">
        <div class="container">
          <div class="footer-inner">
            <b>シビレ</b>

            <?php wp_nav_menu( array('menu' => 'フッターメニュー')); ?>
            <div class="clear"></div>
          </div>
          <div class="copy">&copy; 2016 sibire ,inc. All Rights Reserved.</div>
        </div>
      </footer>
      <script>
        $(document).ready(function() {
          $(".owl-carousel").owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            nav: false,
            navText: ["前","次" ],
            items : 3,
            responsive: {
              0: { items: 1 },
              450: { items: 2 },
              768: { items: 3 }
            }
          });
        });
        $(document).ready(function() {
          $(".other-recruit").owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            navText: ["","" ],
            items : 4,
            responsive: {
              0: { items: 1 },
              450: { items: 3 },
              768: { items: 4 }
            }
          });
        });
      </script>

    </div>

  <?php wp_footer(); ?>
  </body>
</html>
