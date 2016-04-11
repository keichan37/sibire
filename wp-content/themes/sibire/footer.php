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
</script>
