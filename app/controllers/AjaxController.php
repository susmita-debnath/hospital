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

				//print_r($this);
			}

			public function register() {
				$user = new User();
				if ( true === $user->uniquenessChecking($_POST['email']) ) {
					$return_arr = array(
										'code' => 1,
										'message' => "You are registered successfully."
									);
					$user->set_user_data( $_POST );
					$user->save();
				}
				else {
					$return_arr = array(
										'code' => 0,
										'message' => "The email has already been taken."
									);
				}
				// Encoding array in JSON format
				echo json_encode($return_arr);
				exit();
			}

			public function login() {
				$user = new User();
				//echo $user->is_user_valid($_POST['email'], $_POST['password']);
				if ( true === $user->is_user_valid($_POST['email'], $_POST['password']) ) {
					$return_arr = array(
										'code' => 1,
										'message' => "Logged in successfully."
									);
				}
				else {
					$return_arr = array(
										'code' => 0,
										'message' => "Username/password is not matched"
									);
				}
				// Encoding array in JSON format
				echo json_encode($return_arr);
				exit();
			}
		}
	}