<?php
class TypeSquare_ST_Api {
	private static $instance;

	private function __construct(){}

	public static function get_instance() {
		if ( ! isset( self::$instance ) ) {
			$c = __CLASS__;
			self::$instance = new $c();
		}
		return self::$instance;
	}


	/**
	 * Create Font List JSON Files
	 *   Usage
	 *     Create Font JSON
	 *     $API = TypeSquare_ST_Api::get_instance();
	 *     $API->update_font_list();
	 *
	 *     Load Font JSON
	 *     $result = file_get_contents( path_join( TS_PLUGIN_URL, 'inc/font.json' ) );
	 *     $array = json_decode( $result, true );
	 */
	public function update_font_list() {
		$font_list = $this->get_font_list();
		$json = json_encode( $font_list );
		$font_file_path = path_join( TS_PLUGIN_PATH , 'inc/font.json' );
		file_put_contents( $font_file_path, $json );
	}

	public function get_font_list() {
		$api_key = $this->_get_web_api_key();
		if ( is_wp_error( $api_key ) ) {
			return $api_key;
		}
		$url = 'https://typesquare.com/api/service';
		$query = $this->_get_font_list_query( $api_key );
		$result = $this->post_xmldata_from_api( $url, $query );
		if ( is_wp_error( $result ) ) {
			return $result;
		}
		$font_list = $this->_parse_font_list( $result );
		return $font_list;
	}

	private function _parse_font_list( $data ) {
		$font_list = [];
		foreach ( $data['dtls']->dtl as $font ) {
			$style = (string) $font->dtl_familystyle;
			$family = (string) $font->dtl_familyname;
			$name = (string) $font->dtl_name;
			$font_list[ $style ][ $family ][] = $name;
		}
		return apply_filters( 'ts_webfont_update_fontlist', $font_list );
	}

	private function _get_font_list_query( $api_key ) {
		$query = array(
			'method' => 'typesquare.get.font',
			'api_key' => $api_key,
		);
		return $query;
	}

	private function _get_web_api_key() {
		$res = $this->_auth_web_api();
		if ( is_wp_error( $res ) ) {
			return $res;
		}
		return $res['api_key'];
	}

	private function _auth_web_api() {
		$auth = TypeSquare_ST_Auth::get_instance();
		$option = $auth->get_auth_status();
		$url = 'https://typesquare.com/api/auth';
		$query = array(
			'id' => $option['typesquare_id'],
			'password' => $option['typesquare_pass'],
		);
		$result = $this->post_xmldata_from_api( $url, $query );
		return $result;
	}

	public function post_xmldata_from_api( $apiurl, $query = null ) {
		try {
			$result = wp_remote_post( $apiurl , array(
					'timeout' => 60,
					'body' => $query,
				)
			);
			if (  is_wp_error( $result ) ) {
				error_log( $result->get_error_message() );
				throw new Exception( $result->get_error_message() );
			} elseif ( 200 === $result['response']['code'] ) {
				$response = get_object_vars( simplexml_load_string( $result['body'] ) );
				if ( 'OK' != $response['res_result'] ) {
					throw new Exception( $response['res_errmsg'] );
				}
				return $response;
			}
		} catch ( Exception $e ) {
			$error = new WP_Error();
			$error->add( 'Morisawa Web API ERROR', $e->getMessage() );
			return $error;
		}
	}
}
