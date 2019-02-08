
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();

if(!isset($_SESSION["isLoggedIn"]) || $_SESSION["isLoggedIn"] == false){
	
	header('Location: index.php');
}



?>

<?php $currentPage = 'account'; ?>

<html>
	<head>
		<title>Exhibition Showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
		<?php include "account-scripts.php"; ?>

	</head>
	<body class="is-preload homepage">

			<?php include "create-gallery-popup.php"; ?>

			<?php include "upload-image-popup.php"; ?>

			<?php include "upgrade-popup.php"; ?>

			<?php include "gallery-share-popup.php"; ?>

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
							<div class="col-7 col-12-medium">
								<h2 style="font-size:30px;">Welcome back <?php echo $_SESSION["firstname"] ?></h2>
								<p style="font-size:25px;">Make changes to your account</p>
							</div>
						</div>
					</div>
				</div>

				<br>

				<div id="banner-wrapper">

					<div id="banner" class="box container"style="padding-top:20px;padding-bottom:20px;height:670px;" >

						<div class="account-tab">
							<button class="tablinks" id="defaultOpen" onclick="openTab(event, 'accountDetails-content')">Account Details</button>
							<button class="tablinks" onclick="openTab(event, 'accountGalleries-content')">Galleries</button>
							<button class="tablinks" onclick="openTab(event, 'accountImages-content')">Images</button>
							<button class="tablinks" onclick="openTab(event, 'accountMembership-content')">Membership</button>
							<button class="tablinks" onclick="openTab(event, 'accountMessages-content')">Messages</button>
						</div>
						
						<div style="width:80%;height:100%;background-color:#dddddd;box-shadow: inset 0 4px 8px 0 rgba(0, 0, 0, 0.2), inset 0 6px 20px 0 rgba(0, 0, 0, 0.1);border-radius:3px;">

							<div id="accountDetails-content" class="tabcontent">
								<?php
									include "account-settings-details.php";
								?>
							</div>

							<div id="accountGalleries-content"class="tabcontent">							
								<?php
									include "account-settings-galleries.php";
								?>
							</div>

							<div id="accountImages-content"class="tabcontent">							
								<?php
									include "account-settings-images.php";
								?>
							</div>

							<div id="accountMembership-content"class="tabcontent">							
								<?php
									include "account-settings-membership.php";
								?>
							</div>
	
							<div id="accountMessages-content"class="tabcontent">						
								<?php
									include "account-settings-messages.php";
								?>
							</div>					

						</div>
					</div>
				</div>
				
				<br>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/Art1.jpg" alt="" height="275px" width="auto"/></a>
										<div class="inner">
											<header>
												<h2>Traditional Art</h2>
												<p>The place for hanging your paintings and art for everyone to love fill a gallery with your work</p>
											</header>
											<p></p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/Art2.jpg" alt="" height="275px" width="auto"/></a>
										<div class="inner">
											<header>
												<h2>Digital Art</h2>
												<p>Bring your work to life and let the world see your work in a new light like never before</p>
											</header>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<a href="#" class="image featured"><img src="images/Art3.jpg" alt="" height="275px" width="auto"/></a>
										<div class="inner">
											<header>
												<h2>Photography</h2>
												<p>Exhibit your work to the world, landscape or portrait your work will look amazing</p>
											</header>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Featured Galleries</h3>
											<div class="grid">
												<div class="row gtr-50">
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
												</div>
											</div>
											<a href="#" class="button icon fa-file-text-o">More</a>
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>So what's this all about?</h2>
											<p><strong>Exhibition Showcase</strong>, a feature full interactive virtual gallery by <a href="http://amnsoftware.co.uk">AMN SOFTWARE</a>.
											Exhibition Showcase provides the perfect place for all artists and creative people alike to show thier work to the world, while perfect for professional use we encourage students to use this brilliant platform to host thier work for the world and potetial employers to see!
											</p>
											<p>.</p>
											<a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<?php include 'footer.php'; ?>

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







<!-- 420 BLAZE -->