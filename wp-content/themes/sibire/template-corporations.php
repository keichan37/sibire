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
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>イベントの企画・運営</h2>
          <p>「OFF TOKYO」を加速するためのイベントを開催。<br />
              拠点に就業する人員の獲得、人材誘致、企業誘致など、<br />
              各社・各エリアが求める内容により、イベントの企画を提案し、運営します。</p>

          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => 'event',
              'posts_per_page' => 10,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <div class="topic-summary owl-carousel">
            <?php while (have_posts()) : the_post(); ?>
              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
              ?>
              <a class="single-related" href="<?php the_permalink(); ?>">
                <img class="single-related-eyecatch owl-lazy" data-src="<?php echo $thumbnail_url[0]; ?>" />
                <h5><?php the_title(); ?></h5>
                <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
              </a>
            <?php endwhile; ?>
            </div>
          <?php wp_reset_query();?>

          <a href="/category/event" class="button">その他のイベントを見る</a>
        </div>
        <div class="section">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>「OFF TOKYO®」を絡めた魅力化</h2>
          <p>
              OFF TOKYOを後押しする取り組みには、商標登録している「OFF TOKYO®」を絡めて魅力化します。<br />
              各エリアや企業のセールスポイントをつくり、欲しい人材を獲得できるお手伝いをします。<br />
              ターゲットの選定からロゴ、バナーなどクリエイティブの作成、記事や動画の作成など、ターゲットに届くコンテンツをつくり、情報発信します。
          </p>
          <div class="topic-summary owl-carousel">
            <a class="single-related" href="/event/49022">
              <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/template-corporations/miyazaki.jpg" />
              <h5>＜OFF TOKYO×宮崎県＞Work！Relax！Sports！デュアルライフMeetup</h5>
              <p>出社前のサーフィン、気軽に山登り。メリハリをつけて仕事に超集中！</p>
            </a>
            <a class="single-related" href="/offtokyo/wakayama-careerfair">
              <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/template-corporations/wakayama.jpg" />
              <h5>OFF TOKYO 和歌山キャリアフェア</h5>
              <p>和歌山県の仕事と暮らしを体験できるイベントです。</p>
            </a>
            <a class="single-related" href="/event/55702">
              <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/template-corporations/manabi.jpg" />
              <h5>sibire Study Cafeスタート！#１は「ゲストハウス経営留学」</h5>
              <p>＜OFF TOKYO×Manabi-Stay＞3月5日、イベント開催</p>
            </a>
            <a class="single-related" href="/column/50022">
              <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/template-corporations/url.jpg" />
              <h5>学生向けイベント！10月24日、仙台で「エンジニアのキャリアの作り方」開催</h5>
              <p>異なるキャリアパスを描くエンジニア2名が、仕事のリアルを伝えます！</p>
            </a>
          </div>
          <a href="/tag/offtokyo" class="button">その他の事例を見る</a>
        </div>
        <div class="section">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>ターゲットに届く情報発信</h2>
          <p>
              シビレが有する「OFF TOKYOコミュニティ」（「東京にこだわらない働き方」に関心のある個人・企業群）に対し、情報発信します。<br />
              イベントやツアーの集客および、各種PRにご利用いただけます。
          </p>
          <ul class="prefectures">
            <li><a href="/tag/miyazaki">宮崎</a></li>
            <li><a href="/tag/saga">佐賀</a></li>
            <li><a href="/tag/tokushima">徳島</a></li>
            <li><a href="/tag/kochi">高知</a></li>
            <li><a href="/tag/wakayama">和歌山</a></li>
            <li><a href="/tag/sendai">仙台</a></li>
          </ul>
        </div>
        <div class="section">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>人材紹介</h2>
          <p>
            企業やエリアにあった方を紹介します。
          </p>
          <?php
            $args = array(
              'paged' => $paged,
              'post_type' => 'interview',
              'posts_per_page' => 4,
              'tag_id' => 4732,
              'post_status' => 'publish',
              'has_password' => false,
            ); ?>
          <?php query_posts( $args ); ?>
            <div class="topic-summary owl-carousel">
            <?php while (have_posts()) : the_post(); ?>
              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'medium', true);
              ?>
              <a class="single-related" href="<?php the_permalink(); ?>">
                <img class="single-related-eyecatch owl-lazy" data-src="<?php echo $thumbnail_url[0]; ?>" />
                <h5><?php the_title(); ?></h5>
                <p><?php echo nl2br(get_post_meta($post->ID, 'subtitle', true)); ?></p>
              </a>
            <?php endwhile; ?>
            </div>
          <?php wp_reset_query();?>
          <a href="/category/recruit" class="button">その他の事例を見る</a>
        </div>
        <div class="section">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
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
          <a href="/member" class="button">メンバー一覧</a>
        </div>
        <div class="section media">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>掲載実績</h2>
          <img class="single-related-eyecatch owl-lazy" src="<?php echo get_template_directory_uri(); ?>/images/template-corporations/logo.jpg" />
          <a href="/category/media" class="button">掲載実績一覧</a>
        </div>
        <div class="section contact">
          <svg version="1.1" class="border" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 81.2 5.7" style="enable-background:new 0 0 81.2 5.7;" xml:space="preserve">
            <g>
              <rect width="81.2" height="1.6"/>
              <rect y="2.4" width="81.2" height="0.8"/>
              <rect y="4" width="81.2" height="1.6"/>
            </g>
          </svg>
          <h2>お問い合わせ</h2>
          <?php echo do_shortcode('[contact-form-7 id="1242" title="シビレる企業、募集中！"]'); ?>
        </div>
      </div>
      
    </div>
    <div class="footer"> 
      <?php get_footer(); ?>
    </div>
