<?php
	if ( isset($_SERVER['PATH_INFO']) ) {
		$path = trim( $_SERVER['PATH_INFO'], "//" );
		$path_array = explode("/", $path);
		$slug = $path_array[0];

		if ( count($path_array) > 1 ) $method = $path_array[1];

		$slug = str_replace(" ", "", ucwords(str_replace("-", " ", $slug)));
	}
	
	else $slug = "home";

	$slug = ucfirst( $slug );

	require_once './config.php';
	require_once './app/lib/functions.php';
	require_once './app/models/Model.php';
	require_once './app/models/User.php';
	require_once './app/controllers/BaseController.php';
	require_once './app/controllers/'. $slug .'Controller.php';

	$controller_class = $slug . 'Controller';
	$controller = new $controller_class();

	if ( isset($method) ) $controller->$method();
	else $controller->view();