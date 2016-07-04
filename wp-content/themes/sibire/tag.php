<?php /* ?>
title: タグの部分テンプレート
description:
<?php */ ?>
<ul class="tag">
  <?php if(has_tag()==true) : // タグがある場合 ?>
    <?php
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) {
          echo '<li>' . $tag->name . '</li>';
        }
      }
    ?>
    <?php else : // タグがない場合 ?>
      <li>タグなし</li>
    <?php endif; ?>
</ul>
