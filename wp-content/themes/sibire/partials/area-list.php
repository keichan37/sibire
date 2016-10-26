<?php
  global $area_name;
  global $area_title;
  $args = array(/* 配列（$args）に複数の引数を追加 */
       'posts_per_page' => -1,
       'post_type' => array('recruit','offer'),
       'meta_key' => 'area', /* カスタムフィールドキー（meta_key） */
       'meta_value' => $area_name, /* カスタムフィールド値（meta_value)  */
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
                    <span class="icon-chat">言語</span><br />
                    <?php  $location = get_field('google_map'); if( !empty($location) ):?>
                      <span class="icon-map"><?php echo $location['address']; ?></span><br />
                    <?php endif; ?>
                    <span class="icon-paper"><? $txt = get_field('company-establish'); if($txt){ ?><? echo $txt; ?><? } ?>設立</span>
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
