<?php
/**
 * 求人投稿処理
 */
function isin_post_jobs($post) {
    if($post->post_status != "publish"){
        return false;
    }

    $token = isin_get_token();

    $base_url = get_field("isin_base_url", "option");
    $api = "/api/jobs";

    /* ここをうまく合わせて欲しい TOあぶちゃん*/
    $data = [
        "image_url"=> get_the_post_thumbnail_url(get_the_ID(),'large'),
        "title"=> get_field('company-name'),
        "kyuuyo_bikou"=> get_field('company-character'),
        "kinmuchi"=> get_field('company-address'),
        "shigotonaiyou"=> get_field('company-content'),
        "koyoukeitai_id"=>1,
        "positionname"=> get_field('company-recruit'),
        "kaisha_mei"=> get_field('company-name'),
        "fukuri"=> get_field('company-workinghours'),
        "kaisha_jigyounaiyou"=> get_field('company-business'),
        "kaisha_address"=> get_field('company-address')
    ];

    $header = [
        'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
        'Accept: application/json',
        'Content-Type: application/json',
    ];

    $result = call_api( $base_url, $api, $data, $header);
    
    if(isset($result["message"]) && $result["message"] == "Unauthenticated."){
        echo "リフレッシュトークンを使うのだ";
        // フレッシュトークンを使って再度トライ
        $token = isin_refresh_token();
        $header = [
            'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
            'Accept: application/json',
            'Content-Type: application/json',
        ];
        $result = call_api( $base_url, $api, $data, $header);
    }

    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
    } else {
        // update_field('isin_jobs_id', $result["data"]["id"], $post->ID );
        add_admin_message( "アプリへのデータ連携が成功しました。(ID:".$result["data"]["id"].")");
    }
}

function isin_get_token($retry = false){

    // 共通設定のアクセストークンを取得
    $token = get_field("isin_access_token", "option");
    $refresh_token = get_field("isin_refresh_token", "option");
    
    /* トークンが設定されていた場合でかつ、リトライフラグがfalseの場合 */
    if(!empty($token) && $token != "" 
        && !empty($refresh_token) && $refresh_token != ""
        && $retry == false) {
        return $token;
    }

    /* トークンが取得されていなかった場合 */
    $base_url = get_field("isin_base_url", "option");
    $api = '/oauth/token';
    $client_id = get_field("isin_client_id", "option");
    $client_secret = get_field("isin_client_secret", "option");
    $username = get_field("isin_username", "option");
    $password = get_field("isin_password", "option");

    $data = [
        'grant_type'=>  'password',
        'client_id' =>  $client_id,
        'client_secret' =>  $client_secret,
        'username' =>  $username,
        'password' =>  $password,
    ];
    
    $header = [
        'Content-Type: application/json',
    ];

    $result = call_api( $base_url, $api, $data, $header);

    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
    } else {
        add_admin_message( "アクセストークンの取得に成功しました。");
    }

    $access_token = $result["access_token"];
    $refresh_token = $result["refresh_token"];

    /* 共通設定を更新 */
    update_field("isin_access_token", $access_token, "option");
    update_field("isin_refresh_token", $refresh_token, "option");

    return $result["access_token"];
}

function isin_refresh_token(){

    // 共通設定のリフレッシュトークンを取得
    $refresh_token = get_field("isin_refresh_token", "option");
        
    /* トークンが取得されていなかった場合 */
    $base_url = get_field("isin_base_url", "option");
    $api = '/oauth/token';
    $client_id = get_field("isin_client_id", "option");
    $client_secret = get_field("isin_client_secret", "option");

    $data = [
        'grant_type'=>  'password',
        'client_id' =>  $client_id,
        'client_secret' =>  $client_secret,
        'refesh_token' =>  $refresh_token,
    ];
    
    $header = [
        'Content-Type: application/json',
    ];

    $result = call_api( $base_url, $api, $data, $header);

    if(isset($result["error"])){
        add_admin_message( $result["error_description"], "error");
        // それでもエラーならリトライ
        $result = isin_get_token(true);
    }

    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
    } else {
        add_admin_message( "アクセストークンの取得に成功しました。");
    }

    $access_token = $result["access_token"];
    $refresh_token = $result["refresh_token"];

    /* 共通設定を更新 */
    update_field("isin_access_token", $access_token, "option");
    update_field("isin_refresh_token", $refresh_token, "option");

    return $result["access_token"];
}

function call_api( $base_url, $api, $data, $header) {

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $base_url.$api);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST'); // post
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data)); // jsonデータを送信
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header); // リクエストにヘッダーを含める
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, true);

    $response = curl_exec($curl);

    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $header = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    $result = json_decode($body, true);

    curl_close($curl);

    return $result;
}

function add_admin_message($message, $status = "updated")
{
    $api_message = get_option('_isin_api_message');
    if(!$api_message){
        $api_message = array();
    }
    $api_message[] = [
        "message" => $message,
        "status" => $status,
    ];

    set_theme_mod('_isin_api_message', $api_message);
}

add_action('admin_notices', 'show_admin_message');
function show_admin_message(){
    $api_messages = get_theme_mod('_isin_api_message');

    foreach ($api_messages as $message){
        echo '<div class="'.$message["status"].'"><p>'.$message["message"].'</p></div>';
    }
    // クリア
    set_theme_mod('_isin_api_message', array());
}

/* 

function qiita_post_jobs() {
    $token = 'f6f8c09862f3f341b9de299fbaedbbe20748a1ee'; // 設定されてなかったら設定
    $base_url = "https://qiita.com";
    $api = "/api/v2/items";

    $data = [
        'body' => 'example',
        'coediting' => false,
        'private' => true,      // テストで作る時は限定公開で
        'title'=> 'sample test',
        'tags' => [
            [
                'name' => 'PHP',
                'versions' => ["4.3.0",">="]
            ],
            [
                'name' => 'sample',
            ]
        ]
    ];

    $header = [
        'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
        'Content-Type: application/json',
    ];
    $result = call_api( $base_url, $api, $data, $header);
    curl_close($curl);
    echo "<h1>テスト結果</h1>";
    echo "<pre>";
    var_dump($result);
    echo "</pre>";
}
*/

?>
