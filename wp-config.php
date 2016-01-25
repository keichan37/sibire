<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */
 
// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

//mysql://bf8a0824b6b17c:e2e02e66@us-cdbr-iron-east-03.cleardb.net/heroku_07dc9a4cdf10ea5?reconnect=true
// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'heroku_07dc9a4cdf10ea5');
/** MySQL データベースのユーザー名 */
define('DB_USER', 'bf8a0824b6b17c');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'e2e02e66');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qXI2+sy29b)h8QM6SSs-[lD2Vsk!{s,R88XT6hBc5ev][C}gkV[PH4awKnv|DOh3');
define('SECURE_AUTH_KEY',  '&_R3CZ)#Lyq<:Zzxp?eHe&o.Lt=S19<(]uHy3oxcJ+ae.bn+lZ2#~ei{@{t3aDnV');
define('LOGGED_IN_KEY',    'RN>R)PTp0]c;#_]XQ3!te{nE0T&_w[^:,/HB`fw~TP+kVtm2K>8qV+au.yDnfi3_');
define('NONCE_KEY',        'g_F/*Zj-d/<:lXm^%cNl8Y?Te{9%?e,oPw^,N)|Y[!6(AR&a]fW_j`+LVa42+2KG');
define('AUTH_SALT',        'H5XOeGsD7_^KoGP(lWMHI_U8f?2xbkN*{]xrf8+p~[:m,Q7j.9FNZ>BNTRX%=~F:');
define('SECURE_AUTH_SALT', 'D]cy-x6NfG Nbut/gmxAU0`^P+Kleg({vLgxVEIn1Z?N&/}BQNGPfoVCUG*4Qf)+');
define('LOGGED_IN_SALT',   'iV:Dec(S9g=-.~BKT^d7;sxNHm+HnM;`^le3*0X&,p}Mksg|xG@E!1dm`B|a@!n.');
define('NONCE_SALT',       '4fIaIu2Q-Z44&Nk~=T/(bbm^uVjR~eH+|+~|HcUSW_49:7>tHQK--hb=PtU]P84F');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
