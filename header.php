<head>
<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<link rel="stylesheet" href="assets/css/main.css" />

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/v4-shims.css">
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<header id="header" class="container">



<script>

window.onscroll = function() {OnPageScroll()};

		$(document).ready(function(){
		  $('#login-trigger').click(function(){
			$(this).next('#LogInPopup').slideToggle();
			$(this).toggleClass('active');          
			
			})
		});

		var navbar = document.getElementById("sticky-nav");

function OnPageScroll() {
  if (window.pageYOffset <= 10) {
    document.getElementById("sticky-nav").style.display = "none";
  } else {
    document.getElementById("sticky-nav").style.display = "block";
  }
}

</script>

	<!-- Logo -->
		<div id="logoImage" style="height:150px;">

			<img src="images/Logo2.png" height=100%>
			<!--<span>An Online Virtual Gallery</span>-->
		</div>

	<!-- Nav -->
		<nav id="nav">

			<ul>
				<li <?php if ($currentPage === 'index') {echo 'class="current"';} ?>><a href="index.php">Welcome</a></li>
				<li <?php if ($currentPage === 'galleries') {echo 'class="current"';} ?>><a href="galleries.php">Discover</a></li>
				<li <?php if ($currentPage === 'about') {echo 'class="current"';} ?>><a href="about.php">Learn More</a></li>
				<li <?php if ($currentPage === 'premium') {echo 'class="current"';} ?>><a href="premium.php">Pricing</a></li>
				<?php

				if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true){

					echo "<li ";
					if ($currentPage === 'account') {echo 'class="current"';}
					echo "><a href=\"account.php\">Dashboard</a></li>";
					echo "<li><a href=\"logout.php\">LogOut</a></li>";

				}else{

					echo 
					"<li><a id=\"login-trigger\" href=\"#\">Log In </a>
					
					<div id=\"LogInPopup\">
					
					<form action=\"login.php\" method=\"post\">
					<div><h4>Log into your account</h4></div>
					<fieldset id=\"inputs\">
					<input id=\"username\" type=\"email\" name=\"Email\" placeholder=\"Email address\" required>   
					<input id=\"password\" type=\"password\" name=\"Password\" placeholder=\"Password\" required>
					</fieldset>
					
					<fieldset id=\"actions\">
					<input type=\"submit\" id=\"LogInButton\" value=\"Log in\">
					<input type=\"checkbox\" checked=\"checked\"> <label>Keep me signed in</label>
					</fieldset>
					
					</form>
					</div>
					</li>";
				}
					
				?>

			</ul>
			
		</nav>

		<!-- StickyNav -->
		<nav id="sticky-nav" class="sticky">

		<a href="index.php">
		<div style="float:left;">

		<img src="images/Logo1.png" height=100%>
			
		</div>
		<div style="float:left; height:100%; margin-top:0.8em;font-size:1.5em">
			<p> Exhibition Showcase </p>
		</div>
		</a>
		<div style="float:right;">

			<ul>
				<li <?php if ($currentPage === 'index') {echo 'class="current"';} ?>><a href="index.php">Welcome</a></li>
				<li <?php if ($currentPage === 'galleries') {echo 'class="current"';} ?>><a href="galleries.php">Galleries</a></li>
				<li <?php if ($currentPage === 'about') {echo 'class="current"';} ?>><a href="about.php">About</a></li>
				<li <?php if ($currentPage === 'premium') {echo 'class="current"';} ?>><a href="premium.php">Premium</a></li>
				<?php

				if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true){

					echo "<li ";
					if ($currentPage === 'account') {echo 'class="current"';}
					echo "><a href=\"account.php\">Dashboard</a></li>";
					echo "<li><a href=\"logout.php\">LogOut</a></li>";

				}else{

					echo 
					"<li><a id=\"login-trigger\" href=\"#\">Log In </a>
					
					<div id=\"LogInPopup\">
					
					<form action=\"login.php\" method=\"post\">
					<div><h4>Log into your account</h4></div>
					<fieldset id=\"inputs\">
					<input id=\"username\" type=\"email\" name=\"Email\" placeholder=\"Email address\" required>   
					<input id=\"password\" type=\"password\" name=\"Password\" placeholder=\"Password\" required>
					</fieldset>
					
					<fieldset id=\"actions\">
					<input type=\"submit\" id=\"LogInButton\" value=\"Log in\">
					<input type=\"checkbox\" checked=\"checked\"> <label>Keep me signed in</label>
					</fieldset>
					
					</form>
					</div>
					</li>";
				}
					
				?>

			</ul>

			</div>
		</nav>

</header>