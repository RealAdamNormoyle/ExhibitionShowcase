<?php
session_start();

include 'db.php';

if($_SESSION["isLoggedIn"] == "true"){

    header('Location: http://www.1stgjr.com/VirtualGallery/portal.php');
}else{

    if($_POST['user'] != null && $_POST['pass'] ! null){
        
        if(call_routine("LogIn",($_POST['user'],$_POST['pass'])) == 0){

            $_SESSION["isLoggedIn"] = "true";
            $_SESSION["User"] = $_POST['user'];
            header('Location: http://www.1stgjr.com/VirtualGallery/portal.php');

        }

    }

}


?>

<html>

<head>



</head>

<body>

<h1>LOGIN</h1>

<form action="portal.php" method="post">
Username: <input type="text" name="user"><br>
Password: <input type="hidden" name="pass"><br>
LogIn<input type="submit">

</form>

</body>



</html>