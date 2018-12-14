<div style="padding-left:5px;padding-top:5px;overflow:auto;height:100%;" >
    <div style="width:33%;height:300px;float:left;">
        <div style="width:80%;height:70%;border-radius:5px;margin:15% 10% 15% 10%;background-color:#00000010;text-align:center;">

            <br>

            <h2 style="font-size:18px;">Upload a new image</h2>
            <p style="font-size:14px;">Select an image to upload</p>
            <br>
            <a href="javascript:void(0);" id="remove-account-button" class="remove-account-button" style="background-color:#0090c5;color:white;font-size:20px;padding: 10px 25px 10px 25px;text-decoration:none;border-radius:5px;">UPLOAD</a>
    
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
        <div style=\"width:33%;height:300px;float:left;\">
        
                <div style=\"width:95%;height:95%;border-radius:5px;margin:2.5%;background-color:#00000010;\">

                                <div style=\"width:100%;height:50%;\"> 
                                
                                        <img width=\"auto\" height=\"100%\" src=\"" ."http://dev.amnsoftware.co.uk/data/virtualgallery/users/" . $_SESSION['uid']. "/images/". $row['id'] . ".jpg" . "\" alt=\"\"/>
                                
                                </div> 

                        <div style=\"width:100%;text-align:center;padding-top:5px;\"> 
                        
                        <p style=\"height:30px; font-size:20px;margin-bottom: 3px;\">". $row['name'] ."</p>
                        
                        <p style=\"height:45px;margin-bottom: 3px; font-size:16px;\">". $row['description'] ."</p>
                        
                        </div> 
                
                
                </div> 
                
                <div style=\"margin:5px;width:40px;height:40px;border-radius:3px;background-color:#0090c5;float:right;\">
                
                </div>    
        
                <div style=\"margin:5px;width:40px;height:40px;border-radius:3px;background-color:#0090c5;float:right;\">
                
                        <div style=\"padding-left:8px;padding-top:7px;font-size:25px;font-weight:100;color:white;\" class=\"fa fa-edit\"> 
                        
                        </div>
                
                </div>
        
        </div>";
       
    }
}else{

	echo "There are no images uploaded";
}

?>
