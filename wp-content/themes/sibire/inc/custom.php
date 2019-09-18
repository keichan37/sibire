<?php
// カスタム投稿タイプの追加
/*add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'recruit', // 投稿タイプ名の定義
    array(
    'labels' => array(
    'name' => __( '求人情報' ), // 表示する投稿タイプ名
    'singular_name' => __( '求人情報' )
    ),
    'public' => true,
    'menu_position' =>5,
    )
    );
}*/

add_action( 'admin_init' , 'my_admin_init' );
function my_admin_init() {
	add_action( 'save_post_recruit', 'save_post_recruit_api_all', 10, 3 );
}
/**
 * 求人情報保存時にiSIN APIを呼び出す
 */
function save_post_recruit_api_all( $post_ID, $post, $update ) {

    // 求人IDを取得
    $jobs_id = get_post_meta($post->ID, "field_isin_jobs_id", true);
    if($post->post_status != "publish"){
        if($jobs_id){
            // アプリ登録済で、公開じゃなくなった場合は、アプリからはデータを削除する
            isin_delete_jobs($jobs_id);
            delete_post_meta($post->ID, 'field_isin_jobs_id');
        }
        // 公開の場合だけ処理
        return false;
    }

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
        "kaisha_address"=> get_field('company-address'),
        "chiiki_id"=> get_field('city'),
        "kinmujikan_kaishi"=> 0,
        "kinmujikan_shuuryou"=>0,
        "kyuuyo"=>"",
        "kyuuyo_bikou"=>"",
        "boshuushikaku"=>""

    ];

    if(empty($jobs_id)){
        // 求人IDが設定されていなければ新規作成
        $jobs_id = isin_post_jobs($data);
        update_post_meta($post->ID, 'field_isin_jobs_id', $jobs_id);
    } else {
        // 求人IDが設定されていれば更新
        $jobs_id = isin_update_jobs($jobs_id, $data);
    }
}

//　求人ID保存用のカスタムフィールド の追加

function add_isin_custom_fields(){
    add_meta_box(
        'custom_setting', //編集画面セクションのHTML ID
        'iSIN用データ', //編集画面セクションのタイトル、画面上に表示される
        'insert_isin_custom_fields', //編集画面セクションにHTML出力する関数
        'recruit', //投稿タイプ名
        'normal' //編集画面セクションが表示される部分
    );
}
add_action('admin_menu', 'add_isin_custom_fields');

// カスタムフィールドの入力エリア
function insert_isin_custom_fields(){
    global $post;
    //get_post_meta関数を使ってpostmeta情報を取得
    $isin_jobs_id = get_post_meta(
                     $post->ID, //投稿ID
                     'field_isin_jobs_id', //キー名
                     true //戻り値を文字列にする場合true(falseの場合は配列)
                 );
    echo '求人ID: <input type="text" name="field_isin_jobs_id" readonly value="'.$isin_jobs_id.'" /><br>';
}

?>
