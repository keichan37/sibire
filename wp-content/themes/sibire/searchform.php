<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
  <input type="text" value="" name="s" id="s" />
  <?php /* ?><?php wp_dropdown_categories( 'show_option_all=全てのカテゴリ' ); ?><?php */ ?>
  <div class="submit-wrap"><input type="submit" id="searchsubmit" value="検索する" /></div>
</form>
