<?php /* Template Name: 参加企業ページテンプレート*/ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post">
          <div id="contents">
            <div class="container">
              <div id="main-content">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //投稿が存在する場合 ?>
                  <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                  <?php get_template_part('tag'); //タグ ?>
                  <time class="entry-date" datetime="<?php the_time('c') ;?>">
                    <?php the_time('Y年n月j日') ;?>
                  </time>
                  <div class="clear"></div>
                  <div class="title-wrap">
                    <h1 class ="post-h1"><?php the_title(); ?></h1>
                  </div>
                  <div class="clear"></div>
                  <div class="post-name">
                    <img class="logo" src="<?php the_field('logo'); ?>" alt="logo">
                    <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  </div>
                  
                  <div class="left-column">
                    <?php the_content(); //本文 ?>
                  </div>
                  <div class="right-column">
                    <?php 
                    $image = get_field('img1');
                    if( !empty($image) ): 
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                        if( $caption ): ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                          </div>
                        <?php else: ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                          </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php 
                    $image = get_field('img2');
                    if( !empty($image) ): 
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                     
                        if( $caption ): ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                          </div>
                        <?php else: ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                          </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php 
                    $image = get_field('img3');
                    if( !empty($image) ): 
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $caption = $image['caption'];
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                     
                        if( $caption ): ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                            <p class="wp-caption-text"><?php echo $caption; ?></p>
                          </div>
                        <?php else: ?>
                          <div class="wp-caption">
                            <div class="wp-img">
                              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            </div>
                          </div>
                        <?php endif; ?>
                    <?php endif; ?>

                  </div>
                  <div class="clear"></div>
                  <? $txt = get_field('form'); if($txt){ ?><? echo $txt; ?> <? } ?>
                  <br />

                <?php endwhile; else: //投稿が存在しない場合 ?>
                  <p>記事がありません</p>
                <?php endif; ?>

              </div>
              <div id="sidebar">
                <?php get_template_part('sidebar'); //サイドバー ?>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <?php get_footer(); //フッター ?>
