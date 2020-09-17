<?php
	
	if ( ! function_exists( 'is_user_logged_in' ) ) {
		
		function is_user_logged_in() {
			return User::is_user_logged_in();
		}
	}

	if ( ! function_exists( 'base_url' ) ) {
		function base_url() {
			return BASE_URL;
		}
	}

	if ( ! function_exists( 'get_table' ) ) {
		function get_table( $name ) {
			return TABLE_PREFIX . $name; 
		}
	}

	if ( ! function_exists( 'get_activation_key' ) ) {
		function get_activation_key( $email, $name ) {
			$salt1 = 'sdjflsaf';
			$salt2 = 'askfjsfa';
			$salt3 = 'skjfksjdfajkjd';
			$key = $salt1 . $email . $salt2 . $name . $salt3;
			$key = base64_encode($key);

			return $key;
		}
	}