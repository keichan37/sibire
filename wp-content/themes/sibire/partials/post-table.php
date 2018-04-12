<ul class="post-table">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
    $cat = get_the_category(); // 情報取得
    $catId = $cat[0]->cat_ID; // ID取得
    $catName = $cat[0]->name; // 名称取得
    $catSlug = $cat[0]->category_nicename; // スラッグ取得
    $link = get_category_link($catId); // リンクURL取得
  ?>
  <li>

    <a href=<?php echo get_permalink(); ?>>
      <?php the_post_thumbnail('large'); ?>
      <div class="post-table-text">
        <?php get_template_part('partials/pr'); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
        <div class="post-table-info">
          <?php if(has_tag()==true) : ?>
            <span class="icon-tag"></span><span class="link-tag-wrap"><?php $posttags=get_the_tags();if($posttags){foreach($posttags as $tag){ if( $tag->slug == 'pr') continue; echo '<span class="link-tag">'.$tag->name.'</span> ';}} ?></span>
          <?php endif; ?>
          <span class="icon-watch"></span><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        </div>
      </div>
    </a>
  </li>
<?php endwhile; endif; ?>
</ul>
