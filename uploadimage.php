<html>
    <body>
        <?php
        session_start();
        include "database.php";
        //Validate post data
        $target_dir = "/var/www/dev.amnsoftware.co.uk/data/virtualgallery/users/".$_SESSION["uid"]."/images/";
        
        $extention = "";
        $uploadOk = 1;


        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {

            $sql = "INSERT INTO images (name,description,owner) VALUES ( '$_POST[ImageName]','$_POST[ImageDescription]','$_SESSION[uid]')";
        
            if ($conn->query($sql) === TRUE) {
    
                $last_id = $conn->insert_id;
                $imageFileType = strtolower(pathinfo(basename($_FILES["fileToUpload"]["name"]),PATHINFO_EXTENSION));
                $target_file = $target_dir . $last_id .".". $imageFileType;
                
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    chmod($target_file, 0755);
                    header('Location: http://www.exhibitionshowcase.co.uk/account.php');
                } else {
                    echo "Sorry, there was an error uploading your file. CODE : " . $_FILES["fileToUpload"]["error"];
                }
    
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                return false;
            }

        }      
        
        ?>
    </body>
</html>


 