<html>
<body>


<?php 

session_start();

include "database.php";

if(!isset($_POST)) {

    header("Location: index.php");
}

$size = 0;
$imageCount = array(10,20,50);

switch($_POST["Size"]){

    case "0":
    $size = 0;

    break;
    case "1":
    $size = 1;

    break;
    case "2":
    $size = 2;

    break;
}

$images = "";

for($i = 1;$i <= $imageCount[$size];$i++){

    $images .= $_POST["ImagePlacement".$i].",";

}



$sql = "INSERT INTO galleries (name,description,owner,interior,size,images) VALUES ( '$_POST[GalleryName]','$_POST[GalleryDescription]','$_SESSION[uid]','$_POST[Interior]','$size','$images')";
        
if ($conn->query($sql) === TRUE) {

    $last_id = $conn->insert_id;

    header('Location: gallery.php/?='.$last_id);
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    return false;
}



?>


</body>
</html>