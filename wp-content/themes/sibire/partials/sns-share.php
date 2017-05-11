<div class="sns-share">
  <div class="facebook">
    <?php if ( is_home() || is_front_page() ) : ?>
      <div class="fb-like" data-href="<?php echo esc_url( home_url( '/' ) ); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    <?php else: ?>
      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    <?php endif; ?>
  </div>
  <div class="twitter">
    <?php if ( is_home() || is_front_page() ) : ?>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php echo esc_url( home_url( '/' ) ); ?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <?php else: ?>
      <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    <?php endif; ?>
  </div>
</div>
