<?php
include("config.php");
$msg=$_SESSION["rollno"];

if(!isset($_SESSION["rollno"]))
{
    header("location:index.php");
    exit();
}

$rollno=$_SESSION["rollno"];
if ($rollno==$admin)
{
    header("Location:admin_page.php");
    exit();
}

$query="select * from conc_dtb where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysql_error());
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$status=$row["Status"];
//$exp_dt=strtotime($row["Expiry Date"]);
//$exp_dt=date("Y-m-d",$exp_dt);
if($status == "requested")
{
    $_SESSION["msgAwait"]="Your Form Has Been Submitted. \nThe form has still not been reviewed. Do come back to check on your status";
    header("Location:await_results.php");
    exit();
}
if($status == "locked")
{
    $query = "select Expiry_date from conc_dtb where UID='$rollno'";
    $result=mysqli_query($db_var,$query) or die(mysql_error());
    $object = $result->fetch_object();
    $date = date("Y-m-d",strtotime($object->Expiry_date));
    //$expDate =
    $_SESSION["msgAwait"]="Your Form has been Approved and can be collected from the office. This Account will be locked until $date ";
    header("Location:await_results.php");
    exit();
}
$query="select Password from student where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$object = $result->fetch_object();
if(password_verify("spit123",$object->Password))
{
    header("Location:changepass.php");
    exit();
}
$query="select Nearest_stn from conc_dtb where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$object = $result->fetch_object();
if($object->Nearest_stn==NULL)
{
    header("Location:register.php");
}
if(isset($_POST["Class"])&&isset($_POST["Period"])&&isset($_POST["Issue_date"]))
{
    $class = $_POST["Class"];
    $per = $_POST["Period"];
    if($per=="Monthly")
        $period=1;
    elseif ($per=="Quarterly")
        $period=3;
    $issue = $_POST["Issue_date"];
    $exp = strtotime($issue);
    $exp = strtotime(" +{$period} month",$exp);
    $exp = strtotime("-1 week", $exp);
    $exp = date('Y-m-d',$exp);
    $issue=date('Y-m-d',strtotime($issue));
    $query = "UPDATE conc_dtb SET Class='$class',Period='$per', Issue_date='$issue',Expiry_date='$exp', Status='requested' WHERE UID='$rollno'";
    $result=mysqli_query($db_var,$query) or die(mysql_error());

    header("Location:student_home.php");
    exit();
}

include("nav_bar.php");
?>


    <div class="jumbotron">
        <h1>Welcome
        </h1>
        <h4>Enter details for Railway Pass</h4>
        <form role="form" method="POST" action="student_home.php">
            
                <label class="control-label" ">Class</label>
              <!--  <select class="form-control" name="Class" required="required" placeholder="Class">
                    <option value="First">First</option>
                    <option value="Second">Second</option>
                </select> -->
                <div data-toggle="buttons">
                    <div class="btn-group">

                        
                            <input type="radio" name="Class" value="First" id="class"  required>First
                        
                        
                        
                            <input type="radio" name="Class" value="Second" id="class" required>Second
                        
                    </div>
                </div>
            
            <div class="form-group">
                <label class="control-label" ">Period</label>
               <!-- <select class="form-control" name="Period" required="required" placeholder="Period">
                    <option value="Monthly">Monthly</option>
                    <option value="Quarterly">Quarterly</option>
                </select>-->
                <div data-toggle="buttons">
                    <div class="btn-group">

                        
                            <input type="radio" name="Period" id="Period" value="Monthly" required>Monthly
                        
                        
                        
                            <input type="radio" name="Period" id="Period" value="Quarterly" required>Quarterly
                       
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" ">Date you want to issue (dd-mm-yyyy)</label>
                <?php $curr = date("d-m-y");
                $curr = strtotime($curr);
                $curr = strtotime(" +3 day",$curr);
                $curr = date('d-m-y',$curr);
                ?>
                <input type="text" id="idTourDateDetails" class="form-control" name="Issue_date" required="required" placeholder="Date(dd-mm-yyyy)">
            </div>
            <button type="submit" class="btn btn-large btn-success">Submit</button>
        </form>
        <br><br>
        <p style="color:red">Once form issued, in case where the issued form is lost no new concession will be given. All charges will be incurred by the students then!<p>
    </div>
    <footer class="footer">
        <p>&copy Sardar Patel Institute of Technology</p>
    </footer>
</div>
<!-- /container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="/bootstrap/js/jquery-1.12.4.js"></script>
<script src="/bootstrap/js/jquery-ui.js"></script>
     <script>
   
    $('#idTourDateDetails').datepicker({
    minDate: -0, maxDate: "+3D",
    dateFormat: 'dd-mm-yy',
    changeMonth: true,
    changeYear: true,
    altField: "#idTourDateDetailsHidden",
    altFormat: "yy-mm-dd"
 });
  </script>
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

