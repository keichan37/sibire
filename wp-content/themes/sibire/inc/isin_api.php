<?php
/**
 * 求人投稿処理
 */
function isin_post_jobs($data) {

    $base_url = get_field("isin_base_url", "option");
    $api = "/api/jobs";

    $result = call_auth_required_api( $base_url, $api, $data, 'POST');

    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
        return false;
    } else {
        add_admin_message( "アプリへのデータ登録が成功しました。(ID:".$result["data"]["id"].")".print_r($result, true));
    }

    // 登録済みの求人IDを返す
    return $result["data"]["id"];
}

/**
 * 求人更新処理
 */
function isin_update_jobs ($jobs_id, $data) {

    $base_url = get_field("isin_base_url", "option");
    $api = "/api/jobs/".$jobs_id;

    $result = call_auth_required_api( $base_url, $api, $data, 'PUT');

    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
        return false;
    } else {
        add_admin_message( "アプリデータの更新が成功しました。(ID:".$result["data"]["id"].") job_id=".$jobs_id.print_r($data, true).print_r($result, true));
    }

    // 登録済みの求人IDを返す
    return $result["data"]["id"];
}

/**
 * 求人更新処理
 */
function isin_delete_jobs ($jobs_id) {
    $data = null;
    $base_url = get_field("isin_base_url", "option");
    $api = "/api/jobs/".$jobs_id;

    $result = call_auth_required_api( $base_url, $api, $data, 'DELETE');
    
    if (isset($result["error"])) {
        add_admin_message( $result["error_description"], "error");
        return false;
    } else {
        add_admin_message( "アプリデータの削除が成功しました。(ID:".$jobs_id.")".$jobs_id.print_r($data, true).print_r($result, true));
    }
    return true;
}
/**
 * トークンを取得
 */
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

    $result = call_api( $base_url, $api, $data, $header, 'POST');

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

/**
 * レフレッシュトークンを利用して、トークンをh崇徳
 */
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

    $result = call_api( $base_url, $api, $data, $header, 'POST');

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

function call_api( $base_url, $api, $data, $header, $method = 'POST') {

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $base_url.$api);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method); // post
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

/**
 * トークンの取得、リフレッシュトークンなどを考慮してAPIを呼び出す処理
 */
function call_auth_required_api ( $base_url, $api, $data, $method = 'POST') {

    $token = isin_get_token();
    
    $header = [
        'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
        'Accept: application/json',
        'Content-Type: application/json',
    ];

    $result = call_api( $base_url, $api, $data, $header, $method);
    
    if(isset($result["message"]) && $result["message"] == "Unauthenticated."){ // ステータスコード返すようにAPIカエテホシイ
        // フレッシュトークンを使って再度トライ
        $token = isin_refresh_token();
        $header = [
            'Authorization: Bearer '.$token,  // 前準備で取得したtokenをヘッダに含める
            'Accept: application/json',
            'Content-Type: application/json',
        ];
        $result = call_api( $base_url, $api, $data, $header, $method);
    }
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
    $api_message = get_theme_mod('_isin_api_message');

    foreach ($api_message as $message){
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