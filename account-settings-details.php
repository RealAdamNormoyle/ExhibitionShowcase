<div style="height:100%;width:49%;padding:10px;overflow:auto;float:left">		
                        		
        <div style="background-color:#ffffff70;width:100%;height:auto;border-radius:5px;padding-top:20px;padding-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);">

            <form action="updateemail.php" method="post">

                <div>
                    <fieldset id="name_inputs" style="width:100%;">

                    <div style="width:40%;float:left;margin-left:5%;">
                        <p style="font-size:20px; margin:3px;">First Name</p>
                        <input id="new_firstname"  type="email" name="NewFirstName" placeholder="<?php echo $_SESSION['firstname']?>">
                    </div>

                    <div style="width:40%;margin-left:55%;">

                        <p style="font-size:20px; margin:3px;">Last Name</p>
                        <input id="new_firstname"type="email" name="NewFirstName" placeholder="<?php echo $_SESSION['lastname']?>">
                    </div>

                    </fieldset>
                </div>

                <div>


                    <div style="width:90%;margin-left:5%;">
                    <fieldset id="email_inputs" style="width:100%;">
                        <p style="font-size:20px; margin:3px;">Email Address</p>
                        <input id="new_email"type="email" name="NewEmail" placeholder="<?php echo $_SESSION['email']?>">
                        </fieldset>
                    </div>

                </div>
                
                <fieldset id="emailupdate-actions" style="padding-top:10px;padding-bottom:10px;margin-left:5%;">
                        
                        <input type="submit" id="email-update-submit" value="Update" style="width:100px;height:40px;font-size:18px;padding:0px;">
                </fieldset>


            </form>
        
        </div>

        <div style="background-color:#ffffff70;width:100%;height:auto;border-radius:5px;padding-top:20px;padding-bottom:10px;margin-top:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);">

            <form action="updatepassword.php" method="post">

                <div style="width:90%;margin-left:5%;">
                    <p style="font-size:20px; margin:3px;">Password</p>
                    
                    <fieldset id="email_inputs" style="width:100%;">
                        <input id="new_password" style="margin-bottom:10px;" type="password" name="NewPassword" placeholder="New Password" required>

                        <input id="confirm_password" type="password" name="ConfirmPassword" placeholder="Confirm New Password" required>
                        <br>
                        <input id="current_password" type="password" name="CurrentPassword" placeholder="Enter your current password" required>
                    </fieldset>

                    <fieldset id="passwordupdate-actions" style="padding-top:10px;padding-bottom:10px;">
                            
                            <input type="submit" id="passwrd-update-submit" value="Update" style="width:100px;height:40px;font-size:18px;padding:0px;">
                    </fieldset>
                    
                </div>



            </form>
        
        </div>

</div>

<div style="height:100%;width:49%;padding-top:10px;padding-bottom:10px;overflow:auto;" >


    <div style="background-color:#ffffff70;width:100%;height:auto;border-radius:5px;padding-top:20px;padding-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.1);">


        <div>
            <fieldset id="name_inputs" style="width:100%;">

            <div style="width:90%;float:left;margin-left:5%;">
                <p style="font-size:20px; margin:3px;">Delete Account</p>
                <p style="font-size:12px; margin:3px; color:red;margin">Are you sure you would like to delete your account? This will preminently remove your account.</p>
                <a href="javascript:void(0);" id="remove-account-button" class="remove-account-button" style="background-color:red;color:white;padding: 5px 10px 5px 10px;text-decoration:none;border-radius:5px;">Delete</a>
            </div>

            </fieldset>
        </div>

    </div>

</div>