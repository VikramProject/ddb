<?php
 $show_modal = false; // modal display boolean varible
   include('config.php');
   if(!isset($_SESSION["rollno"]))
   {
       header("location:index.php");
       exit();
   }
   
   $rollno=$_SESSION["rollno"];
   include('nav_bar.php');
   $rollno=$_SESSION["rollno"];
   if(isset($_POST["CurrentPassword"])&&isset($_POST["NewPassword"])&&isset($_POST["ConfNewPassword"])) {
       $currpassword = $_POST["CurrentPassword"];
       $newpassword = $_POST["NewPassword"];
       $confnewpassword = $_POST["ConfNewPassword"];
   
       $query="select Password from student where UID=$rollno";
   
       $result=mysqli_query($db_var,$query) or die(mysql_error());
       if(mysqli_num_rows($result)==1){
           $row = mysqli_fetch_assoc($result);
           if(!password_verify($currpassword,$row["Password"])){
               $show_modal = true;
               }
           else{
               $confnewpassword=password_hash($confnewpassword,PASSWORD_BCRYPT,['cost' => 12]);
               $sql="UPDATE student SET Password = '$confnewpassword' WHERE UID='$rollno'";
               mysqli_query($db_var, $sql);
               session_destroy();
               $message = "Sucessfully Changed Password now Login with new password";
               header("Location: index.php?Message=" . urlencode($message));
               exit();
           }
   
       }
   
   }   
   ?>
    <!--jumbortrom-->
    <div class="jumbotron change-password">
        <h2 class="text-center">CHANGE PASSWORD</h2>

        <!--change password form-->
        <form name="changePasswordForm" method="POST" action="changepass.php">

            <!--current password-->
            <div class="form-group" ng-class="{'has-error': changePasswordForm.CurrentPassword.$dirty && changePasswordForm.CurrentPassword.$invalid}">
                <label class="control-label">Current Password:</label>
                <input type="password" name="CurrentPassword" class="form-control" ng-model="currentpassword" placeholder="Password" required/>
                <span class="help-block" ng-show="changePasswordForm.CurrentPassword.$dirty && changePasswordForm.CurrentPassword.$error.required"> Current Password is required.</span>
            </div>

            <!--new password-->
            <div class="form-group" ng-class="{'has-error': changePasswordForm.NewPassword.$dirty && changePasswordForm.NewPassword.$invalid}">
                <label class="control-label">New Password:</label>
                <input type="password" name="NewPassword" class="form-control" ng-model="newpassword" placeholder="New Password" required
                />
                <span class="help-block" ng-show="changePasswordForm.NewPassword.$dirty && changePasswordForm.NewPassword.$error.required">New Password is required.</span>
            </div>

            <!--confirm new password-->
            <div class="form-group" ng-class="{'has-error': changePasswordForm.ConfNewPassword.$dirty && changePasswordForm.ConfNewPassword.$invalid}">
                <label class="control-label">Confirm New Password:</label>
                <input type="password" name="ConfNewPassword" class="form-control" ng-model="confnewpassword" placeholder="Confirm New Password"
                    required ng-equals="newpassword" />
                <span class="help-block" ng-show="changePasswordForm.ConfNewPassword.$dirty && changePasswordForm.ConfNewPassword.$error.required">Confirm Password is required.</span>
                <span class="help-block" ng-show="changePasswordForm.ConfNewPassword.$dirty && changePasswordForm.ConfNewPassword.$error.equals">Passwords do not match.</span>
            </div>


            <button type="submit" class="btn btn-primary btn-block btn-lg" ng-disabled="changePasswordForm.$invalid">Submit</button>
        </form>
        <!--form ends-->
    </div>
    <!-- jumbotron ends -->
    </div>
    <!-- container ends(starts on first page) -->


    <!-- modal(w3.css library)-->
    <div id="wrongPassword" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 wrongPasswordModal">
            <header class="w3-container w3-red">
                <span onclick="document.getElementById('wrongPassword').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h4 style="color:white;" class="text-center">Invalid Current Password</h4>
            </header>

            <div class="w3-container w3-margin-bottom">
                <h6>Please Enter Correct Current Password</h6><br>
                <button class="w3-btn w3-red w3-display-bottomright w3-margin" onclick="document.getElementById('wrongPassword').style.display='none'">CLOSE</button>
            </div>
            <footer class="w3-container">
                <br>
            </footer>
        </div>
    </div>
    <!--footer-->
    <footer class="footer">
        <p class="copyright">&copy Sardar Patel Institute of Technology,Andheri</p>
    </footer>
    <!--script links-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!--echo modal-->
    <?php if($show_modal):?>
    <script>
        $('#wrongPassword').css("display", "block");
    </script>
    <?php endif;?>