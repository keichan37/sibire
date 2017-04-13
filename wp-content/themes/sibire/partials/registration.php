<?php if( is_single('272') ):// 申し込みページでは非表示 ?>
<?php else: ?>
  <div class="partials">
    <div class="partials-registration-wrap">
      <div class="partials-img-wrap">
        <img class="partials-img" src="<?php echo get_template_directory_uri(); ?>/images/partials-registration/registration-service.png" alt="">
      </div>
      <div class="partials-link-wrap">
        <a class="partials-link" href="/service">サービスの詳細はこちら</a>
      </div>
      <a class="partials-registration" href="/registration">サービスに申し込む</a>
      <p>
        <?php if (is_front_page()): ?>
          OFF TOKYOしたい<br />
          エンジニアの転職を支援 
        <?php elseif ( in_array(get_post_type(), array('recruit')) ): //求人用?>
          この求人にシビレた！
        <?php else: ?>
          OFF TOKYOしたい<br />
          エンジニアの転職を支援
        <?php endif; ?>
      </p>
    </div>
  </div>
<?php endif; ?>
