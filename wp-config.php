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
define('AUTH_KEY',         '&{&YAuxs<lXLz!9&nfA3hW-wphseQz!q?&o;7R2~4Nw`np:&}OEw2C/< q+4]3xo');
define('SECURE_AUTH_KEY',  'WA|q1jhjR;gvuK1Y|>%[a4Gc93+_#:geu!g$.%VSht+j|On+4K+_u%=u|eO|bVZR');
define('LOGGED_IN_KEY',    '!JHZ~.Vm++ d.*Y|<Ym+hh)>[K,oVC=++O1qsr0lmh/je__v@g|2>^dWYKOXg4~U');
define('NONCE_KEY',        'zjF3hhMW0M)ePyKTr]IQISHw[qa+5~>=eT|;5Yg8v7tboH;*8co*Y+Q<kGq;d)v*');
define('AUTH_SALT',        '.dSy#q{Rf=t-z*`TM}X5L_LhD[v[6@MTk)S[<1t3%M -ia_JxB(V-~Z|=RC-4d-T');
define('SECURE_AUTH_SALT', '8KJ;#|4|JvX~eLCW|t_z}u{ish8OS1`q4)Jr;!EYwiNzg|=:-9P&t_&oQE $<7{{');
define('LOGGED_IN_SALT',   'p1>cu@^o,oGY_w%(Bw7v~[i=Zfg2aTM$h7xGz;^wmDZ!b*H8/SbHJ/bfn6r G&(O');
define('NONCE_SALT',       'AWQJG5:c)8-c_L;}M?:=PEnc mR:#%kgG[(S4q1(7A0P%~r!h=aK-@%zciEHXsfw');

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

