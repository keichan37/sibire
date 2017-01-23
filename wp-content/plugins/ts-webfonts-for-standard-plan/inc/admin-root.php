<?php
class TypeSquare_Admin_Root extends TypeSquare_Admin_Base {
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

	public function typesquare_post_metabox() {
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$param = $fonts->get_fonttheme_params();
		if ( 'false' == $param['typesquare_themes']['show_post_form'] || ! $param['typesquare_themes']['show_post_form'] ) {
			return;
		}
		$post_type = array( 'post', 'page' );
		foreach ( $post_type as $type ) {
			add_meta_box( 'typesquare_post_metabox', __( 'TypeSquare Webfonts for Standard Plan', self::$text_domain ), array( $this, 'typesquare_post_metabox_inside' ), $type, 'advanced', 'low' );
		}
	}

	public function typesquare_post_metabox_inside() {
		$html  = '';
		$html .= '<p>'. __( 'この記事に適用するフォントを選択してください', self::$text_domain ) . '</p>';

		$html .= $this->_get_post_font_theme_selector();
		$html .= '<input type="hidden" name="typesquare_nonce_postmeta" id="typesquare_nonce_postmeta" value="' . wp_create_nonce( plugin_basename( __FILE__ ) ) . '" />';
		echo $html;
	}

	private function _get_post_font_theme_selector() {
		$html  = '';
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$all_font_theme = $fonts->load_all_font_data( );
		$selected_theme = $fonts->get_selected_post_fonttheme( get_the_ID() );
		$option  = '';
		$option .= "<option value='false'>テーマを設定しない</option>";
		foreach ( $all_font_theme as $key => $fonttheme ) {
			$fonttheme_name = $this->get_fonts_text( $fonttheme['name'] );
			$font_text = $this->_get_fonttheme_text( $fonttheme );
			$selected = '';
			if ( $key === $selected_theme ) {
				$selected = 'selected';
			}
			$option .= "<option value='{$key}' {$selected}>";
			$option .= "{$fonttheme_name} ( {$font_text} )";
			$option .= '</option>';
		}
		$html .= '<h4>'. __( 'フォントテーマから選ぶ', self::$text_domain ) . '</h4>';
		$html .= "<select name='typesquare_fonttheme[theme]'>{$option}</select>";
		return $html;
	}

	public function typesquare_save_post( $post_id ) {
		if ( ! isset( $_POST['typesquare_nonce_postmeta'] ) ) {
			return;
		}
		//Verify
		if ( ! wp_verify_nonce( $_POST['typesquare_nonce_postmeta'], plugin_basename( __FILE__ ) ) ) {
			return $post_id;
		}
		// if auto save
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

		// permission check
		if ( 'page' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}

		// save action
		$fonttheme = $_POST['typesquare_fonttheme'];
		$current_option = get_post_meta( $post_id, 'typesquare_fonttheme' );
		$fonts = TypeSquare_ST_Fonts::get_instance();
		if ( isset( $current_option[0] ) ) {
			$current = $current_option[0];
		} else {
			$current = $fonttheme;
		}
		$font['theme'] = esc_attr( $fonttheme['theme'] );
		update_post_meta( $post_id, 'typesquare_fonttheme', $font );
		return $post_id;
	}

	private function get_fonts_text( $fonts ) {
		if ( is_array( $fonts ) ) {
			$text_font = '';
			foreach ( $fonts as $key => $font ) {
				$text_font .= esc_attr( $font );
				if ( count( $fonts ) - 1 > $key  ) {
					$text_font .= ' + ';
				}
			}
		} else {
			$text_font    = esc_attr( $fonts );
		}
		return $text_font;
	}

	public function get_auth_fields() {
		$html  = '';
		$html .= $this->get_ad_area();
		$html .= '<h3>■'. __( '認証' , self::$text_domain ). '</h3>';
		$html .= '<p>'. __( 'プラグインのご利用方法は' , self::$text_domain ). "<a href='http://typesquare.com/' target='_blank'>". __( 'こちら' , self::$text_domain ). '</a></p>';
		$html .= $this->get_auth_form();
		$html .= '</div>';
		return $html;
	}

