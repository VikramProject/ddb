<?php

include('config.php');
if(!isset($_SESSION["rollno"]))
{
    header("location:index.php");
    exit();
}

$rollno=$_SESSION["rollno"];
include('nav_bar.php');
$rollno=$_SESSION["rollno"];
echo "<div class=\"jumbotron\">";
if(isset($_POST["CurrentPassword"])&&isset($_POST["NewPassword"])&&isset($_POST["ConfNewPassword"])) {
    $currpassword = $_POST["CurrentPassword"];
    $newpassword = $_POST["NewPassword"];
    $confnewpassword = $_POST["ConfNewPassword"];

    $query="select Password from student where UID=$rollno";

    $result=mysqli_query($db_var,$query) or die(mysql_error());
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_assoc($result);
        if(!password_verify($currpassword,$row["Password"])){

            echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			Please enter the correct password</span>";
        }
        else if($newpassword==$confnewpassword&&password_verify($currpassword,$row["Password"])){
            $confnewpassword=password_hash($confnewpassword,PASSWORD_BCRYPT,['cost' => 12]);

            $sql="UPDATE student SET Password = '$confnewpassword' WHERE UID='$rollno'";
            mysqli_query($db_var, $sql);
            session_destroy();
            $message = "Sucessfully Changed Password now Login with new password";
            header("Location: index.php?Message=" . urlencode($message));
            exit();
        }
        else
            echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			The entered passwords do not match</span>";

    }

}
else echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			Change Password:<br>Please fill in all the fields</span>";

?>



    <h2>Enter the following details:</h2>
    Enter a new Password different from your OLD Password
    <form role="form" method="POST" action="changepass.php">
        <div class="form-group">
            <label class="control-label" for="\Password">Current Password</label>
            <input type="password" class="form-control" name="CurrentPassword" required="required" placeholder="Current Password">
        </div>
        <div class="form-group">
            <label class="control-label" for="\Password">New Password</label>
            <input type="password" class="form-control" name="NewPassword" required="required" placeholder="New Password">
        </div>
        <div class="form-group">
            <label class="control-label" for="\Password">Confirm New Password</label>
            <input type="password" class="form-control" name="ConfNewPassword" required="required" placeholder="New Password">
        </div>
        <button type="submit" class="btn btn-large btn-success">Submit</button>

    </form>

<footer class="footer">
    <p>&copy Sardar Patel Institute of Technology</p>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>