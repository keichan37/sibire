<?php
  $args = array(
   'post_type' => 'catchcopy',
   'posts_per_page' => -1,
   'post_status' => 'publish',
   'has_password' => false,
  );
?>
  <?php $my_query = new WP_Query( $args ); ?>
  <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

    <?php
      $thumbnail_id = get_post_thumbnail_id();
      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
    ?>
    <?php the_title(); ?>
    <? $txt = get_field('catchcopy_link'); if($txt){ ?><? echo $txt; ?> <? } ?>
    <? $txt = get_field('catchcopy_twitter'); if($txt){ ?><? echo $txt; ?> <? } ?>
    <? $txt = get_field('catchcopy_area'); if($txt){ ?><? echo $txt; ?> <? } ?>

  <?php endwhile; ?>  
<?php 
endforeach; 
wp_reset_postdata();
?>
