<?php
  $args = array(
   'post_type' => 'catchcopy',
   'posts_per_page' => -1,
   'post_status' => 'publish',
   'has_password' => false,
  );
  $my_query = new WP_Query( $args );  //　クエリーを新規作成
?>
<?php if ( $my_query->have_posts() ) : ?>
  <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

    <?php the_title(); ?>
    <? $txt = get_field('catchcopy-link'); if($txt){ ?><? echo $txt; ?> <? } ?>
    
    <? $txt = get_field('catchcopy-area'); if($txt){ ?><? echo $txt; ?> <? } ?>

    <a class="twitter-hashtag-button"
      href="https://twitter.com/intent/tweet?button_hashtag=を応援する&text=を応援する"
      data-size="large"
      data-text="を応援する"
      data-url="http://www.sibire.co.jp/event/11082"
      data-hashtags="シビレ春場所,を応援する"
      lang="ja">
    #<? $txt = get_field('catchcopy-twitter'); if($txt){ ?><? echo $txt; ?> <? } ?>を応援する
    </a>

  <?php endwhile; ?>

  <?php else : ?>
    <p>Coming Soon…</p>
  <?php endif; ?>

<?php wp_reset_postdata(); ?>
