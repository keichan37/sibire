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
    <? $txt = get_field('catchcopy_link'); if($txt){ ?><? echo $txt; ?> <? } ?>
    <? $txt = get_field('catchcopy_twitter'); if($txt){ ?><? echo $txt; ?> <? } ?>
    <? $txt = get_field('catchcopy_area'); if($txt){ ?><? echo $txt; ?> <? } ?>

  <?php endwhile; ?>

  <?php else : ?>
    <p>Coming Soon…</p>
  <?php endif; ?>

<?php wp_reset_postdata(); ?>
