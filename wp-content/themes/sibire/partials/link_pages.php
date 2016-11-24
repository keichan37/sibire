<?php // ページング テキスト
  $args = array(
    'before' => '<div class="link_page_navi">', 
    'after' => '</div>', 
    'next_or_number' => 'nextpagelink',
    'nextpagelink'     =>  '次のページ<span class="icon-arrow-right"></span>',
    'previouspagelink' =>  '<span class="icon-arrow-left"></span>前のページ'
  );
  wp_link_pages( $args );
?>
<?php // ページング 数字
  $args = array(
    'before' => '<ul class="link_page_navi">', 
    'after' => '</ul>', 
    'link_before' => '<li>', 
    'link_after' => '</li>'
  );
  wp_link_pages( $args );
?>
