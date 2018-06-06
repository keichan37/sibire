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
add_filter( 'wp_calculate_image_srcset', '__return_false' );
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

register_sidebars(1,
  array(
    'name' => 'サイドバー',
    'id' => 'sidebar-1',
    'description' => 'サイドバーに表示されます',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  )
);

register_sidebars(1,
  array(
    'name' => 'イベントレポート',
    'id' => 'event-report',
    'description' => 'OFF TOKYOまとめページに表示されます',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
  )
);

// 管理画面画面一覧表示 順番変更
function manage_posts_columns($columns) {
    $columns['subtitle'] = "サブタイトル";
    return $columns;
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
function add_column($column_name, $post_id) {
    if( $column_name == 'subtitle' ) {
        $stitle = get_post_meta($post_id, 'subtitle', true);
    }
    if ( isset($stitle) && $stitle ) {
        echo attribute_escape($stitle);
    } else {
        echo __('None');
    }
}
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );
function sort_posts_columns($columns){
	$columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => 'タイトル',
    'subtitle' => 'サブタイトル',
    'categories' => 'カテゴリ',
		'tags' => 'タグ',
		'date' => '日時'
	);
	return $columns;
}
add_filter( 'manage_posts_columns', 'sort_posts_columns' );

// エディタ内でphpファイルを読み込む
function Include_my_php($params = array()) {
  extract(shortcode_atts(array(
    'area' => 'sendai',
    'title' => '仙台',
    'file' => 'default'
  ), $params));
  ob_start();
  include(get_theme_root() . '/' . get_template() . "/$file.php");
  return ob_get_clean();
}
add_shortcode('partial-php', 'Include_my_php');


// 固定ページにカテゴリーを設定
function add_categorie_to_pages(){
register_taxonomy_for_object_type('category', 'page');
}
add_action('init','add_categorie_to_pages');

// 固定ページにタグを設定
function add_tag_to_page() {
register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_tag_to_page');

// 検索結果から固定ページを除外
function SearchFilter($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
    $query->set('post_type', array('recruit','interview','offer','column','event'));
  }
  return $query;
}
add_filter('pre_get_posts','SearchFilter');

/* PRE_GET_POSTS */
function customize_main_query ( $query ) {
  if ( ! is_admin() || $query->is_main_query() ) { //管理画面以外 かつ メインクエリー
    if ( $query->is_search() ) {
      $query->set( 'has_password', false );
    }
  }
}
add_action( 'pre_get_posts', 'customize_main_query' ); // PRE_GET_POSTSにフック

/* カスタムメニューにてカスタム投稿の下層でもcurrent_pageクラスを付与 */
function add_nav_menu_custom_class( $menu_items ) {
	$lists = array(
		'interview' => 'interview',
		'event' => 'event',
		'column' => 'column',
		'recruit' => 'recruit',
		'niche' => 'niche',
	);
  $current_post_type = get_post_type();
	foreach($lists as $post_type => $page_slug){
	
		if($current_post_type==$post_type){
			foreach ( $menu_items as $menu_key => $menu_item ) {
				if(get_page($menu_item->object_id)->post_name == $page_slug){
					$menu_items[$menu_key]->classes[] = 'current-menu-item '; //任意のクラス名
				}
			}
		}
	}
	return $menu_items;
}
add_filter( 'wp_nav_menu_objects', 'add_nav_menu_custom_class' );

/* 複数投稿用ページネーション */
function pagination($pages = '', $range = 4) {  
  $showitems = ($range * 2)+1;  
  global $paged;
  if(empty($paged)) $paged = 1;
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages) { $pages = 1; }
  }   
  if(1 != $pages) {
    echo "<nav class=\"paginate-nav\">";
    if($paged > 1) echo "<a class=\"prev\" href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
    for ($i=1; $i <= $pages; $i++) {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
        echo ($paged == $i)? "<span class=\"active\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
      }
    }
    if ($paged < $showitems && $paged < $pages) echo "<a class=\"next\" href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";  
    echo "</nav>";
  }
}

//管理画面の「見出し１」等を削除する
function custom_editor_settings( $initArray ){
$initArray['block_formats'] = "段落=p; 見出し１=h1; 見出し2=h2; 見出し3=h3; 見出し4=h4;";
return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

/* 画像を挿入機能のsrcをSSLに置換 */
function fix_ssl_attachment_url($url) {
  if(is_ssl()){
      $url = preg_replace("/^http:/", "https:", $url);
  }
  return $url;
}
add_filter("wp_get_attachment_url", "fix_ssl_attachment_url");

/* ギャラリーの自動生成CSSを停止 */
add_filter( 'use_default_gallery_style', '__return_false' );

/* ギャラリーのリンク先をデフォルトで「なし」に変更 */
function image_gallery_default_link( $settings ) {
    $settings['galleryDefaults']['link'] = 'none';
    return $settings;
}
add_filter( 'media_view_settings', 'image_gallery_default_link');

/* 画像タグにLazyLoad用の属性などを追加 */
function add_image_placeholders( $content ) {
    //プレビューやフィードモバイルなどで遅延させない
    if( is_feed() || is_preview() || ( function_exists( 'is_mobile' ) && is_mobile() ) )
        return $content;
 
    //既に適用させているところは処理しない
    if ( false !== strpos( $content, 'data-original' ) )
        return $content;
 
    //画像正規表現で置換
    $content = preg_replace(
        '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#',//IMGタグの正規表現
        sprintf( '<img${1}src="%s" data-echo="${2}"${3} /><noscript><img${1}src="${2}"${3} /></noscript>', get_template_directory_uri().'/images/dummy.png' ),//置換するIMGタグ（JavaScriptがオフのとき用のnoscriptタグも追加）
        $content );//投稿本文（置換する文章）
 
    return $content;
}
add_filter( 'the_content', 'add_image_placeholders', 99 );
add_filter( 'post_thumbnail_html', 'add_image_placeholders', 11 );
add_filter( 'get_avatar', 'add_image_placeholders', 11 );

/* 投稿画面用のcssを追加 */
add_editor_style("editor.css");

/* 検索機能で固定ページを除外 */
function fb_search_filter( $query ) {
	if ( $query -> is_search ) {
    $query->set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );


/* 概要（抜粋）の文字数調整 */
function my_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'my_excerpt_length');

/* 概要（抜粋）の省略文字 */
function my_excerpt_more($more) {
  return '';
}
add_filter('excerpt_more', 'my_excerpt_more');

/* 検索結果ハイライト */
function highlight_results($text){
    if(is_search()){
		$keys = implode('|', explode(' ', get_search_query()));
		$text = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');

/* ユーザー情報にTwitter Facebook追加 */
function update_profile_fields( $contactmethods ) {
    //項目の追加
    $contactmethods['twitter'] = 'Twitter';
    $contactmethods['facebook'] = 'Facebook';
    return $contactmethods;
}
add_filter('user_contactmethods','update_profile_fields',10,1);

/* Google Map API */
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyAC4maiLTsNgl8S0ueBDQEfaDjCJoxUEDc';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>
