<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 18-03-2017
 * Time: 22:52
 */
include('config.php');
include('nav_bar.php');
if(!isset($_SESSION["rollno"]))
    header("location:index.php");
$rollno=$_SESSION["rollno"];
if ($rollno!=2014130999)
    header("Location:student_home.php");

if(isset($_POST["start"]) && isset($_POST["end"]))
{
    $end = $_POST["end"];
    $start = $_POST["start"];
    if($end < $start)
        echo "<script>alert('End serial no. should be greater than start serial no.');</script>";
    else{
        $query = "update serial_no_storage set available='$start',last=$end where id=1";
        $result = mysqli_query($db_var,$query) or die(mysql_error());
        header("location:admin_page.php");
    }
}


?>
<style>
    .form-control{font-size: 16px;}
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="std_uid" style=" margin-top:100px;margin-bottom: 40px">
    <div style="margin-left:20%;margin-right:20%;font-size:large;margin-bottom:20px;font-weight: bolder">All the serial numbers have been exhausted. Please enter the start and end serial numbers of the new concession entry book</div>
    <form role="form" method="POST" action="request_serial.php" style="margin-left:40%">
        <div class="form-group" >
            <input type="text"  class="form-control" name="start" required="required" placeholder="Enter Start Serial No." style="width: 200px">
        </div>
        <div class="form-group" >
            <input type="text" class="form-control"  name="end" required="required" placeholder="Enter End Serial No." style="width: 200px">
        </div>


        <button type="submit" class="btn btn-large btn-success">Submit</button>
    </form>

</div>
<br>
<footer class="footer">
    <p style="font-size: 16px">&copy Sardar Patel Institute of Technology</p>
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


