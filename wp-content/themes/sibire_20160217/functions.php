<?php

/* アイキャッチ */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 225, 140, true );
/* 投稿に属性追加 */
/* add_post_type_support( 'post', 'page-attributes' ); */
/* コメントフィード削除 */
remove_action('wp_head', 'feed_links_extra', 3);
/* リモート投稿用リンク削除 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
/* WPのバージョン削除 */
remove_action('wp_head','wp_generator');
/* パラメータリンクの削除 */
remove_action('wp_head', 'wp_shortlink_wp_head');
/* prev next 削除 */
remove_action('wp_head','adjacent_posts_rel_link_wp_head',10);

// WPのバージョン情報削除
function remove_wp_ver( $src ) {
	if (strpos( $src, 'ver=' . get_bloginfo( 'version' ) )) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter( 'style_loader_src', 'remove_wp_ver', 9999 );
add_filter( 'script_loader_src', 'remove_wp_ver', 9999 );

/* 投稿画面 ページ分割ボタン追加 */
function page_split_buttons($buttons){
    // wp_page ページ分割ボタン
    array_push($buttons, "wp_page");
    return $buttons;
}
add_filter("mce_buttons", "page_split_buttons");

/* 現在ページ数と総ページ数取得 */
function show_page_number() {  
    global $pages, $page, $numpages;
    
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    if($paged>1&&$numpages>1){
    	echo ' ('. $paged.'/'.$numpages. ')'; 
    }
}  

/* 通常の「投稿」をメニューから削除（今回は不使用のため） */
function remove_menus () {
global $menu;
$restricted = array(__('Dashboard'), __('Posts'));
end ($menu);
while (prev($menu)){
$value = explode(' ',$menu[key($menu)][0]);
if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
}
}
add_action('admin_menu', 'remove_menus');

/* 投稿画面用のcssを追加 */
add_editor_style("editor.css");

?>
