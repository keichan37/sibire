<div id="catchcopy">
  <div class="catchcopies catchcopies-<? echo $area; ?>">
    <?php
      $args = array(
       'post_type' => 'catchcopy',
       'posts_per_page' => -1,
       'post_status' => 'publish',
       'has_password' => false,
       'meta_query' => array(
         array(
          'key' => 'catchcopy-area',
          'value' => $area,
          'compare'=> 'LIKE'
         )
       ),
      );
      $my_query = new WP_Query( $args );  //　クエリーを新規作成
    ?>
    <?php if ( $my_query->have_posts() ) : ?>
      <h4 class="<? echo $area; ?>"><? echo $title; ?>部屋</h4>
      <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="catchcopy <? echo $area; ?>">
          <b><?php the_title(); ?></b>
          <a class="twitter-hashtag-button"
            href="https://twitter.com/intent/tweet?button_hashtag=<?php the_title(); ?>がシビレる！&text=<?php the_title(); ?>がシビレる！"
            data-size="large"
            data-text="<?php the_title(); ?>がシビレる！"
            data-url="http://www.sibire.co.jp/event/11082"
            data-hashtags="シビレ春場所,<?php the_title(); ?>がシビレる！"
            lang="ja">
          #<?php the_title(); ?>がシビレる！
          </a>
          <br />
          <? $txt = get_field('catchcopy-link'); if($txt){ ?><a href="<? echo $txt; ?>" target="_blank">詳細はこちら</a> <? } ?>
        </div>

      <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>
</div>
