<?php
  global $area_name;
  global $area_title;
  $args = array(/* 配列（$args）に複数の引数を追加 */
       'posts_per_page' => -1,
       'post_type' => array('recruit','offer'),
       'orderby' => 'meta_value',
       'order' => 'ASC',
       'meta_query' => array(
         array(
          'key' => 'area',
          'value' => $area_name,
          'compare'=> 'LIKE'
         )
       ),
       'post_status' => 'publish',
       'has_password' => false,
       'meta_compare'=>'LIKE'
  ); ?>

<?php query_posts( $args ); ?><!-- メインの WordPress ループを変更するタグ -->

  <?php if (have_posts()) : ?>
    <div id="<?php echo $area_name; ?>">
      <div class="area r-fixed-padding r-fixed-padding-<?php echo $area_name; ?>" id="e-fixed-title-<?php echo $area_name; ?>">
        <h2 class="r-fixed-title-<?php echo $area_name; ?> area-h2 area-h2-<?php echo $area_name; ?>"><?php echo $area_title; ?></h2>
        <ul class="area-ul"> 
          <?php while (have_posts()) : the_post(); ?>
            <li class="area-li">
              <a href="<?php the_permalink(); ?>">
                <div class="area-li-img">
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(array(200, 200)); ?>
                  <?php endif; ?>
                </div>

                <div class="area-li-text">
                  <?php get_template_part('tag'); //タグ ?>
                  <h3><?php the_title(); ?></h3>
                  <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
                  <div class="area-li-detail">
                    <table class="area-detail-table">
                      <? $txt = get_field('development-language'); if($txt){ ?>
                        <tr>
                          <th><span class="icon icon-server"></span></th>
                          <td><? echo $txt; ?></td>
                        </tr>
                      <? } ?>
                      <?php  $location = get_field('google_map'); if( !empty($location) ):?>
                        <tr>
                          <th><span class="icon-location"></span></th>
                          <td><?php echo $location['address']; ?></td>
                        </tr>
                      <?php endif; ?>
                      <? $txt = get_field('company-employee'); if($txt){ ?>
                        <tr>
                          <th><span class="icon icon-head"></span></th>
                          <td><? echo $txt; ?></td>
                        </tr>
                      <? } ?>
                      <? $txt = get_field('company-establish'); if($txt){ ?>
                        <tr>
                          <th><span class="icon icon-briefcase"></span></th>
                          <td><? echo $txt; ?>設立</td>
                        </tr>
                      <? } ?>
                    </table>
                  </div>
                </div>
                <div class="clear"></div>

              </a>
            </li>
          <?php endwhile; ?>     
        </ul>
      </div>
    </div>
    <div class="area" id="e-absolute-title-<?php echo $area_name; ?>"></div>
  <?php endif; ?>
<?php wp_reset_query();?>
