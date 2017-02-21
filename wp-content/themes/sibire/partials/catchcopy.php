<?php
  $args = array(
   'post_type' => 'catchcopy',
   'numberposts'   => -1,
   'post_status' => 'publish',
   'has_password' => false,
  );
$postslist = get_posts($args);
foreach ($postslist as $post) : setup_postdata($post);
?>

  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
  ?>
  <?php the_title(); ?>
  <? $txt = get_field('catchcopy_link'); if($txt){ ?><? echo $txt; ?> <? } ?>
  <? $txt = get_field('catchcopy_twitter'); if($txt){ ?><? echo $txt; ?> <? } ?>
  <? $txt = get_field('catchcopy_area'); if($txt){ ?><? echo $txt; ?> <? } ?>
  
<?php 
endforeach; 
wp_reset_postdata();
?>
