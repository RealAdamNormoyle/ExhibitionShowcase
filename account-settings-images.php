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
        
                <div style=\"width:95%;height:95%;border-radius:5px;margin:2.5%;background-color:#ffffff70;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);\">

                                <div style=\"width:90%;height:90%;text-align:center;border-radius:5px;margin:5%;\"> 
                                
                                <img style=\"border-radius:5px;margin:2%;\" width=\"auto\" height=\"96%\" src=\"" ."http://exhibitionshowcase.co.uk/users/" . $_SESSION['uid']. "/images/". $row['id'] . ".jpg" . "\" alt=\"\"/>
                                
                                </div> 

                                
                                <div style=\"width:100%;text-align:center;margin-top:-140px;\"> 
                        
                                <div class=\"image-option-overlay\">

                                <img style=\"border-radius:5px;margin-bottom:-140px;background-color:#0090c5;\" width=\"100%\" height=\"155px;\" src=\" \" alt=\"\"/>
                                
                                
                        <form action=\"updatepassword.php\" method=\"post\">

                        <div style=\"width:80%;margin-left:10%;\">
                            <fieldset id=\"email_inputs\"style=\"width:100%;\">
                                <input class=\"image-option-overlay-input\" id=\"name\" style=\"height:35px;margin-bottom:10px;display:inline;\" type=\"text\" name=\"ImageName\" placeholder=\"". $row['name'] ."\" required>
                                <input class=\"image-option-overlay-input\" id=\"description\" style=\"height:35px;display:inline;\"type=\"text\" name=\"Description\" placeholder=\"". $row['description'] ."\" required>
                            </fieldset>
        
                            <fieldset id=\"passwordupdate-actions\" style=\"padding-top:10px;padding-bottom:5px;\">
                                    
                                    <input type=\"submit\" id=\"passwrd-update-submit\" value=\"Update\" style=\"width:100px;height:35px;font-size:18px;padding:0px;\">
                            </fieldset>
                            
                        </div>
        
        
        
                    </form>
                
                        
                        </div> 


                        </div>
            


                </div> 
        
        </div>";
       
    }
}else{

	echo "There are no images uploaded";
}

?>
