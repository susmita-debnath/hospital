<?php
	/**
	 * 
	 */
	if ( ! class_exists( 'HomeController' ) ) {
		class HomeController extends BaseController {

			public function __construct() {
				parent::__construct( 'home' );
				$this->data['username'] = 'Supti';
				$this->show_banner = true;
			}
		}
	}