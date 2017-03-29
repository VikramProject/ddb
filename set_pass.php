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

    echo"ok";
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


<div class="jumbotron">
    <h4>Enter the UID to change Password</h4>
    <form role="form" method="POST" action="set_pass.php">

        <?php
        if(isset($_POST['resetUID']))
        {
            $resetUID=$_POST['resetUID'];
            echo"<div class=\"form-group\">
                    <label class=\"control-label\" \"></label>
                    <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" value=\"$resetUID\" readonly>
                 </div>
                 <div class=\"form-group\">
                      <label class=\"control-label\" \">Enter Password</label>
                      <input type=\"password\" class=\"form-control\" name=\"Password\" required=\"required\" placeholder=\"Password\">
                 </div>
                 <div class=\"form-group\">
                      <label class=\"control-label\" \">Confirm Password</label>
                      <input type=\"password\" class=\"form-control\" name=\"ConfNewPassword\" required=\"required\" placeholder=\"Confirm Password\">
                 </div>
                 <button type=\"submit\" class=\"btn btn-large btn-success\">Submit</button>
                 
            
        ";
        }

        else
        {
            echo"<div class=\"form-group\">
                    <label class=\"control-label\" \"></label>
                    <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
                 </div>

                 <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";
        }
        ?>
    </form>
</div>
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