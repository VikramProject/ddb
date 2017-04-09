<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 18-03-2017
 * Time: 22:52
 */
include('config.php');
include('nav_bar.php');
if(isset($_SESSION["msgF"]))
{
    $message=$_SESSION["msgF"];
    echo "<script type=text/javascript>alert('$message')</script>";
    $_SESSION["msgF"]=null;
}
if(!isset($_SESSION["rollno"]))
    header("location:index.php");
$rollno=$_SESSION["rollno"];
if ($rollno!=$admin)
    header("Location:student_home.php");


?>
<style>
    .form-control{font-size: 16px;}
    }
    * {
        margin: 0;
    }
    html, body {
        height: 100%;
    }
    .wrapper {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        margin: 0 auto -142px; /* the bottom margin is the negative value of the footer's height */
    }
    .footer, .push {
        height: 142px; /* .push must be the same height as .footer */
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="jumbotron">
<div class="std_uid" style=" margin-top:5px;margin-left:40%">
    <form role="form" method="POST" action="change_student_info.php">
        <div class="col-xs-3">
        <div class="form-group" style="display: inline-block">
            <label class="control-label" for="UID">Roll No.(UID)</label>
            <input type="text" class="form-control" id="xs2" name="rollno" required="required" placeholder="Enter UID">
        </div>
        </div>
        <br><br><br><br><br>
        <button type="submit" class="btn btn-large btn-success">Submit</button>

    </form>
</div>
    <div class="wrapper">
        <!--<footer class="footer">
            <p style="font-size: 16px">&copy Sardar Patel Institute of Technology</p>
        </footer>-->
        <div class="push">
        </div>
    </div>
    <div class="footer">
        <p style="font-size: 16px">&copy Sardar Patel Institute of Technology</p>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>

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


