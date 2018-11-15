<html>


<body>


<?php


if(!isset($_POST))
header('Location: login.php');

session_start();

include "database.php";

$sql = "SELECT * FROM `admin` WHERE `user` = '$_POST[Username]' AND `pass` = '$_POST[Password]'";
//$sql = "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    $_SESSION["isAdminLoggedIn"] = true;

    header('Location: index.php');
} else {
    
    header('Location: login.php');

}

?>

</body>

</html>