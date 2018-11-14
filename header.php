<header id="header" class="container">


<script>
		$(document).ready(function(){
		  $('#login-trigger').click(function(){
			$(this).next('#LogInPopup').slideToggle();
			$(this).toggleClass('active');          
			
			})
		});
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
									<li <?php if ($currentPage === 'galleries') {echo 'class="current"';} ?>><a href="galleries.php">Galleries</a></li>
									<li <?php if ($currentPage === 'about') {echo 'class="current"';} ?>><a href="about.php">About</a></li>
									<li <?php if ($currentPage === 'premium') {echo 'class="current"';} ?>><a href="premium.php">Premium</a></li>

									<?php

									if(!isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] === true){

										echo 
										"<li <?php if ('$currentPage' === 'account') {echo \"class=\"current\"\";} ?><a href=\"account.php\">Dashboard</a></li><li><a href=\"logout.php\">LogOut</a></li>";

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

					</header>