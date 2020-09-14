<?php
	require_once './config.php';
?><!DOCTYPE html>
<html>
	<head>
		<title>Welcome!!!</title>
		<link rel="stylesheet" type="text/css" href="http://hospital.test/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="http://hospital.test/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="http://hospital.test/assets/css/dest/design.min.css?t=<?php echo time() ?>">
		<link rel="stylesheet" type="text/css" href="http://hospital.test/assets/css/jquery-ui.css">
	</head>
	<body class="<?php echo $username; ?>">
		<div class="container">
	  		<div class="card no-border">
	  			<div class="card-header">
		  			<div class="row">
						<div class="col">
							<div class="logo">
								<img src="http://hospital.test/assets/images/logo.jpg">
							</div>
						</div>
					  	<div class="col font">
					  		Work Time - 0100 000000<br>Saturday and Sunday closed
					  	</div>
					  	<div class="col font">
					  		Mail Us<br>carepoint@gmail.com
					  	</div>
					  	<div class="col font">
					  		Call Us<br>+123 4567 8900
					  	</div>
					</div>
				</div>
	  		</div>
			<div class="card no-border menubar">
				<div class="card-header card-appointment">
					<div class="row">
						<div class="col-8">
							<nav class="navbar navbar-expand-lg navbar-light no-padding">
								<a class="navbar-brand" href="#">Home</a>
								<a class="navbar-brand" href="#">About</a>
								<a class="navbar-brand" href="#">Services</a>
								<a class="navbar-brand" href="#">Gallery</a>
								<a class="navbar-brand" href="#">Blog</a>
								<a class="navbar-brand" href="#">Contact Us</a>

								<div class="navbar-nav">
									
								</div>
							</nav>
						</div>
						<div class="col-4 appointment">
							<a class="btn btn-primary" href="http://hospital.test/book-an-appointment">Book An Appointment</a>
						</div>
					</div>
				</div>
			</div>