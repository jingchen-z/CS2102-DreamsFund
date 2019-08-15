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
							<h1>Let's Fund Your Dream</h1>
							<h2>Start from here <a href="initiation.php" target="_blank">Initiate</a></h2>
							<div class="row">
								<form class="form-inline" method='POST' id="fh5co-header-subscribe">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<input type="text" name="search" class="form-control" id="" placeholder="Interested projects">
											<button type="submit" name="s" class="btn btn-default">Find it Now</button>
										</div>
										<?php
											if(isset($_POST['s'])) {
												echo '<meta http-equiv="refresh" content="0; URL= projects.php?search='.$_POST["search"].'&status=ONGOING"/>';
											}
										?>
									</div>
								</form>
							</div>
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
						<h3>Fully Responsive</h3>
						<p>We will help you through out the whole process of realizing your dream projects and offer useful advice.</p>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>View Ready</h3>
						<p>All our original projects are ready to view and be donated.</p>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-mouse"></i>
						</span>
						<h3>Success</h3>
						<p>Countless projects has been funded and their initiators together with us made their dreams come true.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Our Projects</h2>
					<p>Click on your interested category to see detailed projects and know more about the ambitious initiators.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Agriculture&status=ONGOING"><img src="cate_img/cate_agriculture.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Agriculture</h3>
						<span>Cultivation</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Construction&status=ONGOING"><img src="cate_img/cate_construction.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Construction</h3>
						<span>Structuring</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Education&status=ONGOING"><img src="cate_img/cate_education.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Education</h3>
						<span>Improvement</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Finance&status=ONGOING"><img src="cate_img/cate_finance.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Finance</h3>
						<span>Commerce</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Health&status=ONGOING"><img src="cate_img/cate_health.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Health</h3>
						<span>Fitness</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Manufactoring&status=ONGOING"><img src="cate_img/cate_manufacturing.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Manufacturing</h3>
						<span>Production</span>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Professional&status=ONGOING"><img src="cate_img/cate_professional.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Professional</h3>
						<span>Competent</span>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Real_Estate&status=ONGOING"><img src="cate_img/cate_realestate.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Real Estate</h3>
						<span>Land</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Retails&status=ONGOING"><img src="cate_img/cate_retail.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Retails</h3>
						<span>Trade</span>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Services&status=ONGOING"><img src="cate_img/cate_services.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Services</h3>
						<span>Supply</span>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Transportation&status=ONGOING"><img src="cate_img/cate_transportation.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Transportation</h3>
						<span>Shipment</span>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="projects.php?cate=Wholesale&status=ONGOING"><img src="cate_img/cate_wholesale.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Wholesale</h3>
						<span>Extensive</span>
					</a>
				</div>

			</div>
		</div>
	</div>
	<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Successful Seniors</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;One way to understand human progress is to look at how technology has made products and services - once reserved for the elite - progressively more accessible and affordable.&rdquo;</p>
						</blockquote>
						<p class="author">Dan Schulman, PayPal CEO <a href="https://www.paypal.com" target="_blank">paypal.com</a> <span class="subtext">Successful Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;Never give up! Today is hard, tomorrow will be worse, but the day after tomorrow will be sunshine.&rdquo;</p>
						</blockquote>
						<p class="author">Jack Ma, CEO of Ali <a href="https://www.alipay.com" target="_blank"> Alipay.com</a> <span class="subtext">Career Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quote"></i></span></span>
							<p>&ldquo;The biggest risk is not taking any risk... In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks.&rdquo;</p>
						</blockquote>
						<p class="author">Mark Zuckerberg, Facebook CEO <a href="https://www.facebook.com" target="_blank">facebook.com</a> <span class="subtext">Facebook Initiator</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Recent Projects</h2>
					<p>Here follows what are the most recent projects for your own view.</p>
				</div>
			</div>
			<div class="row">
			
				<?php
					$db     = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=370305");
                    
					$result  = pg_query($db, "SELECT * FROM project_initiated_by ORDER BY start_date DESC LIMIT 3");
                    
					$row    = pg_fetch_all($result);
                    
					for ($x = 0; $x < 3; $x++){
						echo "
						<div class='col-lg-4 col-md-4'>
						<div class='fh5co-blog animate-box' data-animate-effect='fadeIn'>
							<a href='projectDetails.php?"."project_id=".$row[$x][project_id]."'><img class='img-responsive' src='proj_img/proj_$x.jpg'></a>
							<div class='blog-text'>
							<h3>".$row[$x][title]."</h3>
							<span class='posted_on'>".$row[$x][start_date]."</span>
							<span class='comment'><a href=''>$".$row[$x][funding_sought]."<i class='icon-speech-bubble'></i></a></span>
							<p>".$row[$x][description]."</p>
							<a href='projectDetails.php?"."project_id=".$row[$x][project_id]."' class='btn btn-primary'>Read More</a>
							</div>
						</div>
						</div>";
					}
				?>

			</div>
		</div>
	</div>


	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Let's Get Started</h2>
					<p>Here your dreams begin.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline" action="signIn.php">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Start Now</button>
						</div>
					</form>
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
						<li><a href="about.php">Teams</a></li>
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
						<small class="block">Designed by <a href="index.php" target="_blank">CrowdFunding</a></small>
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
