<?php

	if ( ! class_exists( 'ContactController' ) ) {

		class ContactController extends BaseController {
			
			public function __construct() {
				parent::__construct( 'contact' );
				$this->show_banner = true;
			}

		}
	}