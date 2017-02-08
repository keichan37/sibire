<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74153100-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
/**
* Google アナリティクスでアウトバウンド リンクのクリックをトラッキングする関数。
* この関数では有効な URL 文字列を引数として受け取り、その URL 文字列を
* イベントのラベルとして使用する。transport メソッドを 'beacon' に設定すると
* 対応ブラウザでは 'navigator.sendBeacon' を使ってヒットが送信される。
*/
var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>
