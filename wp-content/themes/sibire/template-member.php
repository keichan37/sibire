<?php /* Template Name: メンバーページ */ ?>

  <?php get_header(); ?>
    <div id="common">
      <div class="page-cover scroll-cover">
        <h1 id="page-h1"><?php the_title(); ?></h1>
      </div>
      <div class="container">
        <div class="page-wrap">
          <?php while(have_posts()): the_post(); ?>
            <section>
              <div class="page-content">
                <?php the_content(); //本文 ?>
                <?php $users = get_users(
                  array(
                    'orderby' => 'meta_value',
                    'order' => 'ASC',
                    'meta_key' => 'sort',
                  ));
                ?>
                <div class="authors">
                <?php foreach($users as $user) {
                  $uid = $user->ID;
                ?>
                  <div class="author">
                    <?php echo get_avatar( $uid ,228 ); ?>
                    <strong><?php echo $user->last_name ; ?><?php echo $user->first_name ; ?></strong>
                    <p>
                      <?php echo $user->user_description ; ?>
                      <?php /* 改行あり
                        <?php echo wpautop(get_the_author_meta('user_description')); ?>
                      */ ?>
                    </p>
                    <?php if ($user->twitter): ?>
                      <a class="twitter" href="https://twitter.com/<?php echo $user->twitter; ?>" target="_blank">Twitter</a>
                    <?php endif; ?>
                    <?php if ($user->facebook): ?>
                      <a class="facebook" href="https://facebook.com/<?php echo $user->facebook; ?>" target="_blank">Facebook</a>
                    <?php endif; ?>
                    <?php if( in_array( 'editor', $user->roles ))://編集者のみ ?>
                      <a class="post" href="<?php echo get_bloginfo("url") . '/?author=' . $uid ?>">記事一覧</a>
                    <?php endif; ?>
                    <?php if ($user->user_url): ?>
                      <a class="post" href="<?php echo $user->user_url ; ?>">くわしくはこちら</a>
                    <?php endif; ?>
                  </div>
                <?php } ?>
                </div>
              </div>
            </section>
          <?php endwhile; ?>
          <?php wp_nav_menu( array('menu' => 'page_nav','container' => 'nav' ,'menu_class' => 'page-nav' )); ?>
          <?php get_template_part('breadcrumb'); //パンくずリスト ?>
        </div>    
      </div>    
      
    </div>
    <?php get_footer(); ?>
