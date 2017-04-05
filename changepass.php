<?php
include('config.php');
include("nav_bar.php");

if(!isset($_SESSION["rollno"]))
    header("location:index.php");

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

            echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			Please enter the correct password</span>";
        }
        else if($newpassword==$confnewpassword){
            $confnewpassword=password_hash($confnewpassword,PASSWORD_BCRYPT,['cost' => 12]);

            $sql="UPDATE student SET Password = '$confnewpassword' WHERE UID='$rollno'";
            mysqli_query($db_var, $sql);
            session_destroy();
            header("Location:index.php");
        }
        else
            echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			The entered passwords do not match</span>";

    }

}
else echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			Please fill in all the fields</span>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password</title>
</head>
<body>

<div class="jumbotron">
    <h2>Enter the following details:</h2>
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
</div>

</body>
</html>
