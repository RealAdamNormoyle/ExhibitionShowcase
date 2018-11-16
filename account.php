
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
		
		<script>
		
		var accountToggleValue = false;
		var galleriesToggleValue = false;
		var imagesToggleValue = false;

		var accountType = <?php echo $_SESSION['accounttype'] ;?>;
		var galleryCount = <?php echo $_SESSION['totalGalleries'];?>;
		var galleryCountMax = <?php echo $_SESSION['maxGalleries'] ;?>;
		<?php $_SESSION['gallerySize'] = 10 ;?>;

		$(document).ready(function(){


		  $('#accountDetails-trigger').click(function(){

			accountToggleValue = !accountToggleValue;
			if(accountToggleValue){
				document.getElementById("accountDetails-content").style.display = "block";
			}else{
				document.getElementById("accountDetails-content").style.display = "none";
			}

			})

		  $('#accountGalleries-trigger').click(function(){

			galleriesToggleValue = !galleriesToggleValue;
			if(galleriesToggleValue){
				document.getElementById("accountGalleries-content").style.display = "block";
			}else{
				document.getElementById("accountGalleries-content").style.display = "none";
			}

			})


		  $('#accountImages-trigger').click(function(){

			imagesToggleValue = !imagesToggleValue;
			if(imagesToggleValue){
				document.getElementById("accountImages-content").style.display = "block";
			}else{
				document.getElementById("accountImages-content").style.display = "none";
			}

			})

		  $('#close-createGallery').click(function(){

                document.getElementById("newGalleryPopup").style.display = "none";
				document.getElementById("upgradePopup").style.display = "none";
			})

			$('#close-upgradeAccount').click(function(){

			document.getElementById("newGalleryPopup").style.display = "none";
			document.getElementById("upgradePopup").style.display = "none";
			})


		  $('#createGallery-trigger').click(function(){

            var canCreate = false;
            switch(accountType){

                case 0:
                    if(galleryCount == 0){
                        canCreate = true;
                    }else{
                        canCreate = false;
                    }
                break;
                case 1:
                    if(galleryCount < galleryCountMax){
                        canCreate = true;
                    }else{
                        canCreate = false;
                    }
                break;
                case 2:
                    canCreate = true;
                break;

            }

            if(canCreate){

                document.getElementById("newGalleryPopup").style.display = "block";
                document.getElementById("upgradePopup").style.display = "none";

            }else{

                document.getElementById("newGalleryPopup").style.display = "none";
                document.getElementById("upgradePopup").style.display = "block";
            }

			})
		});


		function updateBlueprint(s){


				document.getElementById("gallerySmall").style.display = "none";
				document.getElementById("galleryMedium").style.display = "none";
				document.getElementById("galleryLarge").style.display = "none";

				document.getElementById("blueprintImageSmall").style.display = "none";
				document.getElementById("blueprintImageMedium").style.display = "none";
				document.getElementById("blueprintImageLarge").style.display = "none";

			switch(s){

				case "0":
				document.getElementById("gallerySmall").style.display = "block";
				document.getElementById("blueprintImageSmall").style.display = "block";
				break;
				case "1":
				document.getElementById("galleryMedium").style.display = "block";
				document.getElementById("blueprintImageMedium").style.display = "block";

				break;
				case "2":
				document.getElementById("galleryLarge").style.display = "block";
				document.getElementById("blueprintImageLarge").style.display = "block";

				break;
			}

		};

	</script>
	</head>
	<body class="is-preload homepage">
			<div id="newGalleryPopup" class="modal">

		<!-- Modal content -->
			<div class="modal-content">
			<a href="javascript:void(0);" id="close-createGallery" class="button medium icon fa-times" style="height:50px;float:left;;width:60px;font-size:30px;padding:0px;padding: 3% auto;"></a>
			<h2 style="font-size:25px;float:left;margin-left:30px;margin-top:10px;">Let's Create A New Gallery!</h2>

			<br>

			<div style="padding-top:25px;">



					<form action="create-gallery.php" method="post">
					<div>
						<div style="background-color:#00000010;padding:10px;border-radius:5px;width:30%;float:left;">
							<div>
								<fieldset id="create-gallery-inputs" style="width:100%;">

									<p style="font-size:25px; margin:3px;">Gallery Name</p>
									<input id="gallery-name" type="text" name="GalleryName" placeholder="Name your gallery" required>
									<p style="font-size:25px; margin:3px;">Gallery Description</p>
									<input id="gallery-description" type="text" name="GalleryDescription" placeholder="Give your gallery a description" required>
								</fieldset>

							</div>

						</div>

						<div style="background-color:#00000010;padding:10px;border-radius:5px;width:65%;float:right;overflow:visible;height:85%;">

							<div>
								<img id="blueprintImageSmall" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%">
								<img id="blueprintImageMedium" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%;display:none;">
								<img id="blueprintImageLarge" src="images/SmallContemporyBlueprint.png" width=50% style="margin-left:25%;display:none;">
							</div>

							<br>

							<div>
								<p style="font-size:25px; margin:3px;">Image Placements</p>
								<p style="font-size:20px; margin:3px;">Use the dropdowns to select images to display in each poistion.</p>

								
								<div id="gallerySmall" style="display:block;overflow:auto;height:30%;">
								<?php include "gallery-images-10.php"; ?>
								</div>

								<div id="galleryMedium" style="display:none;">
								<?php include "gallery-images-20.php"; ?>
								</div>

								<div id="galleryLarge" style="display:none;">
								<?php include "gallery-images-50.php"; ?>
								</div>

							</div>

						</div>
					</div>
					<br>

					<div style="background-color:#00000010;padding:10px;border-radius:5px;width:30%;margin-top:200px;">
					<div>
						<fieldset id="create-gallery-inputs" style="width:100%;">

								<div>

									<p style="font-size:25px; margin:3px;">Gallery Interior</p>
									<p style="font-size:16px; margin:3px;">Use the dropdown to select the gallery interior</p>
									<select name="Interior">
									<option value="Modern">Modern</option>
									<option value="Contemporary">Contemporary</option>
									<option value="Traditional">Traditional</option>
									</select>
								
								</div>
								
						</fieldset>

							</div>

					</div>

					<div style="background-color:#00000010;padding:10px;border-radius:5px;width:30%;margin-top:20px;">
					<div>
						<fieldset id="create-gallery-inputs" style="width:100%;">

								<div>

									<p style="font-size:25px; margin:3px;">Gallery Size</p>
									<p style="font-size:16px; margin:3px;">Use the dropdown to select the gallery size</p>
									<select name="Size" onchange="updateBlueprint(this.value)">
									<option value="0">Small - Single Room (10 Images)</option>
									<option value="1">Medium - Two Rooms (20 Images)</option>
									<option value="2">Large - Three Rooms (50 Images)</option>
									</select>
								
								</div>
								
						</fieldset>

							</div>

					</div>

					<fieldset id="create-gallery-actions" style="padding-top:20px;">
							
							<input type="submit" id="create-gallery-submit" value="Create" style="width:100px;height:40px;font-size:18px;padding:0px;">
					</fieldset>


					</form>


			</div>
			</div>

		</div>

		<div id="upgradePopup" class="modal">
		<!-- Modal content -->
			<div class="modal-content">
				<a href="javascript:void(0);" id="close-upgradeAccount" class="button medium icon fa-times" style="height:50px; width:60px;font-size:20px;padding:0px;padding-left:7px;padding-top:7px;"></a>
				<p>Some text in the Modal..</p>
			</div>

		</div>

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
					<div id="banner" class="box container"style="padding-top:20px;padding-bottom:20px;" >
						<a href="javascript:void(0);" id="accountDetails-trigger" class="button large icon fa-arrow-circle-right" style="height:60px;width:75px;float:left;margin-right:20px;">					
						</a>	
						<h2 style="font-size:25px;">Account Details</h2>
						<p style="font-size:20px;">Change your account details here.</p>
					</div>
				</div>

				<div id="banner-wrapper" >
					<div id="accountDetails-content" class="box container">
						<div style="height:650px;width:30%;float:left;Margin-right:5%;background-color:#00000010;padding:10px;border-radius:5px;overflow:auto;">
						
						<form action="updateemail.php" method="post">

							<div>
								<p style="font-size:25px; margin:3px;">Name</p>
								<p style="font-size:20px; margin:3px;"><?php echo $_SESSION["firstname"] . " " . $_SESSION["lastname"]?></p>
							</div>
							<div>
								<p style="font-size:25px; margin:3px;">Email</p>
								<p style="font-size:20px; margin:3px;"><?php echo $_SESSION["email"]?></p>
								
								<fieldset id="email_inputs" style="width:100%;">
									<input id="new_email" type="email" name="NewEmail" placeholder="Change your email" required>
								</fieldset>

							</div>
							
							<fieldset id="emailupdate-actions" style="padding-top:10px;">
									
									<input type="submit" id="email-update-submit" value="Update" style="width:100px;height:40px;font-size:18px;padding:0px;">
							</fieldset>


						</form>

						<br>

						<form action="updatepassword.php" method="post">

						<div>
							<p style="font-size:25px; margin:3px;">Password</p>
							
							<fieldset id="email_inputs" style="width:100%;">
								<input id="new_password" type="password" name="NewPassword" placeholder="New Password" required>
								<input id="confirm_password" type="password" name="ConfirmPassword" placeholder="Confirm New Password" required>
								<br>
								<input id="current_password" type="password" name="CurrentPassword" placeholder="Enter your current password" required>
							</fieldset>

						</div>

						<fieldset id="passwordupdate-actions" style="padding-top:10px;">
								
								<input type="submit" id="passwrd-update-submit" value="Update" style="width:100px;height:40px;font-size:18px;padding:0px;">
						</fieldset>


						</form>
						

						</div>

						<div style="height:650px;width:65%;margin-left:35%;background-color:#00000010;border-radius:5px;padding-top:10px;padding-bottom:10px;overflow:auto;" >


						<?php


						include "account-settings.php";


						?>



						</div>

					</div>
				</div>

				<br>

				<div id="banner-wrapper">
					<div id="banner" class="box container"style="padding-top:20px;padding-bottom:20px;" >
						<a href="javascript:void(0);" id="accountGalleries-trigger" class="button large icon fa-arrow-circle-right" style="height:60px;width:75px;float:left;margin-right:20px;">					
						</a>	
						<h2 style="font-size:25px;">Galleries</h2>
						<p style="font-size:20px;">Create and edit your galleries.</p>
					</div>
				</div>
				
				<div id="banner-wrapper" >
					<div id="accountGalleries-content" class="box container">
					<div style="height:500px;width:30%;float:left;Margin-right:5%;background-color:#00000010;padding:10px;border-radius:5px;overflow:auto;">

						<?php


						include "gallery_display_list.php";


						?>


						</div>

						<div style="height:500px;width:65%;margin-left:35%;background-color:#00000010;border-radius:5px;padding-top:10px;padding-bottom:10px;overflow:auto;" >


						<?php


						include "gallery_display_box.php";


						?>



						</div>

					</div>
				</div>

				<br>

								<div id="banner-wrapper">
					<div id="banner" class="box container"style="padding-top:20px;padding-bottom:20px;" >
						<a href="javascript:void(0);" id="accountImages-trigger" class="button large icon fa-arrow-circle-right" style="height:60px;width:75px;float:left;margin-right:20px;">					
						</a>	
						<h2 style="font-size:25px;">Images</h2>
						<p style="font-size:20px;">Upload and edit your images.</p>
					</div>
				</div>
				
				<div id="banner-wrapper" >
					<div id="accountImages-content" class="box container">
						<div style="height:500px;width:40%;float:left;Margin-right:5%;background-color:#00000010;padding:10px;border-radius:5px;">

							<form action="uploadimage.php" method="post"  enctype="multipart/form-data">
							
							<div>
							<p style="font-size:30px;margin-bottom:10px;">Add New Image</p>
							</div>

							<fieldset id="imageupload_inputs" style="width:100%;">


									<p style="font-size:25px; margin:3px;">Image Name</p><input id="image_name" type="text" name="ImageName" placeholder="Enter the display name for the image" required>
									<p style="font-size:25px;margin:3px;">Image Description </p><input id="image_description" type="text" name="ImageDescription" placeholder="Enter a description for the image" required>
									<br>
									<p style="font-size:25px;margin:3px;">Select Image</p><input type="file" name="fileToUpload" id="filetoupload" required>
									
							</fieldset>
							<br>
							<fieldset id="imageupload_actions">
									
									<input type="submit" id="button" value="Upload" style="width:120px;height:50px;font-size:25px;padding:0px;">
							</fieldset>


						</form>


						</div>

						<div style="height:500px;width:55%;margin-left:45%;background-color:#00000010;border-radius:5px;padding-top:10px;padding-bottom:10px;overflow:auto;" >


						<?php


						include "images_display_box.php";


						?>

						

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







<!-- 420 BLAZE -->