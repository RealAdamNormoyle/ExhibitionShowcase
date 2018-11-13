<html>


<body>


<?php


if(!isset($_POST))
header('Location: http://www.exhibitionshowcase.co.uk');

session_start();

include "database.php";

$sql = "SELECT * FROM `users` WHERE `email` = '$_POST[Email]' AND `pass` = '$_POST[Password]'";
//$sql = "";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    $_SESSION["isLoggedIn"] = true;
    $_SESSION["email"] = $_POST["Email"];
    $_SESSION["uid"] = $row["uid"];
    $_SESSION["firstname"] = $row["name_first"];
    $_SESSION["lastname"] = $row["name_last"];
    $_SESSION["accounttype"] = $row["accountType"];

    $_SESSION["totalGalleries"] = $row["totalGalleries"];
    $_SESSION["maxGalleries"] = $row["maxGalleries"];

    header('Location: http://www.exhibitionshowcase.co.uk/account.php');
} else {
    $_SESSION["isLoggedIn"] = false;
    header('Location: http://www.exhibitionshowcase.co.uk');

}

?>

</body>

</html>