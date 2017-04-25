<div class="common-category-wrap">
  <h2 class="common-category-title">カテゴリ一覧</h2>
  <ul class="common-category">
    <?php
      $args = array(
        'orderby' => 'order',
        'order' => 'ASC',
        'exclude' => '1' // 「未設定」カテゴリを除外
      );
      $cat_all = get_categories($args);
      foreach($cat_all as $value): ?>
        <li><a href="<?php echo get_category_link($value); /* カテゴリへのリンク */ ?>"><?php echo esc_html($value->name); /* カテゴリ名 */ ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
