      <div class="scroll-top-wrap">
        <a class="e-scroll-top r-scroll-top scroll-top none" href="javascript:void(0);"></a>
      </div>
      <?php get_template_part('partials/sns-footer'); ?>
      <footer id="footer">
        <div class="sns-wrap">
          <div class="facebook">
            <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </div>
          <div class="twitter">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          </div>
        </div>
        <div class="copy">&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</div>
      </footer>

    </div>

  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/jquery.fadethis.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/app.js"></script>
  <script type="text/javascript" src="<?php bloginfo(template_url);?>/javascripts/owl.carousel.min.js"></script>
  <script>$(window).fadeThis({
    reverse:  false,
    offset: 10,
    distance: 40
  });</script>

  </body>
</html>
