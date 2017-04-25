<?php /* Template Name: カスタム投稿タイプ一覧ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <?php
          $category = get_the_category();
          $cat_id   = $category[0]->cat_ID;
          $cat_name = $category[0]->cat_name;
          $cat_name2 = $category[1]->cat_name;
          $cat_slug = $category[0]->category_nicename;
        ?>
      <div class="common-cover custom-field <? echo $cat_name ?>">
        <div class="container">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">
            <?php
              $args = array(
                'posts_per_page' => -1,
                'post_type' => array($cat_name,$cat_name2),
                'post_status' => 'publish',
                'has_password' => false,
              );
              $postslist = get_posts($args);
              foreach ($postslist as $post) : setup_postdata($post);
            ?>
            <?php
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
            ?>
            <a href=<?php echo get_permalink(); ?> class="common-grid <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>">
              <div class="common-grid-img"
                <?php if (has_post_thumbnail()): ?>
                  style="background-image: url(<?php echo $thumbnail_url[0]; ?>);"
                <?php endif; ?>
              >
              </div>
              <h3><?php the_title(); ?></h3>
              <div class="common-grid-text-wrap">
                <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
                <time class="common-grid-time"><?php the_date('Y.m.d'); ?></time>
              </div>
              <span class="common-grid-tag <?php echo esc_html(get_post_type_object($post->post_type)->name); ?>"><?php echo esc_html(get_post_type_object($post->post_type)->label); ?></span>
            </a>

            <?php 
              endforeach; 
              wp_reset_postdata();
            ?>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>


            <?php endwhile; else: //投稿が存在しない場合 ?>
              <p>記事がありません</p>
            <?php endif; ?>
          </div>
        </div>    
        <div class="common-right">
          <?php get_template_part('partials/category'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
