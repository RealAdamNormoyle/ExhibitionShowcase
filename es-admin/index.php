<?php
session_start();

if(!isset($_SESSION["isAdminLoggedIn"]))
  header('Location: login.php');
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
                <div id="logoImage" style="height:150px;">

                  <img src="http://www.exhibitionshowcase.co.uk/images/Logo2.png" height=100%>
                <!--<span>An Online Virtual Gallery</span>-->
                </div>
</div>
  </div>

  <!-- Banner -->
    <div id="banner-wrapper">
      <div id="banner" class="box container">
          <div class="col-7 col-12-medium" style="text-align:center;width:100%;padding:5%;padding-top:0px;padding-bottom:20px;">
            <br>
            <p>Welcome Back Comrade!</p>
            <p>Lets see how things are going.</p>
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
                  <section class="box feature" style="text-align:center;">
                      <br>
                      <header>
                        <h2 style="font-size:40px;font-weight:600;">Site Visitors</h2>
                      </header>
										<div class="feature circle" style="width:75%;height:75%;background-color: #f0f0f0;border-radius:50%;margin-left:12%;box-shadow:inset 0 0 10px #0090c5;">

                      <p style="font-size:50px;color:#0090c5;font-weight:600;padding-bottom:45%;padding-top:45%;">
                      <?php 
                      
                      include "database.php";

                        $sql = "SELECT * FROM `visitors`";
                        //$sql = "";
                        $result = $conn->query($sql);

                        echo $result->num_rows;

                    ?></p>
                    </div>
                    <br>
									</section>

							</div>
							<div class="col-4 col-12-medium">

              <!-- Box -->
              <section class="box feature" style="text-align:center;">
                      <br>
                      <header>
                        <h2 style="font-size:40px;font-weight:600;">Registered Users</h2>
                      </header>
										<div class="feature circle" style="width:75%;height:75%;background-color: #f0f0f0;border-radius:50%;margin-left:12%;box-shadow:inset 0 0 10px #0090c5;">

                      <p style="font-size:50px;color:#0090c5;font-weight:600;padding-bottom:45%;padding-top:45%;"><?php 
                      
                      include "database.php";

                        $sql = "SELECT * FROM `users`";
                        //$sql = "";
                        $result = $conn->query($sql);

                        echo $result->num_rows;

                    ?></p>
                    </div>
                    <br>
									</section>

							</div>
							<div class="col-4 col-12-medium">

              <!-- Box -->
              <section class="box feature" style="text-align:center;">
                      <br>
                      <header>
                        <h2 style="font-size:40px;font-weight:600;">Paid Accounts</h2>
                      </header>
										<div class="feature circle" style="width:75%;height:75%;background-color: #f0f0f0;border-radius:50%;margin-left:12%;box-shadow:inset 0 0 10px #0090c5;">

                      <p style="font-size:50px;color:#0090c5;font-weight:600;padding-bottom:45%;padding-top:45%;"><?php 
                      
                      include "database.php";

                        $sql = "SELECT * FROM `users` WHERE `accountType` > 0";
                        //$sql = "";
                        $result = $conn->query($sql);
                        
                        echo $result->num_rows;
                        
                        ?></p>
                    </div>
                    <br>
									</section>
                  
                </div>
              </div>
            </div>
            
          </div>

          <div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">

              
              
							
						</div>
					</div>
				</div>





  </body>
  
</html>