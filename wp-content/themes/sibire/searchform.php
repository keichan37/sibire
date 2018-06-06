<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
  <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="例: システムエンジニア"/>
  <div class="submit-wrap"><input type="submit" id="searchsubmit" value="検索する" /></div>
</form>
