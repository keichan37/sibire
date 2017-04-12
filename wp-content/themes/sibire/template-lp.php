<?php /* Template Name: サービス紹介LP*/ ?>

  <?php get_header("renewal"); //ヘッダーリニューアル?>
    <div id="lp">
      <div class="lp-cover">
        <h1><?php the_title(); ?><?php show_page_number(); ?><br /><img src="<?php echo get_template_directory_uri(); ?>/images/template-service/lp-offtokyo.png" alt="OFF TOKYO"></h1>
      </div>
      <section>
        <div class="lp-title-wrap">
          <h2>sibire<b>3</b>つの特徴</h2>
        </div>
        <div class="lp-characteristic-wrap lp-characteristic-wrap-right first-child">
          <div class="lp-characteristic-img"><img class="slide-left" src="<?php echo get_template_directory_uri(); ?>/images/template-service/lp-characteristic-first-image.png" alt=""></div>
          <div class="lp-characteristic-inner">
            <h3>東京以外のシビレる求人に出会える</h3>
            <p>東京だと探しやすい求人も、エリアの垣根を越えると、<br />
               探し方もわからず、見つけにくい。 <br />
               sibireはあなたが“シビレる”求人を発掘して紹介します。 </p>
          </div>
        </div>
        <div class="lp-characteristic-wrap lp-characteristic-wrap-left second-child">
          <div class="lp-characteristic-img"><img class="slide-right" src="<?php echo get_template_directory_uri(); ?>/images/template-service/lp-characteristic-second-image.png" alt=""></div>
          <div class="lp-characteristic-inner">
            <h3>キャリアを落とさず転職できる</h3>
            <p>OFF TOKYOして、キャリアダウンしたら意味がない。<br />
               東京で培ったキャリアとスキルが生かせる企業を<br />
               厳選して紹介、転職が成功するよう伴走します。</p>
          </div>
        </div>
        <div class="lp-characteristic-wrap lp-characteristic-wrap-right last-child">
          <div class="lp-characteristic-img"><img class="slide-left" src="<?php echo get_template_directory_uri(); ?>/images/template-service/lp-characteristic-last-image.png" alt=""></div>
          <div class="lp-characteristic-inner">
            <h3>スキマ時間で活動できる </h3>
            <p>対面はもちろん、メールやハングアウト、Skypeなど<br />
               やりやすい方法で転職活動していただけます。<br />
               エリアが離れていても、仕事を辞めなくて大丈夫。</p>
          </div>
        </div>
      </section>
      <section>
        <div class="lp-title-wrap">
          <h2>申し込み後の流れ</h2>
        </div>
        <div class="lp-flow-wrap">
          <ul class="lp-flow slide-top">
            <li class="first-child">
              <h4>伝える</h4>
              <p>メールやメッセージ、電話やテレビ会議などでエリアや時期、仕事の希望を教えてください</p>
            </li>
            <li class="second-child">
              <h4>選ぶ</h4>
              <p>全国各地、希望エリアからマッチする企業を紹介。sibireに掲載されていない企業もあります</p>
            </li>
            <li class="third-child">
              <h4>進める</h4>
              <p>シビレる！と感じた企業と直接会って話し、面接を進めていきます </p>
            </li>
            <li class="last-child">
              <h4>決める</h4>
              <p>希望の企業から内定が出たら、時期を決めてOFF TOKYO！おトクな制度があれば紹介します</p>
            </li>
          </ul>
        </div>
      </section>
      <div class="lp-registration-wrap">
        <a class="lp-registration" href="/registration">サービスに申し込む</a>
        <p>エンジニアのための転職を支援</p>
      </div>
      <section>
        <div class="lp-message-wrap">
          <div class="slide-bottom">
            <h3>sibireが目指す世界<br /><img src="<?php echo get_template_directory_uri(); ?>/images/template-service/lp-offtokyo.png" alt="OFF TOKYO"></h3>
            <p>「東京」という枠にはまらず働く。<br />
                それはきっと、今の時代、エンジニアだけが与えられる特権。 <br />
                東京で就職したからといって、永遠に東京に住み続ける必要はない。 <br />
                技術を習得したエンジニアこそ、 <br />
                好きな環境に身を置き、最先端の技術でやりたい開発をし、シビレるべきだ。 <br /><br />

                sibireは東京にこだわらない働き方を「OFF TOKYO」と提唱し、 <br />
                キャリアや条件を落とさず働くための支援をします。 
            </p>
          </div>
        </div>
      </section>
      <div class="lp-registration-wrap">
        <a class="lp-registration" href="/registration">サービスに申し込む</a>
        <p>エンジニアのための転職を支援</p>
      </div>
    </div>
        
    <?php get_footer("renewal"); //フッターリニューアル?>
