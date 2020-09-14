<?php
	
	if ( ! function_exists( 'is_user_logged_in' ) ) {
		
		function is_user_logged_in() {
			return User::is_user_logged_in();
		}
	}