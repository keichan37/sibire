<?php

class TypeSquare_ST_Fonttheme {
	private static $fonttheme;
	private static $instance;

	private function __construct(){}

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

	public static function get_fonttheme() {
		static $fonttheme;

		$fonttheme = array(
			'basic' => array(
				'name'	=> 'ベーシック',
				'fonts' => array(
					'title'   => 'リュウミン EH-KL',
					'lead'    => '見出ミンMA31',
					'content' => '黎ミンY30 M',
					'bold'    => '黎ミンY30 B',
				),
			),
			'blog' => array(
				'name'	=> 'ブログ',
				'fonts' => array(
					'title'   => '竹 B',
					'lead'    => '欧体楷書',
					'content' => '丸フォーク R',
					'bold'    => '丸フォーク B',
				),
			),
			'news' => array(
				'name'	=> 'ニュース',
				'fonts' => array(
					'title'   => '新ゴ エンボス',
					'lead'    => 'カクミン M',
					'content' => 'UD新ゴ R',
					'bold'    => 'UD新ゴ B',
				),
			),
			'brand' => array(
				'name'	=> 'ブランド',
				'fonts' => array(
					'title'   => '太ミンA101',
					'lead'    => '徐明',
					'content' => '陸隷',
					'bold'    => '隷書101',
				),
			),
			'magazine' => array(
				'name'	=> 'マガジン',
				'fonts' => array(
					'title'   => 'UD黎ミン R',
					'lead'    => '正楷書CB1',
					'content' => 'A1明朝',
					'bold'    => 'A1明朝',
				),
			),
			'casual' => array(
				'name'	=> 'カジュアル',
				'fonts' => array(
					'title'   => '丸フォーク B',
					'lead'    => 'ソフトゴシック M',
					'content' => 'じゅん 101',
					'bold'    => 'じゅん 34',
				),
			),
			'book' => array(
				'name'	=> 'ブック',
				'fonts' => array(
					'title'   => '本明朝-U 新がな',
					'lead'    => '本明朝-M 新がな',
					'content' => '本明朝-Book 新小がな',
					'bold'    => '本明朝-M 新小がな',
				),
			),
			'kids' => array(
				'name'	=> 'キッズ',
				'fonts' => array(
					'title'   => 'タカモダン',
					'lead'    => '丸フォーク R',
					'content' => 'じゅん 201',
					'bold'    => 'じゅん 501',
				),
			),
			'life' => array(
				'name'	=> 'ライフ',
				'fonts' => array(
					'title'   => 'すずむし',
					'lead'    => array( '築地-GM', 'ナウ-GM' ),
					'content' => '黎ミンY10 L',
					'bold'    => '黎ミンY10 M',
				),
			),
			'home' => array(
				'name'	=> 'ホーム',
				'fonts' => array(
					'title'   => array( 'ほなみ B', 'リュウミン B-KL' ),
					'lead'    => '解ミン 宙 R',
					'content' => array( 'リュウミン L-KO', 'リュウミン L-KL' ),
					'bold'    => array( 'リュウミン M-KO', 'リュウミン M-KL' ),
				),
			),
		);

		$options = get_option( 'typesquare_custom_theme' );
		if ( $options && isset( $options['theme'] ) && is_array( $options['theme'] ) ) {
			$fonttheme = $fonttheme + $options['theme'];
		}
		return $fonttheme;
	}
}
