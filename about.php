<?php
 session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DreamsFund &mdash; CrowdFunding Web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="CrowdFunding" />
		<meta name="keywords" content="CrowdFunding" />
		<meta name="author" content="CrowdFunding" />
	
  	<!-- Facebook and Twitter integration -->
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
	
	<link rel="icon" href="proj_img/icon.png">
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
				<div class="left-menu text-right menu-1">
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li class="has-dropdown">
							<a href="projects.php?status=ONGOING">Projects</a>
							<ul class="dropdown">
								<li><a href="projects.php?status=ONGOING">Ongoing</a></li>
								<li><a href="projects.php?&status=SUCCESSFUL">Successful</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="logo text-center">
					<div id="fh5co-logo"><a href="index.php">DreamsFund</a></div>
				</div>
				<div class="right-menu text-left menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="initiation.php">Get Started</a>
							<ul class="dropdown">
								<li><a href="initiation.php">Initiate</a></li>
								<li><a href="donate.php">Invest</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="signIn.php">Sign</a>
							<ul class="dropdown">
								<?php
									if($_SESSION['user_email'] == '') {
										echo '<li><a href="signIn.php">Sign In</a></li>
											  <li><a href="signUp.php">Sign Up</a></li>';
									} else {
										echo'<form action="index.php" method="POST">
												<div class="form-group">
													<input type="submit" value="Log out" name="logout" ">
												</div>
											</form>';
										echo '<li><a href="signUp.php">Sign Up</a></li>';
									}
									if(isset($_POST['logout'])) {
										$_SESSION['user_email'] = '';
										echo '<meta http-equiv="refresh" content="0; URL= index.php"/>';
									}
								?>
							</ul>
						</li>
						<!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>


	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>What about us?</h1>
							<h2>Make contact now <a href="mailto:z782180503@gmail.com" target="_blank">email</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>A Team of Four</h3>
						<p>We will help you through out the whole process of realizing your dream projects and offer useful advice.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>Helpfulness</h3>
						<p>We have helped people reached their dream.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-mouse"></i>
						</span>
						<h3>Popularity</h3>
						<p>Countless projects has been registered and their initiators together with us made those dreams come true.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
	<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Team Members</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;One way to understand human progress is to look at how technology has made products and services - once reserved for the elite - progressively more accessible and affordable.&rdquo;</p>
						</blockquote>
						<p class="author">Yuqian <a href="index.php" target="_blank"> DreamsFund.com</a> <span class="subtext">Team member</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;Never give up! Today is hard, tomorrow will be worse, but the day after tomorrow will be sunshine.&rdquo;</p>
						</blockquote>
						<p class="author">Liu Xuan <a href="index.php" target="_blank"> DreamsFund.com</a> <span class="subtext">Team member</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;The biggest risk is not taking any risk... In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks.&rdquo;</p>
						</blockquote>
						<p class="author">Yiyang <a href="index.php" target="_blank"> DreamsFund.com</a> <span class="subtext">Team member</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;It is very lucky for me to be a member in this team which has absolutely harmony atmosphere and everyone takes up a lot work. Wish we could still be team member in campus life!&rdquo;</p>
						</blockquote>
						<p class="author">Jingchen <a href="index.php" target="_blank"> DreamsFund.com</a> <span class="subtext">Team member</span></p>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Hope you like this Web</h2>
					<p>CS2102 AY2018/2019 SEM1 NUS</p>
				</div>
				
			</div>
			
		</div>
	</div>


	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-2 col-sm-4 col-xs-6">
					<ul class="fh5co-footer-links">
						<li><a href="about.php">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="about.php">Contact</a></li>
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
						<li><a href="about.php">Find Designers</a></li>
						<li><a href="about.php">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 fh5co-widget col-md-push-1">
					<h3>A Little About DreamsFund</h3>
					<p>DreamsFund is a free online platform which aims to help people and make their dreams come true.</p>
					<p><a href="about.php">Learn More</a></p>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2018 CrowdFunding. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="about.php" target="_blank">CrowdFunding</a></small>
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
	<script src="js/main.js"></script>

	</body>
</html>
