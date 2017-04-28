<div class="common-tag-wrap">
  <h2 class="common-tag-title">タグ一覧</h2>
  <ul class="common-tag">
    <?php
      $args = array(
        'orderby' => 'count',
        'order' => 'desc',
        'number' => 20
      );
      $tags = get_terms('post_tag', $args);
      foreach($tags as $value) {
        echo '<li><a href="'. get_tag_link($value->term_id) .'">'. $value->name .' ('. $value->count .')</a></li>';
      }
    ?>
  </ul>

</div>
