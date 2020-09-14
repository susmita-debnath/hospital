<?php
	
	if ( ! class_exists( 'User' ) ) {

		class User {
			
			function __construct() {

			}

			public static function is_user_logged_in() {
				return true;
			}
		}
	}
