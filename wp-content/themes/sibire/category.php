<?php /* Template Name: カスタム投稿タイプ一覧ページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <?php $current_category = single_cat_title("", false); ?>
    <div id="common">
      <div class="common-cover category">
        <div class="container">
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          <h1><strong><?php single_cat_title(); ?></strong>カテゴリ一覧</h1>
        </div>
      </div>
      <div class="container">
        <div class="common-left">

          <div class="common-grid-wrap">
          <?php
            $category = get_the_category();
            $cat_slug = $category[0]->category_nicename;
            $args = array(
              'paged' => $paged,
              'category_name' => $current_category,
              'post_type' => array('recruit','interview','offer','column','event','niche'),
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
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

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata();?>
            <?php if (function_exists("pagination")) {
              pagination($custom_query->max_num_pages);
            } ?>

          </div>
        </div>    
        <div class="common-right">
          <?php get_template_part('partials/category'); ?>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
