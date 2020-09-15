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
		function get_table() {
			return TABLE_PREFIX;
		}
	}