	public function get_auth_form() {
		$html  = '';
		$nonce_key = TypeSquare_ST::OPTION_NAME;
		$html .= "<form method='post' action=''>";
		$html .= wp_nonce_field( $nonce_key, self::MENU_ID , true , false );
		$html .= "<table class='widefat form-table'>";
		$html .= '<tbody>';
		$param = $this->get_auth_params();
		$option_name = 'typesquare_auth';
		foreach ( $param['typesquare_auth_keys'] as $key => $title ) {

			$html .= "<tr><th>　{$title}";
			if ( 'typesquare_id' == $key ) {
				$html .= '<br/>　'. __( '（typesquare.jsの引数）', self::$text_domain );
			}
			$html .= '</th><td>';
			$name = "{$option_name}[{$key}]";
			if ( 'auth_status' === $key || 'api_status' === $key ) {
				if ( false === $param['typesquare_auth'][ $key ] ) {
					$html .= __( '認証されていません' , self::$text_domain );
				} else {
					$html .= __( '認証済み' , self::$text_domain );
				}
				$type = 'hidden';
			} elseif ( 'typesquare_pass' == $key ) {
				$type = 'password';
			} else {
				$type = 'text';
			}
			$name	= esc_attr( $name );
			$id		= esc_attr( $key );
			$value = esc_attr( $param['typesquare_auth'][ $key ] );
			$html .= "<input name='{$name}' type='{$type}' id='{$id}' value='{$value}' class='regular-text code' required/>";
			$html .= '</td></tr>';
		}
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= "<p class='submit'>";
		$html .= "<input type='submit' class='button button-primary' value='". __( '変更する' , self::$text_domain ). "'>";
		$html .= '</p>';
		$html .= '</form>';

		return $html;
	}

	public function get_ad_area() {
		$html  = '';
		$html .= "<div class='ts-ad-area'>";
		$html .= '<ul>';
		$html .= '<li>'. __( 'TypeSquareの「プラン・オプション設定」でご利用いただくURLをご登録いただいてから書体の設定を行ってください。', self::$text_domain ). '</li>';
		$html .= '</ul>';
		$messages[] = __( '無料プラン及びスタンダードIをご利用中の場合、TypeSquareの「プラン・オプション設定」での利用書体登録が必須となります。', self::$text_domain );
		$messages[] = __( 'TypeSquareの「プラン・オプション設定」で利用書体として設定されていない書体を指定した場合、フォントが配信されません。', self::$text_domain );
		$messages[] = __( 'フォントの配信が意図した通りにならない場合は、一度TypeSquareの「プラン・オプション設定」をご確認ください。', self::$text_domain );
		$messages[] = __( '利用可能書体：', self::$text_domain );
		$messages[] = '　'. __( 'スタンダードⅠ　3書体', self::$text_domain );
		$messages[] = '　'. __( 'スタンダードⅡ　全書体', self::$text_domain );
		$messages[] = __( 'プラン変更をすることで、より多くのTypeSqureフォントが利用できるようになります。', self::$text_domain );
		$html .= '<ul>';
		$html .= '<li><h2>' . __( 'フォント利用制限について', self::$text_domain ). '</h2></li>';
		foreach ( $messages as $message ) {
			$html .= "<li>{$message}</li>";
		}
		$html .= '</ul>';
		$html .= "<p><a href='http://typesquare.com/ja/service/plan' target='_blank' class='button button-hero'>". __( '→プランを見てみる', self::$text_domain ) . '</a></p>';
		$html .= '</div>';

		return $html;
	}

	public function typesquare_admin_menu() {
		$param = $this->get_auth_params();
		$option_name = 'typesquare_auth';
		$nonce_key = TypeSquare_ST::OPTION_NAME;
		echo "<div class='wrap'>";
		echo '<h2>'. __( 'TypeSquare Webfonts Plugin for Standard Plan' , self::$text_domain ). '</h2>';
		do_action( 'typesquare_add_setting_before' );
		echo $this->get_auth_fields();
		$autho_param = $this->get_auth_params();
		if ( false !== $autho_param['typesquare_auth']['auth_status'] ) {
			echo $this->get_font_theme_form();
			echo '<hr/>';
			echo "<div class='ts-custome_form_row'>";
			echo '<h3>■'. __( '上級者向けのカスタマイズ', self::$text_domain ). '</h3>';
			echo "<div class='ts-custome_form'>";
			echo $this->get_font_target_form();
			echo $this->get_font_fade_form();
			echo $this->_get_post_font_form();
			echo '</div>';
			echo '</div>';
		}
		do_action( 'typesquare_add_setting_after' );
	}

