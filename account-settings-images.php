<div style="padding-left:5px;padding-top:5px;overflow:auto;height:100%;" >
    <div style="width:25%;height:200px;float:left;">
        <div style="width:80%;height:70%;border-radius:5px;margin:15% 10% 15% 10%;padding-top:10px;background-color:#ffffff70;text-align:center;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);">

            <h2 style="font-size:20px;">Add Image</h2>
            <p style="font-size:14px;padding: 10px; padding-top:0px;">Click the button below to create a new image</p>

            <a href="javascript:void(0);" id="upload-image-trigger" class="remove-account-button" style="background-color:#0090c5;color:white;font-size:20px;padding: 5px 15px 5px 15px;text-decoration:none;border-radius:5px;">CREATE</a>
    
        </div>   
    </div>

<?php

include "database.php";
//Validate post data

$sql = "SELECT * FROM images WHERE owner='$_SESSION[uid]'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "
        <div class=\"image-container\" style=\"width:25%;height:200px;float:left;\">
        
        <a href=\"\">
                <div class=\"content-card\" style=\"width:95%;height:95%;margin:2.5%;\">
                          
                    <img width=\"150%\" height=\"150%\" src=\"" ."http://exhibitionshowcase.co.uk/users/" . $_SESSION['uid']. "/images/". $row['id'] . ".jpg" . "\" alt=\"\"/>

                </div> 
        </a>
        </div>";
       
    }
}else{

	echo "There are no images uploaded";
}

?>
