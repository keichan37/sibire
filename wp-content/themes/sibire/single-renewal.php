<?php /* Template Name: 新しい記事フォーマット*/ ?>

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
                        <?php
                          $fields = get_field_objects($post_id);
                          $dir_array = $fields["area"]["choices"];
                          $check = get_field('area');
                          if($check): //日本地図で拠点を表示 ?>
                            <div class="recruit-area-wrap">
                              <?php foreach($check as $value): ?>
                                <div class="recruit-area">
                                  <div class="recruit-area-map <?php echo $value; ?>"></div>
                                  <?php echo $dir_array[$value]; ?>
                                </div>
                              <?php endforeach ?>
                              <div class="clear"></div>
                            </div>
                        <?php endif ?>
                      <?php endif ?>
                    </div>
                    <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                      <h2 class="recruit-name">
                        <? $txt = get_field('subtitle'); if($txt){ ?><? echo $txt; ?> <? } ?>
                      </h2>
                    <?php endif ?>
                    <?php
                      $thumbnail_id = get_post_thumbnail_id();
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true); //アイキャッチのURL取得
                    ?>
                    <div class="inner-padding">
                      <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                        <div class="recruit-eyecatch-img-wrap">
                          <?php if (has_post_thumbnail()): //アイキャッチある場合 ?>
                            <img class="recruit-eyecatch-img" src="<?php echo $thumbnail_url[0]; ?>">
                          <?php else: //アイキャッチない場合 ?>
                          <?php endif; ?>
                          <h1 class="recruit-h1"><?php the_title(); ?></h1>
                        </div>
                        <div class="e-fixed-title">
                          <span class="icon-globe recruit-url">
                            <? $txt = get_field('company_url'); if($txt){ ?>
                              <a href="<? echo $txt; ?>" target="_blank"><? echo $txt; ?></a>
                            <? } ?>
                          </span>
                          <time class="entry-date icon-clock recruit-date" datetime="<?php the_time('c') ;?>">
                            <span><?php the_time('Y年n月j日') ;?></span>
                          </time>
                        </div>
                        <h3 class="recruit-h3"><span>会社の雰囲気</span></h3>
                        <div class="recruit-image-wrap">
                          <?php $image = get_field('company_image1'); if( !empty($image) ): ?>
                            <div class="recruit-image">
                              <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                              <span><?php echo $image['caption']; ?></span>
                            </div>
                          <?php endif; ?>
                          <?php $image = get_field('company_image2'); if( !empty($image) ): ?>
                            <div class="recruit-image">
                              <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                              <span><?php echo $image['caption']; ?></span>
                            </div>
                          <?php endif; ?>
                          <div class="clear"></div>
                        </div>
                      <?php endif ?>
                      <div class="recruit-content"><?php the_content(); //本文 ?></div>
                      <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                        <h3 class="recruit-h3"><span>求人情報</span></h3>
                        <table class="recruit-table">
                          <tbody>
                            <tr>
                              <th colspan="2">会社名</th>
                              <td>
                                <? $txt = get_field('company-name'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                              <tr>
                                <th colspan="2">勤務地</th>
                                <td>
                                  <? $txt = get_field('company-address'); if($txt){ ?>
                                  <? echo $txt; ?>
                                  <? } ?>
                                </td>
                              </tr>
                              <tr>
                                <th colspan="2">事業内容</th>
                                <td>
                                  <? $txt = get_field('company-business'); if($txt){ ?>
                                  <? echo $txt; ?>
                                  <? } ?>
                                </td>
                              </tr>
                            <tr>
                              <th rowspan="3" colspan="1">求人概要</th>
                                <th colspan="1">募集職種</th>
                                <td>
                                  <? $txt = get_field('company-recruit'); if($txt){ ?>
                                  <? echo $txt; ?>
                                  <? } ?>
                                </td>
                            </tr>
                            <tr>
                              <th colspan="1">業務内容</th>
                              <td>
                                <? $txt = get_field('company-content'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="1">求める能力</th>
                              <td>
                                <? $txt = get_field('company-skill'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th rowspan="5" colspan="1">企業情報</th>
                                <th colspan="1">本社所在地</th>
                                <td>
                                  <? $txt = get_field('company-office'); if($txt){ ?>
                                  <? echo $txt; ?>
                                  <? } ?>
                                </td>
                            </tr>
                            <tr>
                              <th colspan="1">関連業界</th>
                              <td>
                                <? $txt = get_field('company-industry'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="1">社員数</th>
                              <td>
                                <? $txt = get_field('company-employee'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="1">設立年月</th>
                              <td>
                                <? $txt = get_field('company-establish'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="1">創業者</th>
                              <td>
                                <? $txt = get_field('company-founder'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                            <tr>
                              <th colspan="2">募集の特徴</th>
                              <td>
                                <? $txt = get_field('company-character'); if($txt){ ?>
                                <? echo $txt; ?>
                                <? } ?>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      <?php endif ?>
                    </div>  
                  <?php endwhile; else: //投稿が存在しない場合 ?>
                    <p>記事がありません</p>
                  <?php endif; ?>

                </div>
                <?php if ( !post_password_required( $post->ID ) ) : // パスワード保護?>
                  <div id="sidebar">


                    <?php  $location = get_field('google_map'); if( !empty($location) ):?>
                      <?php get_template_part('google_map');?>
                      <h3 class="recruit-h3"><span>地図</span></h3>
                      <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                      </div>
                      <div class="recruit-map"><span class="icon-map"></span><a href="http://maps.google.com/maps?q=<?php echo $location['address']; ?>" target="_blank"><?php echo $location['address']; ?></a></div>
                    <?php endif; ?>
                    <h3 class="recruit-h3"><span>募集職種</span></h3>
                    <ul class="recruit-job">
                      <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                          foreach($posttags as $tag) {
                            echo '<li><div class="recruit-tag"><span class="icon-head"></span>' . $tag->name . '</div></li>';
                          }
                        }
                      ?>
                    </ul>
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
              </div>
            </div>
          </div>
        </div>
        <?php get_footer(); //フッター ?>
    </div>
  </body>
</html>