	private function _get_post_font_form() {
		$option_name = 'typesquare_fonttheme';
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$param = $fonts->get_fonttheme_params();
		$keys = $param['typesquare_themes_keys'];
		$html  = '';
		$html .= '<hr/>';
		$html .= "<form method='post' action=''>";
		$html .= '<h4>'. __( 'フォントテーマ表示設定' , self::$text_domain ). '</h4>';
		$html .= '<p>'. __( '各画面にフォントテーマ設定機能を表示するか否かを設定します。' , self::$text_domain ). '</p>';
		$html .= wp_nonce_field( 'ts_update_font_settings' , 'ts_update_font_settings' , true , false );
		$html .= "<table class='widefat form-table'>";
		$html .= '<thead>';
		$html .= "<tr><th>　{$keys['show_post_form']}</th></tr>";
		$html .= '</thead>';
		$html .= '<tbody>';
		$value = esc_attr( $param['typesquare_themes']['show_post_form'] );
		if ( ! $value ) {
			$value = 'false';
		}
		$html .= '<td><label>';
		$html .= "<input name='{$option_name}[show_post_form]' type='radio' id='show_post_form' value='true' class='code' ". checked( $value, 'true', false ). '/>';
		$html .= __( '表示する' , self::$text_domain );
		$html .= '</label>　';
		$html .= '<label>';
		$html .= "<input name='{$option_name}[show_post_form]' type='radio' id='show_post_form' value='false' class='code' ". checked( $value, 'false', false ). '/>';
		$html .= __( '表示しない' , self::$text_domain );
		$html .= '</label>';
		$html .= '<p>'. __( 'デフォルトでは非表示となっています。' , self::$text_domain ). '</p>';
		$html .= '</td></tr>';
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= get_submit_button( __( 'フォントテーマ表示設定を更新する', self::$text_domain ) );
		$html .= '</form>';
		return $html;

	}

	public function get_font_fade_form() {
		$option_name = 'typesquare_fonttheme';
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$param = $fonts->get_fonttheme_params();
		$keys = $param['typesquare_themes_keys'];
		$html  = '';
		$html .= '<hr/>';
		$html .= "<form method='post' action=''>";
		$html .= '<h4>'. __( 'フェードイン設定' , self::$text_domain ). '</h4>';
		$html .= '<p>'. __( 'フォント表示時のフェードインについて設定します。' , self::$text_domain ). '</p>';
		$html .= wp_nonce_field( 'ts_update_font_settings' , 'ts_update_font_settings' , true , false );
		$html .= "<table class='widefat form-table'>";
		$html .= '<tbody>';
		$html .= "<tr><th>　{$keys['fade_in']}</th><td>";
		$value = esc_attr( $param['typesquare_themes']['fade_in'] );
		if ( $value ) {
			$optional = 'checked';
		}
		$html .= "<label><input name='{$option_name}[fade_in]' type='checkbox' id='fade_in' value='1' class='code' ". checked( $value, true, false ). '/>有効化する</label>';
		$html .= '<p>'. __( 'デフォルトではフェードインが無効化されています。' , self::$text_domain ). '</p>';
		$html .= '</td></tr>';
		$html .= "<tr><th>　{$keys['fade_time']}</th><td>";
		$value = esc_attr( $param['typesquare_themes']['fade_time'] );
		$optional = "size='2' maxlength='2'";
		$html .= "<input name='{$option_name}[fade_time]' type='text' id='fade_time' value='{$value}' class='code' {$optional}/>";
		$html .= __( '(0~99の整数)', self::$text_domain );
		$html .= '<p>'.__( '0秒に設定すると、デフォルトフォントを非表示 (フォントがロードされ次第表示)となります。', self::$text_domain ). '</p>';
		$html .= '</td></tr>';
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= get_submit_button( __( 'フェードイン設定を更新する', self::$text_domain ) );
		$html .= '</form>';
		return $html;
	}

