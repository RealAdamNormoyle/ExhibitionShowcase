<?php
session_start();

if( $_SESSION["isLoggedIn"] != null){

    header('Location: http://www.1stgjr.com/VirtualGallery/login.php');
    echo "Not Logged in";
}else{
    echo "Logged in";
}


?>

<html>

<head>



</head>

<body>

<h1>PORTAL</h1>

</body>



</html>