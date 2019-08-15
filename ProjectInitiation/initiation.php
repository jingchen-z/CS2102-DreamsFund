<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Orange &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="FreeHTML5.co" />

		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-5 text-right menu-1">
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li class="has-dropdown">
							<a href="services.html">Projects</a>
							<ul class="dropdown">
								<li><a href="#">Ongoing</a></li>
								<li><a href="#">Successful</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-xs-2 text-center">
					<div id="fh5co-logo"><a href="index.html">DreamsFund</a></div>
				</div>
				<div class="col-xs-5 text-left menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="#">Get started</a>
							<ul class="dropdown active">
								<li><a href="#">Initiate</a></li>
								<li><a href="#">Invest</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Sign in</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Initiate a new project</h1>
							<h2>Start realizing your dream today.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-let-us-help">
						<h3>Let us help</h3>
						<ul>
							<li class="takeoff">If you have a business idea, <br>whether in place or brand new, <br> we can make it take off!</li>
							<li class="globe">Start your business, anywhere</li>
							<li class="money">Get funded up to $2,000,000,000</li>
							<li class="target">Target investors only at here</li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Publicize your project and get funds now!</h3>
					<form action="initiation.php" method="POST" autocomplete="off">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="title">Project Name</label>
								<input type="text" name="title" id="title" class="form-control" placeholder="Project title">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="resourceURL">Company Website URL</label>
								<input type="text" name="resourceURL" id="resourceURL" class="form-control" placeholder="Your Company's URL">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="country">Country</label>
								<input type="text" name="country" id="country" class="form-control" placeholder="Country">
							</div>
							<div class="col-md-6">
								<label for="city">City</label>
								<input type="text" name="city" id="city" class="form-control" placeholder="City">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="funding_sought">Amount of Funds Sought</label>
								<input type="number" name="funding_sought" id="funding_sought" class="form-control" placeholder="Must be less than USD$2,000,000,000 ">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="bank_account">Bank Account</label>
								<input type="text" name="bank_account" id="bank_account" class="form-control" placeholder="Bank account receiving the fund">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-6">
								<label for="startDate">Start Date</label>
								<input type="date" name="startDate" id="startDate" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="duration_of_months">Duration of Months</label>
								<input type="number" name="duration_of_months" id="duration_of_months" class="form-control" placeholder="Must be less than 60">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="description">Project Description</label>
								<textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Say something about your project"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Initiate" name = "Initiate" class="btn btn-primary">
						</div>

					</form>	
					<?php
					
						$db = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=1Dcyq7!!");

						if(isset($_POST['Initiate'])) {
							$result = pg_query($db, "INSERT INTO project_initiated_by VALUES(

									DEFAULT,
									'$_POST[title]',
									'$_POST[resouceURL]', 
									'$_POST[description]',
									'$_POST[startDate]', 
									$_POST[duration_of_months], 
									0, 
									0, 
									$_POST[funding_sought],
									$_POST[bank_account],
									'ONGOING',
									'$_POST[country]',
									'$_POST[city]',
									'xiexin2011@gmail.com');"
							);
								
							if (!$result) {
								echo '<meta http-equiv="refresh" content="0; URL=initiationFailed.php" />';
		        			} else {
		        				
		        				echo 'Success!';
		        			}
						}
					?>	
				</div>
			</div>
			
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact us</h3>
						<ul>
							<li class="address">Singapore, <br>Smith Avenue, <br> Block 17</li>
							<li class="phone">+65 1234 5678</li>
							<li class="email"><a href = "#">DreamsFund@gmail.com</a></li>
							<li class="url"><a href = "#">DreamsFund.com</a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 DreamsFund. All Rights Reserved.</small> 
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

