<?php if( is_page('272') ):// 申し込みページでは非表示 ?>
<?php else: ?>
  <div class="single-service">
    <a class="service-registration" href="/registration">サービスに申し込む</a>
    <div class="service-registration-window"><b class="caret"></b>
    <?php if ( in_array(get_post_type(), array('recruit')) ): //求人用?>
      この求人にシビレた！
    <?php else: ?>
      OFF TOKYOしたい<br />
      エンジニアの転職を支援
    <?php endif; ?>
    </span></div>
  </div>
<?php endif; ?>
