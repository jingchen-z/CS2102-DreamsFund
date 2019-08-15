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
							<font color="black" face="verdana">
							<h1><font face="verdana">Our projects here!</font></h1>
							<h2><font face="verdana">Scroll down to find out more!</font></h2>
							<h2>
							<font color="black" face="verdana">
								<form class="form-inline" method='POST' id="fh5co-header-subscribe">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<input type="text" name="search_msg" class="form-control" id="" placeholder="">
											<button type="submit" name="search" class="btn btn-default">Search</button>
										</div>
										<?php
											if (isset($_POST["search"])) {
												if ($_GET["cate"] == "") {
													echo "<meta http-equiv='refresh' content='0; URL = Projects.php?status=".$_GET["status"]."&search=".$_POST[search_msg]."'/>";
												} else {
													echo "<meta http-equiv='refresh' content='0; URL = Projects.php?status=".$_GET["status"]."&cate=".$_GET["cate"]."&search=".$_POST[search_msg]."'/>";
												}
											}
										?>
									</div>
								</form>
							</font>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-services">
		<div class="container">
			<div class="row">
				<div style="padding-left:0px" class="col-md-2 col-sm-4 col-xs-6">
					<h3><font face="verdana">Categories</font></h3>
					<?php
						echo '<li><a href="projects.php?status='.$_GET["status"].'&cate=Agriculture">Agriculture</a></li>
							  <li><a href="projects.php?status='.$_GET["status"].'&cate=Construction">Construction</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Education">Education</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Finance">Finance</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Health">Health</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Manufactoring">Manufactoring</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Professional">Professional</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Real_Estate">Real Estate</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Retails">Retails</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Services">Services</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Transportation">Transportation</a></li>
						      <li><a href="projects.php?status='.$_GET["status"].'&cate=Wholesale">Wholesale</a></li>';
					?>
				</div>
				<div style="margin-left:18%" class="row" style="margin-right:0%">
					<?php
						$current_page = $_GET["page"];
						if ($current_page == "") {
							$current_page = 1;
						}
						$search_info = $_GET["search"];
						$catego = $_GET["cate"];
						$this_status = $_GET["status"];
						if ($this_status=="") {
							$this_status="ONGOING";
						}
						$db     = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=370305");
						if ($catego == "") {
							$pg_total  = pg_query($db, "SELECT * FROM project_initiated_by WHERE title LIKE '%".$search_info."%' AND status = '".$this_status."'
								UNION SELECT * FROM project_initiated_by WHERE description LIKE '%".$search_info."%' AND status = '".$this_status."' ORDER BY project_id");
							$total_fetch  = pg_fetch_all($pg_total);
							$total  = count($total_fetch);
						} else {
							$pg_total  = pg_query($db, "SELECT * FROM project_initiated_by WHERE title LIKE '%".$search_info."%' AND status = '".$this_status."' AND category = '".$catego."'
								UNION SELECT * FROM project_initiated_by WHERE description LIKE '%".$search_info."%' AND status = '".$this_status."' AND category = '".$catego."' ORDER BY project_id");
							$total_fetch = pg_fetch_all($pg_total);
							$total = count($total_fetch);
						}

						$total_page = ceil($total / 9);

						if ($current_page > $total_page) {
							$current_page = $total_page;
						}
						$_SESSION[current_page_num] = $current_page;

						$total_project_inthispage = ($current_page * 9);

						if ((($current_page * 9) - 1) > $total - 1) {
							$total_project_inthispage = $total;
						}

						if ($total_fetch[(($current_page - 1) * 9)][title] != "") {
							for ($x = ($current_page - 1) * 9; $x < $total_project_inthispage; $x++) {
								echo "
								<div class='col-lg-4 col-md-4'>
								<div class='fh5co-blog animate-box' data-animate-effect='fadeIn'>
									<a href='projectDetails.php?"."project_id=".$total_fetch[$x][project_id]."'><img class='img-responsive' src='images/p-2.png' width='600' height='700'></a>
									<div class='blog-text'>
									<h3 style='height:15px' style='overflow:hidden'>".$total_fetch[$x][title]."</h3>
									<span class='posted_on'>".$total_fetch[$x][start_date]."</span>
									<span class='comment'>$".(round($total_fetch[$x][funding_sought]/1000000))."M<i class='icon-speech-bubble'></i></span>
									<p style='height:15px' style='overflow:hidden'>".$total_fetch[$x][description]."</p>
									<a href='projectDetails.php?"."project_id=".$total_fetch[$x][project_id]."' class='btn btn-primary'>Read More</a>
									</div>
								</div>
								</div>";
							}
						} else {
							echo '<h1 align="center"><font face="verdana">No Results Found.</font></h1>';
						}
					?>
				</div>
				<div style="margin-left:37%" class="row">
					<form class="form-inline" method='POST' id="fh5co-header-subscribe">
						<div class="col-md-6">
							<?php
								echo "
								<div class='form-group'>
									<input type='text' name='page_NUM' class='form-control' id='' placeholder='".$_SESSION[current_page_num]."'>
									<button type='submit' name='go' class='btn btn-default'>Go</button>
								</div>
								";
								$search_info = $_GET["search"];
								$catego = $_GET["cate"];
								$this_status = $_GET["status"];
								if (isset($_POST['go'])) {
									if ($catego == "") {
										echo '<meta http-equiv="refresh" content="0; URL = projects.php?status='.$this_status.'&search='.$search_info.'&page='.$_POST["page_NUM"].'"/>';
									} else {
										echo '<meta http-equiv="refresh" content="0; URL = projects.php?status='.$this_status.'&cate='.$catego.'&search='.$search_info.'&page='.$_POST["page_NUM"].'"/>';
									}
								}
							?>
						</div>
					</form>
				</div>
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