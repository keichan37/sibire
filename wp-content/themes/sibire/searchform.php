<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
  <div>
    <input type="text" value="" name="s" id="s" />
    <?php $tags = get_tags(); if ( $tags ) : ?>
      <select name='tag' id='tag'>
        <option value="" selected="selected">タグ選択</option>
        <?php foreach ( $tags as $tag ): ?>
          <option value="<?php echo esc_html( $tag->slug);  ?>"><?php echo esc_html( $tag->name ); ?></option>
        <?php endforeach; ?>
      </select>
    <?php endif; ?>


    <input type="submit" id="searchsubmit" value="検索する" />
  </div>
</form>