	public function get_font_theme_form() {
		$option_name = 'typesquare_fonttheme';
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$param = $fonts->get_fonttheme_params();
		$all_font_theme = $fonts->load_all_font_data( );
		$html  = '';
		$html .= '<hr/>';
		$html .= "<form method='post' action=''>";
		$html .= '<h3>■'. __( 'フォントテーマ設定' , self::$text_domain ). '</h3>';
		$html .= '<p>'. __( 'フォントテーマを選択してください。' , self::$text_domain ). '<br/>';
		$html .= '<strong>'. __( '※カスタムフォントテーマからフォントテーマをカスタマイズ作成することができます。' , self::$text_domain ). '</strong></p>';
		$html .= wp_nonce_field( 'ts_update_font_settings' , 'ts_update_font_settings' , true , false );
		$html .= "<table class='widefat form-table'>";
		$html .= '<thead>';
		$html .= "<tr><th>　{$param['typesquare_themes_keys']['font_theme']}</th></tr>";
		$html .= '</thead>';
		$html .= '<tbody>';
		$html .= '<tr><td>';
		$html .= "<select name='{$option_name}[font_theme]'>";
		$html .= "<option value='false'>テーマを設定しない</option>";
		foreach ( $all_font_theme as $fonttheme_key => $fonttheme ) {
			$fonttheme_name = esc_attr( $fonttheme['name'] );
			$font_text = $this->_get_fonttheme_text( $fonttheme );
			$selected	= '';
			if ( $fonttheme_key == $param['typesquare_themes']['font_theme'] ) {
				$selected = 'selected';
			}
			$html .= "<option value='{$fonttheme_key}' {$selected}>";
			$html .= "{$fonttheme_name} ( {$font_text} )";
			$html .= '</option>';
		}
		$html .= '</select>';
		$html .= '</td></tr>';
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= get_submit_button( __( 'フォントテーマを更新する', self::$text_domain ) );
		$html .= '</form>';
		return $html;
	}

	private function _get_fonttheme_text( $fonttheme ) {
		$font_text = '';
		if ( isset( $fonttheme['fonts']['title'] ) ) {
			$font_text .= __( '見出し：', self::$text_domain );
			$font_text .= $this->get_fonts_text( $fonttheme['fonts']['title'] );
			$font_text .= ',';
		}
		if ( isset( $fonttheme['fonts']['lead'] ) ) {
			$font_text .= __( 'リード：', self::$text_domain );
			$font_text .= $this->get_fonts_text( $fonttheme['fonts']['lead'] );
			$font_text .= ',';
		}
		if ( isset( $fonttheme['fonts']['content'] ) ) {
			$font_text .= __( '本文：', self::$text_domain );
			$font_text .= $this->get_fonts_text( $fonttheme['fonts']['content'] );
			$font_text .= ',';
		}
		if ( isset( $fonttheme['fonts']['text'] ) ) {
			$font_text .= __( '本文：', self::$text_domain );
			$font_text .= $this->get_fonts_text( $fonttheme['fonts']['text'] );
			$font_text .= ',';
		}
		if ( isset( $fonttheme['fonts']['bold'] ) ) {
			$font_text .= __( '太字：', self::$text_domain );
			$font_text .= $this->get_fonts_text( $fonttheme['fonts']['bold'] );
		}
		$font_text = rtrim( $font_text, ',' );
		$font_text = str_replace( ",", " / ", $font_text );
		return $font_text;
	}

	public function get_font_target_form() {
		$fonts = TypeSquare_ST_Fonts::get_instance();
		$param = $fonts->get_fonttheme_params();
		$html  = '';
		$html .= "<form method='post' action=''>";
		$html .= '<h4>'. __( 'フォント設定クラス' , self::$text_domain ). '</h4>';
		$html .= '<p>'. __( 'フォントを適用するクラスを指定します。' , self::$text_domain ). '</p>';
		$html .= "<table class='widefat form-table'>";
		$html .= '<thead>';
		$key = $param['typesquare_themes_keys'];
		$html .= "<tr><th>　{$key['title_target']}</th><th>　{$key['lead_target']}</th><th>　{$key['text_target']}</th><th>　{$key['bold_target']}</th></tr>";
		$html .= '</thead>';
		$html .= '<tbody>';
		$data = $param['typesquare_themes'];
		$html .= "<tr><td><input type='text' name='typesquare_fonttheme[title_target]' value='{$data['title_target']}' required/></td>";
		$html .= "<td><input type='text' name='typesquare_fonttheme[lead_target]' value='{$data['lead_target']}' required/></td>";
		$html .= "<td><input type='text' name='typesquare_fonttheme[text_target]' value='{$data['text_target']}' required/></td>";
		$html .= "<td><input type='text' name='typesquare_fonttheme[bold_target]' value='{$data['bold_target']}' required/></td></tr>";
		$html .= '</tbody>';
		$html .= '</table>';
		$html .= get_submit_button( __( '設定クラスを更新する', self::$text_domain ) );
		$html .= wp_nonce_field( 'ts_update_font_settings' , 'ts_update_font_settings' , true , false );
		$html .= '</form>';
		return $html;
	}

}
