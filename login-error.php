
<?php
session_start();

include "database.php";


?>

<?php $currentPage = 'error'; ?>

<html>
	<head>
		<title>Exhibition Showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">

					<?php					
					include "header.php";
					?>

				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium" style="text-align:center; width:100%;">
								<p style="font-size:20px;">There was a probelm logging in, check your username/password and try again.</p>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				
                <br>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Help</h3>
											<div class="grid">
                                                <div style="margin-bottom:5px;">

                                                <p style="margin:0px;">Forgot Password?</p>
                                                <a href="" >Reset Password</a>
                                                </div>
                                                <div style="margin-bottom:5px;">
                                                <p style="margin:0px;">Lost access to your email?</p>
                                                <a href="" >Recover Account</a>

                                                </div>

                                                <div style="margin-bottom:5px;">

                                                <p style="margin:0px;">Dont have an account?</p>
                                                <a href="" >Create Account</a>

                                                </div>

											</div>
											<a href="#" class="button icon fa-file-text-o">F.A.Q & Answers</a>
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>Login</h2>
											<form action="login.php" method="post">
										<fieldset id="inputs" style="width:50%;">
										<input id="username" type="email" name="Email" placeholder="Email address" required>   
                                        <br>
										<input id="password" type="password" name="Password" placeholder="Password" required>
										</fieldset>
										<br>
										<fieldset id="actions">
										<input type="submit" id="LogInButton" value="Log in">
										</fieldset>
										
										</form>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Helpful Links</h3>
										<ul class="style2">
											<li><a href="#">Log In</a></li>
											<li><a href="#">Account</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">Log Out</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Premium Benefits</h3>
										<ul class="style2">
											<li><a href="#">More than one gallery</a></li>
											<li><a href="#">More than 20 images per gallery</a></li>
											<li><a href="#">More gallery interiors</a></li>
											<li><a href="#">Embedd into your website</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Exhibition Showcase</h3>
										<ul class="style2">
											<li><a href="#">Created by AMN SOFTWARE</a></li>
											<li><a href="#">Press Kit</a></li>
											<li><a href="#">About</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>Norwich, United Kingdom<br />
										contact@exibitionshowcase.co.uk</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Exibition Showcase. All rights reserved</li><li>Created by : <a href="http://amnsoftware.co.uk">AMN SOFTWARE LTD</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>



