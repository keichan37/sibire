<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <div class="single-left">
            <?php while(have_posts()): the_post(); ?>
              <article>
                <span class="single-category"><span class="icon icon-paper"></span><a href="/<?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></a></span>
                <time class="single-date" datetime="<?php the_time('c') ;?>"><span class="icon icon-watch"></span><?php the_time('Y.n.j') ;?></time>
                <h1 class="single-title"><?php the_title(); ?></h1>

                <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>

                  <? $txt = get_field('subtitle'); if($txt){ ?><h2 class="single-subtitle"><? echo $txt; ?></h2><? } ?>
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
              <?php get_template_part('partials/sidebar'); ?>
            <?php endif; //パスワード保護 ?>
          </div>
          <aside>
            <?php get_template_part('partials/registration'); ?>
            <?php get_template_part('partials/related-list'); ?>
          </aside>
          <?php get_template_part('breadcrumb'); ?>
        </div>    
      </div>    
      
    </div>
    <?php get_footer(); ?>
