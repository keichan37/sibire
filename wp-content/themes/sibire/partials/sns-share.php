<div class="sns-share">
  <?php
    $permalink = get_permalink();
    $httplink = str_replace( 'https://', 'http://', $permalink );
  ?>
  <div class="facebook">
    <?php if ( is_home() || is_front_page() ) : ?>
      <div class="fb-like" data-href="<?php echo home_url(null, 'http'); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    <?php else: ?>
      <div class="fb-like" data-href="<?php echo $httplink ;?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    <?php endif; ?>
  </div>
  <div class="twitter">
    <?php if ( is_home() || is_front_page() ) : ?>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo home_url(null, 'http'); ?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <?php else: ?>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo $httplink ;?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <?php endif; ?>
  </div>
</div>



