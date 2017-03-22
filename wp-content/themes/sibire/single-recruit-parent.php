<?php /* Template Name: シビレる求人 親要素*/ ?>

  <?php get_header(); //ヘッダー ?>
        <div id="post" class="post-recruit">
          <div id="contents">
            <div class="container">
              <div class="relative">
                <div id="main-content" class="recruit-main-content">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); //投稿が存在する場合 ?>
                    <div class="inner-padding recruit-area-relative">
                      <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                        <?php get_template_part('breadcrumb'); //パンくずリスト ?>
                        <?php get_template_part('tag'); //タグ ?>
                        <h2 class="recruit-name">
                        <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                        </h2>
                        <h1><?php the_title(); ?></h1>
                        <? $txt = get_field('company_url'); if($txt){ ?>
                          <a href="<? echo $txt; ?>" target="_blank"><? echo $txt; ?></a>
                        <? } ?>
                        <time class="entry-date icon-clock recruit-date" datetime="<?php the_time('c') ;?>">
                          <span><?php the_time('Y年n月j日') ;?></span>
                        </time>
                        </div>
                        <?php
                          $child_posts = query_posts( 'numberposts=-1&order=ASC&orderby=post_title&post_type=recruit&post_parent=' . $post->ID );
                          if ( $child_posts ) {
                            foreach ( $child_posts as $child ) {
                            $c_title = apply_filters( 'the_title', $child->post_title );
                            $c_permalink = apply_filters( 'the_permalink', get_permalink( $child->ID ) );
                            $c_image_id = get_post_thumbnail_id($child->ID);
                            $c_image_url = wp_get_attachment_image_src($c_image_id, '', true);
                          ?>
                          <div class="child-pages">
                            <a href="<?php echo $c_permalink; ?>">
                              <img src="<?php echo $c_image_url[0]; ?>" />
                              <p><?php echo $c_title; ?></p>
                            </a>
                          </div>
                        <?php
                                }
                            }
                        ?>
                        <?php wp_reset_query();?>
                        <div class="recruit-content"><?php the_content(); //本文 ?></div>
                      <?php endif ?>
                  <?php endwhile; else: //投稿が存在しない場合 ?>
                    <p>記事がありません</p>
                  <?php endif; ?>

                </div>
                <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                  <div id="sidebar">

                    <div class="e-fixed-box"></div>
                    <div class="fixed-box r-fixed-box">
                      <a class="recruit-registration" href="/registration"><span class="icon-head"></span>登録する</a>
                      <div class="recruit-registration-window"><b class="caret"></b>イベント情報や最新のお知らせを<br />優先的にご案内します。<span class="icon-mail"></span></div>
                    <div class="recruit-sns">
                      <div class="hatena">
                        <a href="http://b.hatena.ne.jp/entry/http://www.sibire.co.jp" class="hatena-bookmark-button" data-hatena-bookmark-title="シビレ株式会社" data-hatena-bookmark-layout="simple" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a><script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                      </div>
                      <div class="facebook">
                        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                      </div>
                      <div class="twitter">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="sibire_inc" data-lang="ja" data-hashtags="シビレ">ツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="clear"></div>
              </div>

              <?php wp_reset_query();?>
              <div id="other-lists" class="inner-padding">
                <h3 class="other-title">その他の求人</h3>
                <div class="other-recruit">
                  <?php
                    $slug = get_post_type();
                    $args = array( 
                     'paged' => $paged,
                     'post_type' => array('recruit','offer'),
                     'post_status' => 'publish',
                     'posts_per_page'   => 20,
                     'has_password' => false,
                     'post__not_in'=> array(get_the_ID())
                    );
                    $postslist = get_posts($args);
                    foreach ($postslist as $post) : setup_postdata($post);
                    ?>
                    <?php
                      $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
                    ?>
                    <a class="other-recruit-box" href="<?php the_permalink(); ?>">
                      <div class="other-recruit-image" style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"></div>
                      <b><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></b>
                      <?php the_title(); ?>
                    </a>
                  <?php 
                  endforeach; 
                  wp_reset_postdata();
                  ?>
                </div>
                <?php get_template_part('partials/iframe');?>
              </div>
            </div>
          </div>
        </div>
        <?php get_footer(); //フッター ?>
