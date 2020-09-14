<?php

	if ( ! class_exists( 'RegisterController' ) ) {
		
		class RegisterController extends BaseController {
			
			public function __construct() {
				parent::__construct( 'register' );
			}
		}
	}