<div style="height:500px;width:40%;float:left;Margin-right:5%;background-color:#00000010;padding:10px;border-radius:5px;">

	<form action="uploadimage.php" method="post"  enctype="multipart/form-data">
							
        <div>
        <p style="font-size:30px;margin-bottom:10px;">Add New Image</p>
        </div>

        <fieldset id="imageupload_inputs" style="width:100%;">


                <p style="font-size:25px; margin:3px;">Image Name</p><input id="image_name" type="text" name="ImageName" placeholder="Enter the display name for the image" required>
                <p style="font-size:25px;margin:3px;">Image Description </p><input id="image_description" type="text" name="ImageDescription" placeholder="Enter a description for the image" required>
                <br>
                <p style="font-size:25px;margin:3px;">Select Image</p><input type="file" name="fileToUpload" id="filetoupload" required>
                
        </fieldset>
        <br>
        <fieldset id="imageupload_actions">
                
                <input type="submit" id="button" value="Upload" style="width:120px;height:50px;font-size:25px;padding:0px;">
        </fieldset>


    </form>


</div>

<div style="height:500px;width:55%;margin-left:45%;background-color:#00000010;border-radius:5px;padding-top:10px;padding-bottom:10px;overflow:auto;" >


                    <?php


                    include "images_display_box.php";


                    ?>

                    

</div>