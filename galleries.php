
<?php
session_start();
?>

<?php $currentPage = 'galleries'; ?>

<html>
	<head>
		<title>Exhibition Showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
		$(document).ready(function(){
		  $('#login-trigger').click(function(){
			$(this).next('#LogInPopup').slideToggle();
			$(this).toggleClass('active');          
			
			})
		});
</script>
        
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
								<div style="width:30%;">
								<p>Browse Galleries</p>
								</div>
								<div style="width:70%;">
								<div class="search-container">
									<form action="galleries.php">
										<input style="width:80%;margin-right:10px;display:inline-block;" type="text" placeholder="Search.." name="search">
										<button style="width:35px;height:35px;padding:0px;margin:0px;"type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
								</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">

						<?php

include "database.php";
//Validate post data

$sql = "SELECT * FROM galleries";
$result = $conn->query($sql);

$pages = ceil($result->num_rows / 25);
$currentPage = 1;

if($result->num_rows > 0){
		// output data of each row
		
		$itemCount = 25;
		if($result->num_rows < (25 * $currentPage)){
			$itemCount = $result->num_rows;
		}

	for($i =0;$i<$itemCount;$i++){

		$row = $result->fetch_assoc();

			$bannerImage = "";

			if(file_exists("http://exhibitionshowcase.co.uk/users/" . $row['owner']. "/images/banner-". $row['id'] . ".jpg")){
	
					$bannerImage = "http://exhibitionshowcase.co.uk/users/" . $row['owner']. "/images/banner-". $row['id'] . ".jpg";
			}else{
					$bannerImage = "http://exhibitionshowcase.co.uk/images/banner-default.jpg";
			}

        echo "
				<div class=\"col-4 col-12-medium\">

				<!-- Box -->
					<section class=\"box feature\">
					<img class=\"image featured\" src=".$bannerImage." alt=\"\" height=\"auto\" width=\"auto\"/>

						<div class=\"inner\" style=\"padding-top:15px;margin-top:-45px;\">

						<div style=\"z-index:2;height:50px;position:relative;color:#444444;margin-right:-40px;text-shadow: 0 0 3px #ffffff77;\">
						<div style=\"float:right;width:50px;height:30px;text-align:center;\">
						<i style=\"float:left;\" class=\"fa fa-thumbs-down\"></i>
						<p style=\"float:left;font-size:12px;font-weight:600;\">". $row['dislikes']."</p>
						</div>
						<div style=\"float:right;width:50px;height:30px;text-align:center;\">
						<i style=\"float:left;\" class=\"fa fa-thumbs-up\"></i>
						<p style=\"float:left;font-size:12px;font-weight:600;\">". $row['likes']."</p>
						</div>
						<div style=\"float:right;width:50px;height:30px;text-align:center;\">
						<i style=\"float:left;\" class=\"fa fa-eye\"></i>
						<p style=\"float:left;font-size:12px;font-weight:600;\">". $row['views']."</p>
						</div>
						</div>
						<h2 style=\"margin:0px;padding:0px;\">". $row['name']."</h2>
						<p>". $row['description']."</p>
						<br>
						<a href=\"gallery.php?id=".$row['id']."\" id=\"createGallery-trigger\" class=\"remove-account-button\" style=\"height:40px;background-color:#0090c5;color:white;font-size:20px;padding: 10px 25px 10px 25px;text-decoration:none;border-radius:5px;margin-bottom:-10px;\">ENTER GALLERY</a>
						</div>
					</section>

			</div>";
       
    }
}else{

	echo "There are no images uploaded";
}

?>
							

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



