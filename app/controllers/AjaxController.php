<?php
	if ( ! class_exists( 'AjaxController' ) ) {
	
		class AjaxController
		{
			public $name;
			public $email;
			public $password;
			public $date;
			public $gender;
			public $address;
			
			function __construct() {
				
			}

			public function get_data() {
				$this->name = $_POST['name'];
				$this->email = $_POST['email'];
				$this->password = $_POST['password'];
				$this->date = $_POST['date'];
				$this->mobile = $_POST['mobile'];
				$this->gender = $_POST['gender'];
				$this->address = $_POST['address'];

				print_r($this);
			}

			public function register() {
				$user = new User();
				$user->name = 
			}
		}

	}