<?php
  global $area_name;
  global $area_title;
  $args = array(
       'post_type' => array('recruit','offer'),
       'meta_key' => 'area',
       'meta_value' => $area_name,
       'has_password' => false,
       'meta_compare'=>'LIKE'
  ); ?>
<?php query_posts( $args ); ?>
  <?php if (have_posts()) : ?>
    <li class="area-map-<?php echo $area_name; ?>">
      <a href="#<?php echo $area_name; ?>" class="scroll"><?php echo $area_title; ?></a>
    </li>
  <?php endif; ?>
<?php wp_reset_query();?>
