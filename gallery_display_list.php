
<?php

include "database.php";
//Validate post data

$sql = "SELECT * FROM galleries WHERE owner='$_SESSION[uid]'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<div style=\"width:96%;height:110px;border-radius:5px;padding:5px;margin:2%;background-color:#00000010;box-shadow: 5 5;\"> <div style=\" float:left;\"> </div> <div style=\"float:left;width:120px; margin-left:20px; \"> <p style=\"height:30px; font-size:20px;margin-bottom: 3px;\">". $row['name'] ."</p> <p style=\"height:70px;margin-bottom: 3px; font-size:18px;\">". $row['description'] ."</p></div> <div style=\"margin:5px;width:40px;height:40px;border-radius:3px;background-color:#0090c5;float:right;\"> <div style=\"padding-left:8px;padding-top:7px;font-size:25px;font-weight:100;color:white;\" class=\"fa fa-trash-alt\"> </div></div> <div style=\"margin:5px;width:40px;height:40px;border-radius:3px;background-color:#0090c5;float:right;\"> <div style=\"padding-left:8px;padding-top:7px;font-size:25px;font-weight:100;color:white;\" class=\"fa fa-edit\"> </div></div></div>";
       
    }
}else{

	echo "You do not have any galleries, please create one";
}


include "new-gallery-popup.php";

?>

<div style="text-align:center;">

<br>

<div style="wdith:96%;height:110px;border-radius:5px;background-color:#00000010;padding:5px;">

<p style="font-size:20px;margin-bottom:5px;">Create a new gallery</p>

<a href="javascript:void(0);" id="createGallery-trigger" class="button medium icon fa-plus" style="height:50px; width:60px;font-size:20px;padding:0px;padding-left:7px;padding-top:7px;"></a>

</div>

</div>