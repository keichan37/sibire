<?php /* Template Name: 江戸川タマプロフィール*/ ?>
  <?php get_header(); ?>
      <div id="profile">
        <div class="profile-header">
          <div class="container">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/images/edogawatama-title.png" alt="自己紹介 江戸川タマ"></h1>
            <img class="edogawatama" src="<?php echo get_template_directory_uri(); ?>/images/edogawatama.png">
          </div>
        </div>
        <div class="container">
          <div class="profile-wrap">
            <div class="profile-box profile-table">
              <h3>江戸の時代に生まれ、200年以上生きる化け猫。 <br />日本各地を放浪しながら、自分にいちばんピッタリな、<br />シビレる住みかを探している。</h3>
              <table>
                <tbody>
                  <tr>
                    <th>なまえ</th>
                    <td>江戸川タマ</td>
                  </tr>
                  <tr>
                    <th>うまれ</th>
                    <td>江戸の長屋でうまれる</td>
                  </tr>
                  <tr>
                    <th>年齢</th>
                    <td>200歳・・からは数えてニャイ</td>
                  </tr>
                  <tr>
                    <th>すきなもの</th>
                    <td>瀬戸内海でとれる魚</td>
                  </tr>
                  <tr>
                    <th>しゅみ</th>
                    <td>日本国内をたびすること</td>
                  </tr>
                  <tr>
                    <th>ライバル</th>
                    <td>犬</td>
                  </tr>
                  <tr>
                    <th>座右の銘</th>
                    <td>ネコ科の一番小さな動物は最高傑作である。 <br />（レオナルド・ダ・ヴィンチ先生）</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h2><img src="<?php echo get_template_directory_uri(); ?>/images/profile-twitter.png"></h2>
            <div class="profile-box profile-twitter">
              <a class="twitter-timeline" href="https://twitter.com/sibire_inc" data-chrome="noheader nofooter" data-width="550px" data-widget-id="739715991165247488">@sibire_incさんのツイート</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <?php get_template_part('breadcrumb'); //パンくずリスト ?>
          </div>
        </div>
      </div>
      
      <?php get_footer(); ?>
      </div>
    </div>
  </body>
</html>
