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
    $_SESSION["msgAwait"]="Your Form has been Approved and can be collected from the office. This Account will be locked until $date ";
    header("Location:await_results.php");
    exit();
}
$query="select Password from student where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$object = $result->fetch_object();
if(password_verify("spit123",$object->Password))
{
    header("Location:change_password_student.php");
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

    <!--Pass Details Form-->
    <div class="jumbotron pass-details">
        <h2 class="text-center">PASS DETAILS</h2>
        <form role="form" method="POST" action="student_home.php" name="passDetails">
            <h4>CLASS</h4>
            <div class="cont">
                <label>
            &nbsp;<input type="radio" class="option-input radio w3-radio" name="Class" value="First" id="class" required />
            FIRST &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
            </label>
                <label>
            &nbsp;<input type="radio" class="option-input radio w3-radio" name="Class" value="Second" id="class" required />
            SECOND
            </label>
            </div><br>

            <h4>PERIOD</h4>
            <div class="cont">
                <label>
            &nbsp;<input type="radio" class="option-input radio w3-radio" name="Period" id="Period" value="Monthly" required />
            MONTHLY
            </label>
                <label>
            &nbsp;<input type="radio" class="option-input radio w3-radio" name="Period" value="QUARTERLY" required />
            QUARTERLY
            </label>
            </div><br>




            <h4>DATE OF ISSUE </h4>

            <div class="row">
                <div class="col-md-9 col-xs-8">
                    <div class="form-group" ng-class="{ 'has-error' : passDetails.Issue_date.$dirty && passDetails.Issue_date.$invalid }">

                        <input type="date" class="form-control" ng-model="issueDate" name="Issue_date" min="{{minDate}}" max="{{maxDate}}" required
                            placeholder="DD-MM-YYYY" />
                        <span class="help-block" ng-show="passDetails.Issue_date.$dirty && passDetails.Issue_date.$error.required">Date of Issue is required.</span>
                        <span class="help-block" ng-show="passDetails.Issue_date.$dirty && passDetails.Issue_date.$error.date">Invalid Date</span>
                        <span class="help-block" ng-show="passDetails.Issue_date.$dirty && passDetails.Issue_date.$error.max">Date Exceeds Maximum Date( {{maxDate | date}} )</span>
                        <span class="help-block" ng-show="passDetails.Issue_date.$dirty && passDetails.Issue_date.$error.min">You Have Entered Past Date</span>
                    </div>

                </div>
                <div class="col-md-3 col-xs-4">
                    <button type="button" ng-click="setTodayDate()" class="w3-display-topleft set-today-date btn btn-primary btn-large btn-block">Today</button>
                </div>

            </div>

            <button type="submit" ng-disabled="passDetails.$invalid" class="btn btn-primary btn-large btn-block">SUBMIT</button>
        </form>
        <br>
        <p class="notice">Once form issued, in case where the issued form is lost no new concession will be given. All charges will be incurred
            by the students then!
        </p>
    </div>

    <!--Footer-->
    <footer class="footer">
        <p class="copyright">&copy Sardar Patel Institute of Technology,Andheri</p>
    </footer>

    </div>
    <!-- container ends -->

    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="bootstrap/js/jquery-1.12.4.js"></script>
    <script src="bootstrap/js/jquery-ui.js"></script>
    <!--<script>
        $('#idTourDateDetails').datepicker({
            minDate: -0,
            maxDate: "+3D",
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            altField: "#idTourDateDetailsHidden",
            altFormat: "yy-mm-dd"
        });
    </script>-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

    </html>