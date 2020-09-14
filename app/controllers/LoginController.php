<?php

	if ( ! class_exists( 'LoginController' ) ) {
		
		class LoginController extends BaseController
		{
			
			function __construct()
			{
				parent::__construct( 'login' );
			}
		}

	}