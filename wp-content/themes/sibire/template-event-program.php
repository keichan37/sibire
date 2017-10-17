<?php /* Template Name: イベントLP プログラム */ ?>
  <?php get_header(); ?>
    <div id="template-event" class="template-event-program">
      <div id="sub-cover">
        <img class="cover-title" src="<?php echo get_template_directory_uri(); ?>/images/template-event/cover-title.svg" alt="OFF TOKYO MEETUP 2017"/>
        <h1><?php the_title(); ?></h1>
      </div>
      <section class="program">
        <time>12:00</time>
        <h2>会場OPEN</h2>
      </section>
      <section class="program">
        <time>12:30〜13:00</time>
        <strong>Round1</strong>
        <h2>OFF TOKYOマッチ！</h2>
        <p>プロレスのゴングでOFF TOKYO MEETUP スタート!</p>
        <figure>
          <img src="<?php echo get_template_directory_uri(); ?>/images/template-event/program/avatar-hidaka.jpg" alt="日高郁人">
          <figcaption>日高郁人</figcaption>
        </figure>
      </section>
      <section class="program">
        <time>13:00〜14:00</time>
        <strong>Round2</strong>
        <h2>トークセッション 「地域を変えたイノベーター対談」</h2>
        <p>Ruby開発者・まつもとゆきひろ氏×面白法人カヤック・柳澤大輔氏。<br />東京を離れてもイノベーションを起こし続ける方法や背景を語ります</p>
      </section>
      <section class="program">
        <time>14:00 〜14:20</time>
        <strong>Round3</strong>
        <h2>IT先進エリアによるピッチプレゼン</h2>
        <p>IT先進エリア10自治体が、<br />自エリアの魅力とアピールポイントをピッチ形式で語ります。</p>
      </section>
      <section class="program">
        <time>14:20〜14:50</time>
        <strong>Round4</strong>
        <h2>エンジニア“スーパープレゼンテーション”(1)</h2>
        <h3>「OSSを仕事にする、書き続ける技術」</h3>
      </section>
      <section class="program">
        <time>14:50 〜15:20</time>
        <strong>Round5</strong>
        <h2>企業LT（ライトニングトーク)(1)</h2>
        <p>1社7分！自社の魅力とプロダクト、<br />開発手法などを限られた時間で語ります。(3社)</p>
      </section>
      <section class="program">
        <time>15:20〜15:50</time>
        <strong>Round6</strong>
        <h2>エンジニア“スーパープレゼンテーション”(2)</h2>
        <h3>「“エンタメよりサービス”Webがバックボーンのゲーム運営」(仮)</h3>
      </section>
      <section class="program">
        <time>15:50〜16:30</time>
        <strong>Round7</strong>
        <h2>企業LT（ライトニングトーク)(2)</h2>
        <p>1社7分！自社の魅力とプロダクト、<br />開発手法などを限られた時間で語ります。(4社)</p>
      </section>
      <section class="program">
        <time>16:30〜17:00</time>
        <strong>Round8</strong>
        <h2>エンジニア“スーパープレゼンテーション”(3)</h2>
        <h3>「東京を離れた新しい働き方＆働き方UPDATE」（仮）</h3>
      </section>
      <section class="program">
        <time>17:00〜18:00</time>
        <strong>Round9</strong>
        <h2>OFF TOKYO PARTY!</h2>
        <p>参加者も企業もエリア担当者も、会場全体で地酒を楽しみながら全員で乾杯！<br />会場で同時実施の「地酒ランキング」の発表も</p>
      </section>
      <a class="scroll-up-button icon icon-arrow-up" href="#"></a>
      <div class="section participate participate3">
        <a class="button" href="entry#page-h1">参加する</a>
        <center><a class="" href="mailto:event@sibire.co.jp">イベントに関するお問い合わせはこちら</a></center>
        <footer class="sns-footer">
          <?php get_template_part('partials/sns-share'); ?>
          <small>&copy; <?php echo date("Y"); ?> sibire ,inc. All Rights Reserved.</small>
        </footer>
      </div>
    </div>
    <?php get_footer(); ?>
