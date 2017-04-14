<?php /* Template Name: フロントページ */ ?>

  <?php get_header("lp"); //ヘッダーリニューアル?>
    <div id="common">
      <div class="container"></div>
      <div class="common-cover"></div>
      <div class="container">
        <div class="common-left">
          <div class="common-grid-wrap">
            <?php
              $args = array(
                'paged' => $paged,
                'post_type' => array('recruit','interview','offer','column','event','niche'),
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'has_password' => false,
              ); ?>
            <?php query_posts( $args ); ?>
              <?php while (have_posts()) : the_post(); 
               ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'thumbnail-size', true);
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
            <?php endwhile; ?>
          </div>
        </div>    
        <div class="common-right">
          <div style="background: #ffffff; height: 320px;"></div>
        </div>
      </div>    
      
    </div>    
    <?php get_footer("lp"); //フッターリニューアル?>
