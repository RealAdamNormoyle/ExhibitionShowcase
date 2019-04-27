
<?php
include "new-gallery-content.php";
?>

<div id="account-galliers-list">

<div style="padding-left:5px;padding-top:5px;overflow:auto;height:100%;" >
    <div style="width:33%;height:300px;float:left;">
        <div style="width:80%;height:70%;border-radius:5px;margin:15% 10% 15% 10%;background-color:#ffffff70;text-align:center;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);">

            <br>

            <h2 style="font-size:18px;">Create a Gallery</h2>
            <p style="font-size:14px;">Lets show the world your work</p>
            <br>
            <a href="javascript:void(0);" id="createGallery-trigger" class="remove-account-button" style="background-color:#0090c5;color:white;font-size:20px;padding: 10px 25px 10px 25px;text-decoration:none;border-radius:5px;">NEW GALLERY</a>
    
        </div>   
    </div>

<?php


include "database.php";
//Validate post data

$sql = "SELECT * FROM galleries WHERE owner='$_SESSION[uid]'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()) {

    // This is the URL you want to shorten
    $longUrl = "http://www.exhibitionshowcase.co.uk/gallery.php?id=".$row['id'];

    // Get API key from : http://code.google.com/apis/console/
    $apiKey = 'AIzaSyAEEnp4B5XCDgY_P_xYEALvd9B9M9CU-N8';

    $postData = array('longUrl' => $longUrl);
    $jsonData = json_encode($postData);

    $curlObj = curl_init();

    curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);
    curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curlObj, CURLOPT_HEADER, 0);
    curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
    curl_setopt($curlObj, CURLOPT_POST, 1);
    curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curlObj);

    // Change the response json string to object
    $json = json_decode($response);
    $short = "";


    $bannerImage = "";

    if(file_exists("http://exhibitionshowcase.co.uk/users/" . $_SESSION['uid']. "/images/banner-". $row['id'] . ".jpg")){

        $bannerImage = "http://exhibitionshowcase.co.uk/users/" . $_SESSION['uid']. "/images/banner-". $row['id'] . ".jpg";
    }else{
        $bannerImage = "http://exhibitionshowcase.co.uk/images/banner-default.jpg";
    }

    if(isset($json->error)){
        $short = $longUrl;
    }else{
        $short = $json->id;
    }   

    curl_close($curlObj);

        echo "
        <div style=\"width:33%;height:300px;float:left;\">
        
            <div style=\"width:95%;height:95%;border-radius:5px;margin:2.5%;background-color:#ffffff70;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);\">
            
                <div style=\"width:100%;height:50%;\"> 
                
                    <img width=\"100%\" height=\"100%\" style=\"border-radius:5px 5px 0px 0px;\" src=\"" .$bannerImage. "\" alt=\"\"/> 
                
                </div> 
        
        <div style=\"width:100%;text-align:center;padding-top:5px;\"> 

                            <div style=\"width:100%;\">
								<div class=\"likeBar\">
									<div class=\"likeBar-likes\" style=\"width:".(($row['likes']/($row['dislikes']+$row['likes'])) * 100)."%\">
									</div>
									<div class=\"likeBar-dislikes\" style=\"width:".(($row['dislikes']/($row['dislikes']+$row['likes'])) * 100)."%\">
									</div>
								
								</div>
							</div>
        
            <p style=\"height:30px;color:white;font-size:25px;font-weight:600;margin-top: -40px;\">". $row['name'] ."</p>
        
            <p style=\"height:45px;margin-bottom: 0px; margin-top: 5px; font-size:16px;\">". $row['description'] ."</p>
            <fieldset id=\"shortUrl\">
            <label style=\"font-size:16px;\">Share URL : </label><input id=\"shortUrl\" type=\"text\" onClick=\"this.setSelectionRange(0, this.value.length)\" name=\"url\" value=\"".$short."\" readonly>
            </fieldset>

            <div style=\"height:10px;\"></div>

            <a href=\"".$longUrl."\" id=\"createGallery-trigger\" class=\"remove-account-button\" style=\"height:40px;background-color:#0090c5;color:white;font-size:20px;padding: 10px 25px 10px 25px;text-decoration:none;border-radius:5px;\">EDIT</a>
            <a href=\"gallery.php?id=".$row['id']."\" id=\"createGallery-trigger\" class=\"remove-account-button\" style=\"height:40px;background-color:#0090c5;color:white;font-size:20px;padding: 10px 25px 10px 25px;text-decoration:none;border-radius:5px;\">VIEW GALLERY</a>
    
        
        </div> 
        
        </div>
        
        </div>";
    
    }
}else{

    echo "There are no images uploaded";
}

?>


</div>
</div>

