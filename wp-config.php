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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'sibire');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', '127.0.0.1');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#BROw*Em,Y}AN<&d]i-kbsUW[kg9(F@(Rk$d3z%]>G;vAJ/Jx?G~l{wB/-8OxnFp');
define('SECURE_AUTH_KEY',  '_9|RNhA-(1lm4;0I,{eEQR`BKQb9.~D%U?B/0?Fe^]d.?U6C6-*a=s0C:_8yJ}V7');
define('LOGGED_IN_KEY',    '-$SAW+^7$+M?+PE.fNdwxVUiJ~kNZIlU:|)`vL/vHqqjq>NM1m<Y0n>*+%p=a% 4');
define('NONCE_KEY',        'J4EOe;yES{+%mc-N(EJR5sVDf2u_+lI8wFc &-2 X.qcm|plRk*GK> ;7J5[,KTg');
define('AUTH_SALT',        'Ti{`|+AGM$}=1)LG|&=cXt{l?O;1~d6(xe.4H2-5}OHU~e1@B(8jiYk|MxI5-9%,');
define('SECURE_AUTH_SALT', '||tE5}$:I0RSdNrKNCcy:as>-B}XOp3G7bv/Eh:zSPh`WCU{MT@WjJbPQthT#:}:');
define('LOGGED_IN_SALT',   'y>YW5uExv0G *~;Hm#Gu:|g*(C9uD+#R%;Pt6N?F~-UfM|LoBNS~.ngH>]ZK{C~q');
define('NONCE_SALT',       '+H,_EW/@Mt0)>(&3LE>pMxeCM^o#q=..-eU+0x~])]];7}SJ{U2:O9U/^%8GJKjv');
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
