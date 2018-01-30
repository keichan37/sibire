<?php /* Template Name: 和歌山イベントLP 記事ページ */ ?>

  <?php get_header(); ?>
    <div id="common" class="template-wakayama-single">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); ?>
          <div class="single-left">
            <?php while(have_posts()): the_post(); ?>
              <article>
                <span class="single-category">求人情報</span>
                <time class="single-date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.n.j') ;?></time>
                <h1 class="single-title"><?php the_title(); ?></h1>

                <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>

                  <? $txt = get_field('subtitle'); if($txt){ ?><h2 class="single-subtitle"><? echo $txt; ?></h2><? } ?>
                  <?php get_template_part('partials/sns-share'); ?>
                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
                  ?>
                  <?php if ( in_array(get_post_type(), array('niche','media')) ): ?>
                  <?php elseif ( $page == 1 ) : // 1ページ目だけ表示 ?>
                    <?php if (has_post_thumbnail()): ?>
                      <img class="single-eyecatch" src="<?php echo $thumbnail_url[0]; ?>">
                    <?php else: ?>
                    <?php endif; ?>
                  <?php endif; ?>

                  <!-- PRとインタビュー -->
                  <?php if ( in_array(get_post_type(), array('interview')) ): ?>
                    <? $txt = get_field('profile'); if($txt){ ?>
                      <div class="single-top-box">
                        <img src="<?php the_field('avatar'); ?>" alt="">
                        <div class="single-top-box-text"><? echo $txt; ?></div>
                      </div>
                     <? } ?>
                  <?php elseif ( in_array(get_post_type(), array('niche')) ): ?>
                    <?php if ( $page == 1 ) : // 1ページ目だけ表示 ?>
                      <div class="single-top-box">
                        <img src="<?php the_field('single-niche-top-image'); ?>" alt="">
                        <div class="single-top-box-text"><? $txt = get_field('single-niche-top-text'); if($txt){ ?><? echo $txt; ?> <? } ?></div>
                      </div>
                    <?php endif; ?>
                  <?php endif; ?>


                  <div class="single-content mce-content-body">
                    <?php if ( in_array(get_post_type(), array('recruit')) ): ?>
                      <h4>会社の雰囲気</h4>
                      <div class="single-image-wrap">
                        <?php $image = get_field('company_image1'); if( !empty($image) ): ?>
                          <figure class="single-image">
                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <figcaption><?php echo $image['caption']; ?></figcaption>
                          </figure>
                        <?php endif; ?>
                        <?php $image = get_field('company_image2'); if( !empty($image) ): ?>
                          <figure class="single-image">
                            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <figcaption><?php echo $image['caption']; ?></figcaption>
                          </figure>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                <?php endif; //パスワード保護 ?>

                    <?php the_content(); //本文 ?>
                    <?php get_template_part('partials/link_pages'); //ページング ?>

                <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                    <?php if ( in_array(get_post_type(), array('recruit')) ): ?>
                      <?php get_template_part('partials/registration'); ?>
                      <?php get_template_part('partials/single-table'); ?>
                    <?php endif; ?>
                  </div>
                <?php endif; //パスワード保護 ?>

              </article>
            <?php endwhile; ?>
          </div>
          <div class="single-right">
            <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
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
                <h4>関連記事</h4>
                <ul class="single-related-list">
                <?php
                  $parent_id = $post->post_parent;
                  $slug = get_post_type();
                  $args = array( 
                   'paged' => $paged,
                   'post_type' => $slug,
                   'post_status' => 'publish',
                   'posts_per_page'   => 10,
                   'has_password' => false,
                   'post__not_in'=> array(get_the_ID())
                  );
                  $postslist = get_posts($args);
                  foreach ($postslist as $post) : setup_postdata($post);
                ?>
                  <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </li>
                <?php 
                endforeach; 
                wp_reset_postdata();
                ?>
                </ul>
              </aside>
            <?php endif; //パスワード保護 ?>
          </div>
          <aside class="clear">
            <div class="single-related-wrap">
              <h4>関連記事</h4>
              <div class="single-related-lists">
                <?php
                  $slug = get_post_type();
                  $args = array( 
                   'paged' => $paged,
                   'post_type' => $slug,
                   'post_status' => 'publish',
                   'posts_per_page'   => 15,
                   'has_password' => false,
                   'post__not_in'=> array(get_the_ID())
                  );
                  $postslist = get_posts($args);
                  foreach ($postslist as $post) : setup_postdata($post);
                  ?>
                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
                  ?>
                  <a class="single-related" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()): ?>
                      <div class="single-related-eyecatch" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                    <?php else: ?>
                      <div class="single-related-eyecatch" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/no-image-eyecatch.png")></div>
                    <?php endif; ?>
                    <h5><?php the_title(); ?></h5>
                    <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
                  </a>
                <?php 
                endforeach; 
                wp_reset_postdata();
                ?>
              </div>
            </div>
          </aside>
        </div>    

      </div>    
    </div>
    <?php get_footer(); ?>
