<?php

	if ( ! class_exists( 'BookAnAppointmentController' ) ) {

		class BookAnAppointmentController extends BaseController {
			
			public function __construct() {
				parent::__construct( 'bookAnAppointment' );
				$this->show_banner = true;

				if ( ! is_user_logged_in() ) {
					header("Location:http://hospital.test/book-an-appointment");
				}
			}
		}
	}