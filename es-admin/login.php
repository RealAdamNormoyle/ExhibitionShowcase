<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ES | Admin Dashboard</title>
    <link rel="stylesheet" href="http://www.exhibitionshowcase.co.uk/assets/css/main.css" />
  </head>
  <body>

<div id="page-wrapper">

<!-- Header -->
  <div id="header-wrapper">
  <header id="header" class="container">
    						<!-- Logo -->
                <div id="logoImage" style="width:100%;margin-left:40%;">

                  <img src="http://www.exhibitionshowcase.co.uk/images/Logo2.png" width=20%>
                <!--<span>An Online Virtual Gallery</span>-->
                </div>
      </div>
        </div>

  <!-- Banner -->
    <div id="banner-wrapper" style="width:20%;margin-left:40%;">
      <div id="banner" class="box container">
          <div class="col-7 col-12-medium" style="text-align:center;width:100%;padding:5%;padding-top:0px;padding-bottom:20px;">
            
            <p style="font-size:30px;">Admin Login</p>
            <br>
            <form action="admin-login.php" method="post">
										<fieldset id="inputs">
                    <input id="username" type="email" name="Username" placeholder="Username" required>   
                    <br>
										<input id="password" type="password" name="Password" placeholder="Password" required>
										</fieldset>
                    <br>
										<fieldset id="actions">
										<input type="submit" id="LogInButton" value="Log in">
										</fieldset>
										
						</form>


          </div>
      </div>
    </div>

  </div>

  </body>
  
</html>