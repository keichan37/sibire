<div class="partials">
  <div class="partials-registration-wrap">
    <a class="partials-registration" href="/service#form">サービスに申し込む</a>
    <p>
      <?php if (is_front_page()): ?>
        「OFF TOKYOしたい<br />
        エンジニアの転職を支援」 
      <?php elseif ( in_array(get_post_type(), array('recruit')) ): //求人用?>
        この求人にシビレた！
      <?php else: ?>
        「OFF TOKYOしたい<br />
        エンジニアの転職を支援」 
      <?php endif; ?>
    </p>
  </div>
</div>
