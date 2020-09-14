<?php
	if ( ! class_exists( 'AboutController' ) ) {

		class AboutController extends BaseController {
			
			public function __construct() {
				parent::__construct( 'about' );
				$this->data['username'] = 'Supti';
				$this->data['classname'] = 'about';
			}

		}
	}