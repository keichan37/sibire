<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
  <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="例: Ruby"/>
  <div class="submit-wrap"><input type="submit" id="searchsubmit" value="&#xf10d;" /></div>
<?php /*
<?php wp_dropdown_categories( 'show_option_all=カテゴリ選択' ); ?>
<?php $tags = get_tags(); if ( $tags ) : ?>
      <select name='tag' id='tag'>
          <option value="" selected="selected">タグ選択</option>
          <?php foreach ( $tags as $tag ): ?>
          <option value="<?php echo esc_html( $tag->slug);  ?>"><?php echo esc_html( $tag->name ); ?></option>
          <?php endforeach; ?>
      </select>
<?php endif; ?>
<input id="reset" type="reset" value="リセット">
*/ ?>
</form>
