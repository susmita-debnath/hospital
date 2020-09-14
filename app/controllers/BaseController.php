<?php
	if ( ! class_exists( 'BaseController' ) ) {
		class BaseController {
			
			public $view;
			public $data = array();
			public $show_banner = false;

			public function __construct( $view ) {
				$this->view = $view;	
			}

			public function view() {
				extract($this->data);
				$this->get_header();
				if ( $this->show_banner ) $this->get_banner();
				require_once './app/views/' . $this->view . '.php';
				$this->get_footer();
			}

			public function get_header() {
				require_once './app/views/partials/header.php';
			}

			public function get_banner() {
				require_once './app/views/partials/banner.php';
			}

			public function get_footer() {
				require_once './app/views/partials/footer.php';
			}
		}
	}
	