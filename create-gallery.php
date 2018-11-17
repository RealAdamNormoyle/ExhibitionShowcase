<html>
<body>


<?php 

session_start();

include "database.php";

if(!isset($_POST[])) {

    header("Location: index.php")
}

$size = 0;
$imageCount = {10,20,50};

switch($_POST['Size']){

    case "Small":
    $size = 0;

    break;
    case "Small":
    $size = 1;

    break;
    case "Small":
    $size = 2;

    break;
}

$images = "";

for($i = 0;$i < $imageCount[$size];$i++){

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