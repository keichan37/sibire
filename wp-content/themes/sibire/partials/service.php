<?php if ( in_array(get_post_type(), array('recruit')) ): ?>
<div id="lp" class="single-service">
  この求人について詳しく聞く
  <a class="button button-small" href="https://sibire-agent.youcanbook.me/<? $txt = get_field('subtitle'); if($txt){ ?>/?JOBTITLE=<?php the_title(); ?>(<? echo $txt; ?>)<? } ?>&JOBID=<?php the_ID(); ?>" target="_blank" rel="nofollow">オンラインWeb面談に申し込み</a>
  登録1分！日にちを選んでエントリー
</div>
<?php endif; ?>
