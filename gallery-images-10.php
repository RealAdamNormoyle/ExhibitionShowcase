<?php
include "database.php";
//Validate post data

$sql = "SELECT * FROM images WHERE owner='$_SESSION[uid]'";
$availableImages = $conn->query($sql);
global $rows;

$rows= $availableImages->num_rows;
global $htmlString;

if($rows != 0){

    
    for($i = 0;$i < $rows ;$i++){
        
        if(($row = $availableImages->fetch_assoc()) != null){
            
            $id = $row["id"];
            $name = $row["name"];
            
            $htmlString .= "<option value=\"". $id . "\">". $name ."</option>";
        }
        
    }

}


?>

<html>
<body>
<fieldset id="create-gallery-inputs" style="width:100%;">


<?php

for($i =0;$i < ($_SESSION['gallerySize']/2);$i++){

    $j = $i * 2;
    echo "<div><div style=\"width:40%;float:left;\"><p style=\"font-size:25px;font-weight:bold; margin:3px;float:left;\">".($j+1)."</p><select name=\"ImagePlacement".($j+1)."\"style=\"float:left;\">".$htmlString."</select></div><div style=\"width:40%;float:right;\"><p style=\"float:left;font-weight:bold; font-size:25px;margin:3px;\">".($j+2)."</p><select style=\"float:left;\" name=\"ImagePlacement".($j+2)."\">".$htmlString."</select></div></div>";

}



?>

</fieldset>
</body>
</html>