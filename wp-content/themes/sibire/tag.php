<?php /* ?>
title: タグの部分テンプレート
description:
<?php */ ?>
<?php if(has_tag()==true) : // タグがある場合 ?>
  <ul class="tag">
      <?php
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li>' . $tag->name . '</li>';
          }
        }
      ?>
  </ul>
<?php else : // タグがない場合 ?>
<?php endif; ?>
