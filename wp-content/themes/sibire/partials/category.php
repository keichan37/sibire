<div class="common-tag-wrap">
  <h2 class="common-tag-title">タグ一覧</h2>
  <ul class="common-tag">
    <?php
      $posttags = get_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> '. "</li>";
          }
        }
    ?>
  </ul>
</div>
