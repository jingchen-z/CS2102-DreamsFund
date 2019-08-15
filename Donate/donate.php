<?php
 session_start();
?>
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
                    //$_SESSION['userEmail'] = '134456@gmail.com';
					$user_email = $_SESSION['userEmail'];
                    $projectid = $_SESSION['projectID'];
                    $db     = pg_connect("host=localhost port=5432 dbname=Project1 user=postgres password=370305");	
                    $result = pg_query($db, "SELECT num_of_doners,current_funding 
                                             FROM project_initiated_by 
                                             WHERE projectID = '$projectid'");	
                    $project = pg_fetch_assoc($result);
                    
                    $usr = pg_query($db, "SELECT *
                                          FROM users 
                                          WHERE email = '$user_email'");	
                    $usr_info = pg_fetch_assoc($usr);
                    
                    if($project == NULL) {
                        echo '<meta http-equiv="refresh" content="0; URL= Project.php" />';
                    } else if ($usr_info == NULL) {
                        echo '<meta http-equiv="refresh" content="0; URL= sighIn.php" />';
                    } else {
                        if (isset($_POST['next'])) {

                            //Fetch all data required:
                            //data to be updated
                            $num_doners = $project[num_of_doners];
                            $num_doners++;
                            $current_fund = $project[current_funding];
                            $sought = $project[funding_sought];
                            $trans_pswd0 = $usr_info['transaction_password'];
                            
                            //data typed in
                            $amount = $_POST['amount'];
                            $account = $_POST['bank_account'];
                            $trans_pswd1 = $_POST['tpasswd'];
                        
                            if($trans_pswd0 != $trans_pswd1) {
                                echo "<li>".$trans_pswd0."</li>"; echo "<li>".$trans_pswd1."</li>";
                                //echo '<meta http-equiv="refresh" content="0; URL= wrongPswd.php" />';
                            }
                            
                            //insert a new fund record:
                            $t = date('Y-m-d H:i:s');
                            $result = pg_query($db, "INSERT INTO fund
                                                     VALUES ('z', '$account', $amount, '$user_email', $projectid, '$t');");
                            if($result) {
                                echo "<li>succeeded insert</li>";
                            } else {
                                echo '<meta http-equiv="refresh" content="0; URL= donateFailed.php" />';
                            }
                            //update project info
                            $result = pg_query($db, "UPDATE project_initiated_by
                                                     SET $num_of_doners = $num_doners,
                                                         $current_fund = $current_fund + $amount;");
                            //if($current_fund + $amount >= $sought) {
                              //  echo '<meta http-equiv="refresh" content="0; URL= Project.php" />';
                            //}
                            if($result) {
                                echo '<meta http-equiv="refresh" content="0; URL= donated.php" />';
                            } else {
                                echo "<li>failed update</li>";
                            }
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
