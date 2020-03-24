<?php /* Template Name: 法人向けページ */ ?>

  <?php get_header(); ?>
    <div id="common">

      <?php
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'large', true); //アイキャッチのURL取得
      ?>
      <h1 class="corporations-eyecatch">
        <img src="<?php echo $thumbnail_url[0]; ?>" alt="東京にこだわらない働き方">
      </h1>
      <div id="corporations" class="container">
        <div class="section">
          <h2>イベントの企画・運営</h2>
          <p>「OFF TOKYO」を加速するためのイベントを開催。<br />
              拠点に就業する人員の獲得、人材誘致、企業誘致など、<br />
              各社・各エリアが求める内容により、イベントの企画を提案し、運営します。</p>
          <a href="javascript:void(0);" class="button">その他のイベントを見る</a>
        </div>
        <div class="section">
          <h2>「OFF TOKYO®」を絡めた魅力化</h2>
          <p>
              OFF TOKYOを後押しする取り組みには、商標登録している「OFF TOKYO®」を絡めて魅力化します。<br />
              各エリアや企業のセールスポイントをつくり、欲しい人材を獲得できるお手伝いをします。<br />
              ターゲットの選定からロゴ、バナーなどクリエイティブの作成、記事や動画の作成など、ターゲットに届くコンテンツをつくり、情報発信します。
          </p>
          <a href="javascript:void(0);" class="button">その他の事例を見る</a>
        </div>
        <div class="section">
          <h2>ターゲットに届く情報発信</h2>
          <p>
              シビレが有する「OFF TOKYOコミュニティ」（「東京にこだわらない働き方」に関心のある個人・企業群）に対し、情報発信します。<br />
              イベントやツアーの集客および、各種PRにご利用いただけます。
          </p>
          <ul>
            <li><a href="javascript:void(0);">宮崎</a></li>
            <li><a href="javascript:void(0);">佐賀</a></li>
            <li><a href="javascript:void(0);">徳島</a></li>
            <li><a href="javascript:void(0);">高知</a></li>
            <li><a href="javascript:void(0);">和歌山</a></li>
            <li><a href="javascript:void(0);">仙台</a></li>
          </ul>
          <a href="javascript:void(0);" class="button">その他の事例を見る</a>
        </div>
        <div class="section">
          <h2>人材紹介</h2>
          <p>
            企業やエリアにあった方を紹介します。
          </p>
          <a href="javascript:void(0);" class="button">その他の事例を見る</a>
        </div>
        <div class="section">
          <h2>発起人</h2>
          <p>
            <b>誰もが好きな場所でやりたい仕事ができるように。それが私たちがシビレる状態です</b>
            <br /><br />
            私たちは2014年に地方に関わり始め、多くの人たちのOFF TOKYO（東京にこだわらない働き方）を支援してきました。<br />
            その中で感じたのは、すべての人が好きな場所で、やりたい仕事ができる状態になることで、<br />
            アイデアは広がり、生産性も向上していくということ。<br />
            今、東京に一極集中する状態から、地方に目を向け、さまざまなリソースを生かして、新しいビジネスが生み出されています。<br />
            私たちは、ひとりひとりがシビレる場所を見つけ、シビレる仕事ができるよう、<br />
            さまざまなかたちで支援していきます。
          </p>
          <a href="javascript:void(0);" class="button">メンバー一覧</a>
        </div>
        <div class="section">
          <h2>掲載実績</h2>
          <a href="javascript:void(0);" class="button">掲載実績一覧</a>
        </div>
      </div>
      
    </div>
    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
