<?php /* Template Name: 新イベントページテンプレート*/ ?>
  <?php get_header(); ?>
      <div id="event" class="event-background">
        <div class="event-box">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail(full); ?>
            <div class="event-box-text">
              <?php the_content(); //本文 ?>
            </div>
          <?php endwhile; else: ?>
            <p>イベントがありません</p>
          <?php endif; ?>


        </div>
      </div>
      
      <div class="event-footer">
        <?php get_footer(); ?>
      </div>
      </div>
    </div>
  </body>
</html>
