<html>
    <body>
        <?php

        include "database.php";
        //Validate post data
        $sql = "INSERT INTO users (email,name_first,name_last,pass) VALUES ( '$_POST[Email]','$_POST[FirstName]','$_POST[LastName]','$_POST[Password]')";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION["isLoggedIn"] = true;
            
            $last_id = $conn->insert_id;

            if(mkdir("/var/www/dev.amnsoftware.co.uk/data/virtualgallery/users/".$last_id."/images/", 0755,true)){
                
                header('Location: http://www.exhibitionshowcase.co.uk/account.php');
            }else{
                echo "Error: Failed to create folders for user : /var/www/dev.amnsoftware.co.uk/data/virtualgallery/users/".$last_id."/images/";
            }

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }
            
        
        ?>
    </body>
</html>


 