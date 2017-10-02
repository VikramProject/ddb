<?php
   include ("config.php");
   
   if(!isset($_SESSION["rollno"]))
   {
       header("location:index.php");
       exit();
   }
   
   $rollno=$_SESSION["rollno"];
   if ($rollno!=$admin)
   {
   
       header("Location:student_home.php");
       exit();
   }
   
   
   include ("admin_dashboard.php");
   if(isset($_POST["resetUID"])&&isset($_POST["new_date"])) {
   
       $resetUID = $_POST["resetUID"];
       $new_issue = $_POST["new_date"];
       $serNo=$_POST["serNo"];
       $query="update conc_dtb set Issue_date='$new_issue' where UID='$resetUID'";
       $result=mysqli_query($db_var,$query);
   
       $query="Select Period from conc_dtb where UID='$resetUID'";
       $result=mysqli_query($db_var,$query);
       $obj=$result->fetch_object();
       $per = $obj->Period;
       if($per=="Monthly")
           $period=1;
       elseif ($per=="Quarterly")
           $period=3;
       $exp = strtotime($new_issue);
       $exp = strtotime(" +{$period} month",$exp);
       $exp = strtotime("-1 week", $exp);
       $exp = date('Y-m-d',$exp);
       $query = "UPDATE conc_dtb SET Issue_date='$new_issue',Expiry_date='$exp' WHERE UID='$rollno'";
       $result=mysqli_query($db_var,$query) or die(mysqli_error());
   
       $query = "UPDATE report_dtb SET Issued_date='$new_issue' WHERE Sr_No='$serNo'";
       $result=mysqli_query($db_var,$query) or die(mysqli_error());
   
       $message = "Successfully Changed!!!!";
       echo "<script type='text/javascript'>alert('$message');</script>";
   }
   ?>
<div class="container-fluid content-container">
   <div class="jumbotron change-issue-date">
      <h4>Enter the UID and SR Number to change the Issue Date</h4>
      <form role="form" method="POST" action="late.php">
         <?php
            if(isset($_POST['resetUID'])&&isset($_POST["serNo"]))
            {
                $resetUID=$_POST['resetUID'];
                $serNo=$_POST["serNo"];
                $query="select UID,Sr_No,Issue_date from report_dtb join conc_dtb USING(UID) where UID=$resetUID and Sr_No=$serNo";
                $result=mysqli_query($db_var,$query);
                $row=mysqli_num_rows($result);
                $object=$result->fetch_object();
            
            
                $serNo=$_POST["serNo"];
                if($row==1)
                {
                    echo"<div class=\"form-group\">
                         <label class=\"control-label\" >UID</label>
                         <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" value=\"$resetUID\" readonly>
                      </div>
                      <div class=\"form-group\">
                         <label class=\"control-label\" >Serial Number</label >
                         <input type = \"number\" class=\"form-control\" name = \"serNo\" required = \"required\" value = \"$serNo\" readonly >
                      </div >
                      <div class=\"form-group\">
                           <label class=\"control-label\" >Previous issue date</label>
                           <input type=\"date\" class=\"form-control\" name=\"old_date\" required=\"required\" value='$object->Issue_date' readonly>
                      </div>
                      <div class=\"form-group\">
                           <label class=\"control-label\" >Enter new issue date</label>
                           <input type=\"date\" class=\"form-control\" name=\"new_date\" min='".date("Y-m-d")."' required=\"required\" placeholder=\"New Issue Date\">
                      </div>
            
                      <button type=\"submit\" class=\"btn btn-large btn-success\">Submit</button>
            
            
             ";
                }
            
                else
                {
                    $message = "Please Enter valid UID No. and Serial No.";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo"<div class=\"form-group\">
                         <label class=\"control-label\" \">UID</label>
                         <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
                      </div>
                      <div class=\"form-group\">
                         <label class=\"control-label\" \">Serial Number</label>
                         <input type=\"number\" class=\"form-control\" name=\"serNo\" required=\"required\" placeholder=\"Serial No\">
                      </div>
                      <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";
                }
            
            }
            else
            {
                echo"<div class=\"form-group\">
                         <label class=\"control-label\" \">UID</label>
                         <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
                      </div>
                      <div class=\"form-group\">
                         <label class=\"control-label\" \">Serial Number</label>
                         <input type=\"number\" class=\"form-control\" name=\"serNo\" required=\"required\" placeholder=\"Serial No\">
                      </div>
            
                      <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";
            }
               
            ?>
      </form>
   </div>
   <!--<footer class="footer">
      <p>&copy Sardar Patel Institute of Technology</p>
      </footer>-->
</div>
</section>
<!-- /container -->
<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets1/js/admin-dashboard.js"></script>
</body>
</html>