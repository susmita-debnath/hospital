<?php
	require_once './config.php';
?><!DOCTYPE html>
<html>
	<head>
		<title>Welcome!!!</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/design.css?t=<?php echo time() ?>">
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="assets/js/design.js"></script>
	</head>
	<body>
		<div class="container">
	  		<div class="card no-border">
	  			<div class="card-header">
		  			<div class="row">
						<div class="col">
							<div class="logo">
								<img src="assets/images/logo.jpg">
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
				<div class="card-header">
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
						<div class="col-4"></div>
					</div>
				</div>
			</div>
			<div class="banner">
				<div class="title">
					<h3>We have Best Medicare plan options for you</h3><br>
					<button type="button" class="btn btn-primary" href="#">READ MORE</button>
				</div>
			</div>
			<div class="part1">
				<div class="row">
					<div class="col blurb">
						<i class="fa fa-stethoscope icon-color" aria-hidden="true"></i>
						<h4>Best Treatment</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col blurb">
						<i class="fa fa-mobile icon-color" aria-hidden="true"></i>
						<h4>Emergency Help</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col blurb">
						<i class="fa fa-medkit icon-color" aria-hidden="true"></i>
						<h4>Medical Stuff</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="col blurb">
						<i class="fa fa-user-md icon-color" aria-hidden="true"></i>
						<h4>Qualified Doctors</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
			</div>
			<div class="middle">
				<h2 class="title">Why Choose Us?</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="part2">
				<div class="row">
					<div class="col-4">
						<div class="row">
							<div class="col-12">
								<div class="choose-us-heading choose-us-padding1 blurbi">
									<h3><i class="fa fa-plus-square" aria-hidden="true"></i><span>Professional</span></h3>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="choose-us-heading choose-us-padding2 blurbi">
									<h3><i class="fa fa-plus-square" aria-hidden="true"></i><span>Professional</span></h3>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>							
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="doctor">
							<img src="assets/images/doctor.png">
						</div>
					</div>
					<div class="col-4">
						<div class="row">
							<div class="col-12">
								<div class="choose-us-heading choose-us-padding3 blurbi">
									<h3><i class="fa fa-plus-square" aria-hidden="true"></i><span>Professional</span></h3>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>	
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="choose-us-heading choose-us-padding4 blurbi">
									<h3><i class="fa fa-plus-square" aria-hidden="true"></i><span>Professional</span></h3>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="row">
					<div class="col-3">
						<div class="blurb3">
							<h3><i class="fa fa-address-book" aria-hidden="true"></i><span>Postal Address</span></h3>
							<p>The Royal Melbourne Hospital<br>RMH, Victoria 3050<br>Australia</p>
						</div>
					</div>
					<div class="col-3">
						<div class="patients-visitors">
							<h4><a href="#">Patients & Visitors</a></h4>
							<p><a href="#">Services & clinics</a><br><a href="#">Coming to hospital</a></p>
						</div>
						<div class="general">
							<h4><a href="#">General</a></h4>
							<p><a href="#">Foundation</a><br><a href="#">Contact</a><br><a href="#">News</a></p>
						</div>
					</div>
					<div class="col-3">
						<div class="health">
							<h4><a href="#">Health professionals</a></h4>
							<p><a href="#">Clinical services</a><br><a href="#">Careers</a><br><a href="#">Education</a></p>
						</div>
						<div class="research">
							<h4><a href="#">Research</a></h4>
							<p><a href="#">For researchers</a><br><a href="#">For patients & families</a></p>
						</div>
					</div>
					<div class="col-3">
						<div class="subscription">
							<h4>Subcription Form</h4>
							<form method="post">
								<input type="email" name="email" placeholder="Email">
								<input type="submit" class="btn btn-primary" name="subscribe" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
			</footer>
			<div class="card-footer">
				<div class="row">
					<div class="col-6">
						<div class="copyright">
							<p><span><i class="fa fa-copyright" aria-hidden="true"></span></i>Copyright Melbourne Hospital 2020</p>
						</div>
					</div>
					<div class="col-6">
						<div class="icons">
							<div class="facebook-icon">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</div>
							<div class="twitter-icon">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</div>
							<div class="youtube-icon">
								<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							</div>
							<div class="linkedin-icon">
								<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>