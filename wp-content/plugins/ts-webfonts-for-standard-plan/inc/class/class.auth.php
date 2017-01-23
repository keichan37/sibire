<?php
class TypeSquare_ST_Auth {
	private static $instance;
	private static $text_domain;

	private function __construct(){}

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}

	public static function text_domain() {
		static $text_domain;

		if ( ! $text_domain ) {
			$data = get_file_data( __FILE__ , array( 'text_domain' => 'Text Domain' ) );
			$text_domain = $data['text_domain'];
		}
		return $text_domain;
	}

	public function get_auth_status() {
		$option_name = 'typesquare_auth';
		$param = get_option( $option_name );
		if ( ! $param ) {
			$param = array(
				'typesquare_mail' => '',
				'typesquare_pass'      => '',
				'typesquare_id' => '',
				'auth_status'      => false,
				'api_status'      => false,
			);
		}
		foreach ( $param as $key => $value ) {
			if ( 'auth_status' === $key || 'api_status' === $key ) {
				if ( $value ) {
					$escaped_data[ $key ] = true;
				} else {
					$escaped_data[ $key ] = false;
				}
			} else {
				$escaped_data[ $key ] = esc_attr( $value );
			}
		}
		return $escaped_data;
	}

	public function get_auth_params() {
		$option_name = 'typesquare_auth';
		$param['typesquare_auth'] = $this->get_auth_status();

		$param['typesquare_auth_keys'] = array(
			'typesquare_mail' => __( 'TypeSquare<br/>　ログインメールアドレス', self::$text_domain ),
			'typesquare_pass'      => __( 'TypeSquareパスワード', self::$text_domain ),
			'typesquare_id' => __( 'TypeSquare配信ID', self::$text_domain ),
			'auth_status'      => __( '認証状況', self::$text_domain ),
			'api_status'      => __( 'API利用状況', self::$text_domain ),
		);
		return $param;
	}

	public function auth( $param ) {
		try {
			$auth_url = 'https://typesquare.com/api/auth';
			$param = $this->esc_params( $param );
			$result = $this->mail_auth( $param );
			if ( is_wp_error( $result ) ) {
				$param['auth_status'] = false;
				return $result;
			}
			$param['auth_status'] = true;

			$post_param = array(
				'id' => $param['typesquare_id'],
				'password' => $param['typesquare_pass'],
			);
			$result = wp_remote_post( $auth_url, array(
				'method' => 'POST',
				'timeout' => 45,
				'redirection' => 5,
				'httpversion' => '1.0',
				'blocking' => true,
				'headers' => array(),
				'body' => $post_param,
				'cookies' => array(),
				)
			);
			$result_obj = json_decode( json_encode( simplexml_load_string( $result['body'] ) ) );
			if ( 'OK' === $result_obj->res_result ) {
				$param['api_status'] = true;
			} else {
				$param['api_status'] = false;
			}
			return $param;
		} catch ( Exception $e ) {
			return $e;
		}
	}

	public function result_escape( $auth_result ) {
		foreach ( $auth_result as $key => $value ) {
			if ( 'auth_status' === $key ) {
				if ( $value ) {
					$escaped_data[ $key ] = true;
				} else {
					$escaped_data[ $key ] = false;
				}
			} else {
				$escaped_data[ $key ] = esc_attr( $value );
			}
		}
		return $escaped_data;
	}

	private function esc_params( $params ) {
		foreach ( $params as $key => $value ) {
			$escaped_param[ $key ] = esc_attr( $value );
		}
		return $escaped_param;
	}

	private function _parse_html( $html ) {
		$html = mb_convert_encoding( $html, 'HTML-ENTITIES', 'ASCII, JIS, UTF-8, EUC-JP, SJIS' );
		$dom = new DOMDocument();
		libxml_use_internal_errors( true );
		$dom->loadHTML( $html );
		libxml_use_internal_errors( false );
		$xml_string = $dom->saveXML();
		$xml_obj = simplexml_load_string( $xml_string );
		$array = json_decode( json_encode( $xml_obj ), true );
		return $array;
	}

	private function mail_auth( $param ) {
		$url = 'https://typesquare.com/users/login';
		$headers = array(
			'Referer' => $url,
		);
		$body = array(
			'_method' => 'POST',
			'data' => array(
				'User_authentication' => array(
					'mail_address' => $param['typesquare_mail'],
					'password' => $param['typesquare_pass'],
				),
			),
		);
		$query = array(
			'headers' => $headers,
			'body' => $body,
		);
		$result = wp_remote_post( $url, $query );
		$array = $this->_parse_html( $result['body'] );

		$subject = $array['head']['title'];
		$pattern = '/ログイン/';
		if ( preg_match( $pattern, $subject ) ) {
			$msg = __( 'ログインに失敗しました。IDとパスワードをご確認の上再度お試しください。' , self::$text_domain );
			$result = new WP_Error( 'TypeSquare Login Error', $msg );
		} else {
			$result = true;
		}
		return $result;
	}
}
