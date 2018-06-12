<div id="lp" class="single-service">
  <?php get_template_part('partials/title'); ?>
  <a class="button button-small" href="<?php echo get_permalink(272); ?><?php if ( in_array(get_post_type(), array('recruit')) ): ?><? $txt = get_field('subtitle'); if($txt){ ?>/?favorite=<? echo $txt; ?><? } ?><?php endif; ?>">サービスに申し込む</a>
</div>
