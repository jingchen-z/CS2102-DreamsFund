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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Donate</h1>
							<h2>Let's make others' dreams come true!</h2>
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
							<li class="takeoff">Today you support a business idea, <br>together with us. <br>Tomorrow we can make it take off!</li>
							<li class="globe">Support them anywhere.</li>
							<li class="money">Let's fund.</li>
							<li class="target">Target investors only at here</li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Some more info:</h3>
					<form action="#" method="POST">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="amount">Amount</label>
								<input type="text" name="amount" class="form-control" placeholder="Amount">
							</div>
						</div>

                        <div class="row form-group">
							<div class="col-md-12">
								<label for="account">Bank Account</label>
								<input type="text" name="bank_account" class="form-control" placeholder="Account">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label for="password">Transection password</label>
								<input type="text" name="tpasswd" id="password" class="form-control" placeholder="Password">
							</div>
						</div>
 
						<div class="form-group">
							<input type="submit" value="Submit" name="next" class="btn btn-primary">
						</div> 

					</form>		
				</div>
				<?php
					///////// corrected //////////
					$user_email = $_SESSION['user_email'];
					$project_id = $_GET['project_id'];
					
                    $db     = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=370305");	
                    
                    $usr = pg_query($db, "SELECT *
                                          FROM users 
                                          WHERE email = '$user_email' ");	
                    $usr_info = pg_fetch_assoc($usr);
                    //echo("user emails: ".$user_email." pswd: ".$usr_info['transaction_password']);
                    if($usr_info == NULL) {
						echo '<meta http-equiv="refresh" content="0; URL= signIn.php?status=ONGOING"/>';
					}
					if ($project_id == NULL) {
						echo '<meta http-equiv="refresh" content="0; URL= projects.php?status=ONGOING"/>';
					} 
                    if (isset($_POST['next'])) {
                        //Fetch all data required:
                        //data to be updated
                        $trans_pswd0 = $usr_info['transaction_password'];
                        //data typed in
                        $amount = $_POST['amount'];
                        $account = $_POST['bank_account'];
                        $trans_pswd1 = $_POST['tpasswd'];
						$t = date('Y-m-d H:i:s');
						$result = false;
						if($trans_pswd0 == $trans_pswd1) {
                            $result = pg_query($db, "INSERT INTO fund
                                                 	 VALUES (DEFAULT, '$account', $amount, '$user_email', $project_id, '$t') RETURNING transaction_id");
						}
						
						if($result) {
							echo '<meta http-equiv="refresh" content="0; URL= donated.php"/>';
						  } else {
							echo '<meta http-equiv="refresh" content="0; URL= donateFailed.php"/>';
						}
					}        
				?>
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