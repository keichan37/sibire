<aside>
  <?php  $location = get_field('google_map'); if( !empty($location) ):?>
    <h4>勤務地</h4>
    <div class="single-map">
      <?php get_template_part('google_map');?>
      <div class="acf-map">
        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
      </div>
      <table>
        <tr>
          <th><span class="icon-link"></span></th>
          <td><a href="http://maps.google.com/maps?q=<?php echo $location['address']; ?>" target="_blank"><?php echo $location['address']; ?></a></td>
        </tr>
      </table>
    </div>
  <?php endif; ?>

  <h4>募集職種</h4>
    <ul class="single-tag">
      <?php
        $posttags = get_the_tags();
        if ($posttags) {
          foreach($posttags as $tag) {
            echo '<li><span class="icon-head"></span>' . $tag->name . '</li>';
          }
        }
      ?>
    </ul>
  <?php get_template_part('partials/service'); ?>
</aside>
