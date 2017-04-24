<?php /* Template Name: 投稿ページ */ ?>

  <?php get_header("lp"); ?>
    <div id="common">
      <div class="container">
        <div class="single-wrap">
          <?php get_template_part('breadcrumb'); ?>
          <div class="single-left">
            <?php while(have_posts()): the_post(); ?>
              <article>
                <span class="single-category"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
                <time class="single-date" datetime="<?php the_time('c') ;?>"><?php the_time('Y.n.j') ;?></time>
                <h1 class="single-title"><?php the_title(); ?></h1>
                <? $txt = get_field('subtitle'); if($txt){ ?><h2 class="single-subtitle"><? echo $txt; ?></h2><? } ?>
                <?php get_template_part('partials/sns-share'); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
                ?>
                <?php if (has_post_thumbnail()): ?>
                  <img class="single-eyecatch" src="<?php echo $thumbnail_url[0]; ?>">
                <?php else: ?>
                  <img class="single-eyecatch" src="<?php echo get_template_directory_uri(); ?>/images/common/no-image-eyecatch.png">
                <?php endif; ?>
                <div class="single-content mce-content-body">
                  <?php the_content(); //本文 ?>
                  <h4>求人情報</h3>
                  <div class="mce-content-body">
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

                  </div>
                </div>
              </article>
            <?php endwhile; ?>
          </div>
          <div class="single-right">
            <?php get_template_part('partials/sidebar'); ?>
          </div>
          <?php get_template_part('partials/registration'); ?>
        </div>    
      </div>    
      
    </div>
    <?php get_template_part('partials/sns-footer'); ?>
    <?php get_footer("lp"); ?>
