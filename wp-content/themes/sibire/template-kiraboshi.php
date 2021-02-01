<?php /*
  Template Name: キラ☆まとめページ
*/ ?>

  <?php get_header(); ?>
    <div id="kiraboshi">

      <div class="container">
        <div class="cover">
          <h1>
            <a href="<?php echo get_the_permalink(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/template-kiraboshi/h1.png" alt="<?php the_title(); ?>" >
            </a>
          </h1>
          <img class="illust" src="<?php echo get_template_directory_uri(); ?>/images/template-kiraboshi/illust.png" alt="" >
          <?php the_content(); ?>
        </div>
        <div class="articles topic">
          <ul>
            <li>
              <?php
                $args = array(
                  'paged' => $paged,
                  'post_type' => 'interview',
                  'posts_per_page' => 1,
                  'tag_id' => 4822,
                  'post_status' => 'publish',
                  'has_password' => false,
                ); ?>
              <?php query_posts( $args ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
                ?>
                <a class="article" href="<?php the_permalink(); ?>">
                  <strong class="kiraboshi-company">キラぼし企業</strong>
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo $thumbnail_url[0]; ?>" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
                  <?php endif; ?>
                  <div class="article-content">
                    <b><?php echo nl2br(get_post_meta($post->ID, 'prefecture', true)); ?></b>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_query();?>
            </li>
            <li>
              <?php
                $args = array(
                  'paged' => $paged,
                  'post_type' => 'event',
                  'posts_per_page' => 1,
                  'tag_id' => 29,
                  'post_status' => 'publish',
                  'has_password' => false,
                ); ?>
              <?php query_posts( $args ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
                ?>
                <a class="article" href="<?php the_permalink(); ?>">
                  <strong class="kiraboshi-person">キラぼしパーソン</strong>
                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo $thumbnail_url[0]; ?>" />
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
                  <?php endif; ?>
                  <div class="article-content">
                    <b><?php echo nl2br(get_post_meta($post->ID, 'prefecture', true)); ?></b>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              <?php endwhile; ?>
              <?php wp_reset_query();?>
            </li>
          </ul>
        </div>
        <div class="articles">
          <ul>
              <?php
                $args = array(
                  'paged' => $paged,
                  'post_type' => 'interview',
                  'posts_per_page' => -1,
                  'tag_id' => 4842,
                  'post_status' => 'publish',
                  'has_password' => false,
                ); ?>
              <?php query_posts( $args ); ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
                ?>
                <li>
                  <a class="article" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()): ?>
                      <img src="<?php echo $thumbnail_url[0]; ?>" />
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/dummy.png" />
                    <?php endif; ?>
                    <div class="article-content">
                      <b><?php echo nl2br(get_post_meta($post->ID, 'prefecture', true)); ?></b>
                      <h3><?php the_title(); ?></h3>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_query();?>
          </ul>
      </div>
      
    </div>
    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
