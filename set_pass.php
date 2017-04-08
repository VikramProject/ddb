<?php
/**
 * Created by PhpStorm.
 * User: siddhey
 * Date: 29/3/17
 * Time: 6:11 PM
 */
include ("config.php");
include ("nav_bar.php");
if(isset($_POST["resetUID"])&&isset($_POST["Password"])&&isset($_POST["ConfNewPassword"]))
{

    $resetUID = $_POST["resetUID"];
    $Password = $_POST["Password"];
    $confnewpassword = $_POST["ConfNewPassword"];


    if ($Password == $confnewpassword) {
        $confnewpassword = password_hash($confnewpassword, PASSWORD_BCRYPT, ['cost' => 12]);

        $sql = "UPDATE student SET Password = '$confnewpassword' WHERE UID='$resetUID'";
        mysqli_query($db_var, $sql);
//        session_destroy();
        header("Location:index.php");
    } else
        echo "<span style='font: bold 24px Verdana, Geneva, sans-serif;color:black;'>
			The entered passwords do not match</span>";
}
?>
<style>
    #footer {
        position: absolute;
        bottom: 0px;
        width: 100%;
    }
    #content, #sidebar {
        margin-bottom: 5em;
    }
</style>


<div class="jumbotron">
    <h4>Enter the UID to change Password</h4>
    <form role="form" method="POST" action="set_pass.php">

        <?php
        if(isset($_POST['resetUID'])) {
            $resetUID = $_POST['resetUID'];
            $query = "select * from student where UID='$resetUID'";
            $result = mysqli_query($db_var, $query) or die(mysqli_error());
            $row = mysqli_num_rows($result);
            if ($row == 0) {

                $message = "There is No such UID present. Please re-enter your valid UID";
                //header("Location:set_pass.php");
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<div class=\"col-xs-3\">
                  <div class=\"form-group\">
                <label class=\"control-label\" \"></label>
                <input type=\"number\" class=\"form-control\" id=\"xs2\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
             </div>
             </div>
             <br><br><br><br>
             <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";

                //echo 'window.location= "set_pass.php"';
            }
           /* else{
                $_SESSION["resetUID"]=$resetUID;
                header("Location:confpass.php");
            }*/else {
                echo "<div class=\"col-xs-3\">
                 <div class=\"form-group\">
                <label class=\"control-label\" \"></label>
                <input type=\"number\" class=\"form-control\" id=\"xs2\" name=\"resetUID\" required=\"required\" value=\"$resetUID\" readonly>
             </div>
             </div>
             <br><br><br><br>
             <div class=\"col-xs-3\">
             <div class=\"form-group\">
                  <label class=\"control-label\" \">Enter Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"xs2\" name=\"Password\" required=\"required\" placeholder=\"Password\">
             </div>
             </div>
             <br><br><br><br>
             <div class=\"col-xs-3\">
             <div class=\"form-group\">
                  <label class=\"control-label\" \">Confirm Password</label>
                  <input type=\"password\" class=\"form-control\" id=\"xs2\" name=\"ConfNewPassword\" required=\"required\" placeholder=\"Confirm Password\">
             </div>
             </div>
             <br><br><br><br>
             <button type=\"submit\" class=\"btn btn-large btn-success\">Submit</button>
             
        
    ";
            }
        }

        else
        {
            echo "<div class=\"col-xs-3\">
                 <div class=\"form-group\">
                <label class=\"control-label\" \"></label>
                <input type=\"number\" id=\"xs2\" class=\"form-control\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
             </div>
            </div>
            <br><br><br><br>
             <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";

        }


    ?>
</form>
    <br><br><br><br><br><br><br><br>
    <footer class="footer">
        <p>&copy Sardar Patel Institute of Technology</p>
    </footer>

</div>

<!-- /container -->
<!-- Bootstrap core JavaScript

================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>