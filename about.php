
<?php
session_start();
?>

<?php $currentPage = 'about'; ?>

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
							<div class="HeroText">
								<p>Exhibition Showcase</p>
								<p style="font-size:1.5em;">Learn more about what we do.</p>
							
							</div>
							
						</div>
					</div>
				</div>

			<!-- Main -->
	<br>
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">

							<div>

								<!-- Content -->
									<div id="content">
										<section class="last">

										<h2><strong>About</strong></h2>
										<div class="content-container">
											<p><strong>Exhibition Showcase</strong>, is a fully interactive virtual gallery made by <a href="http://amnsoftware.co.uk">AMN SOFTWARE</a>.
											Exhibition Showcase provides the perfect place for all artists and creative people alike to show thier work to the world, while perfect for professional use we encourage students to use this brilliant platform to host thier work for the world and potetial employers to see! To put it simply, Exhibition Showcase allows you to upload your work into one of our stunning hand-crafted 3D enviroments, then you and the world can walk around your new space surrounded by your work. We have several unique enviroments for you to choose from with sizes to fit your projects perfectly no matter how big or small.</p>
										</div>

										<h2><strong>Enviroments</strong></h2>
										<div class="content-container">
											<p>Photorealistic hand-crafted enviroments and beautiful graphics all in your browser on all hardware. We have taken a great amount of pride in how our galleries look and great optimisation lets you enjoy this stunning look on all hardware.</p>
											
											<div class="carousel-container">
											<div id="aboutCarousel" class="carousel slide" data-ride="carousel">
												<!-- Indicators -->
												<ol class="carousel-indicators">
													<li data-target="#aboutCarousel" data-slide-to="0" class="active"></li>
													<li data-target="#aboutCarousel" data-slide-to="1"></li>
													<li data-target="#aboutCarousel" data-slide-to="2"></li>
												</ol>

												<!-- Wrapper for slides -->
												<div class="carousel-inner">
													<div class="item active">
														<img src="images/Screen1.jpg" alt="">
													</div>

													<div class="item">
														<img src="images/Screen2.jpg" alt="">
													</div>

													<div class="item">
														<img src="images/Screen3.jpg" alt="">
													</div>
												</div>

												<!-- Left and right controls -->
												<a class="left carousel-control" href="#aboutCarousel" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="right carousel-control" href="#aboutCarousel" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right"></span>
													<span class="sr-only">Next</span>
												</a>
											</div>
											</div>
											</div>

											<h2><strong>Allways Online</strong></h2>
										<div class="content-container">
											<p>No matter where you are in the world, your work is accessable to everyone all the time if you choose to do so. Interested visitors can leave you messages while viewing your gallery so your fans can allways get in touch no matter where in the world, and when they do we will give you a notification.</p>
											</div>
											
											<h2><strong>Donations</strong></h2>
										<div class="content-container">
											<p>You often dont get paid for your personal work, but that doesnt mean that people wouldnt like to donate to help you continue doing the things you love. We show a nice big donation button on your galleries page so your visitors know that if they like your work they can choose to help you out a little.</p>
											</div>

											<h2><strong>Free Tier</strong></h2>
										<div class="content-container">
											<p>Along with our Plus and Professional subscriptions we also offer a FREE basic subscription, this is perfect if you would like to try out our product or are a student who only wants to host one small project. Check out our pricing structure and the benefits of Plus/Professional by clicking the button below.</p>
											<a href="premium.php" class="button icon fa-file-text-o">Subscription Pricing</a>
											</div>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>



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



