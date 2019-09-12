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

function save_post_recruit_api_all( $post_ID, $post, $update ) {
    isin_post_jobs($post);
}

?>