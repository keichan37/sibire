<?php /* ?>
title: パンくずリストの部分テンプレート
description: 固定ページ以外は3段階のパンくずになります。改行するとスペースが入るので1行で記述
<?php */ ?>

<div class="breadcrumb">
  <a href="/">TOP</a>&gt;<?php if (is_page()) {?><?php } else{ ?><?php echo esc_html(get_post_type_object($post->post_type)->label); ?>&gt;<?php } ?><?php the_title(); ?>
</div>
