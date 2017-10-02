<?php
   include("config.php");
   include("admin_dashboard.php");
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
   if(isset($_POST['start_sr']) && isset($_POST['end_sr']))
   {
       $start=$_POST['start_sr'];
       $end=$_POST['end_sr'];
   }
   
   ?>
<!--<div class="welcome">
   <div class="container-fluid">
     <div class="row">
       <div class="col-md-12">
         <div class="content">
           <h2>Welcome to Dashboard</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
         </div>
       </div>
     </div>
   </div>
   </div>-->
<div class="container-fluid content-container">
   <div class="jumbotron generate-report">
      <h4> Enter details for Report Generations</h4>
      <form role="form" method="POST" action="report_gen.php">
         <div class="form-group">
            <label class="control-label" ">Start SR Number</label>
            <input class="form-control " name="start_sr " required="required " placeholder="Enter Start SR Number ">
         </div>
         <div class="form-group ">
            <label class="control-label " ">End SR Number</label>
            <input class="form-control" name="end_sr" required="required" placeholder="Enter End SR Number">
         </div>
         <button type="submit" class="btn btn-large btn-success">Generate Report</button>
      </form>
   </div>
   <table class="container">
      <?php
         if(isset($_POST['start_sr']) && isset($_POST['end_sr'])) {
             $query = "select * from report_dtb where sr_no BETWEEN '$start' and '$end'";
             $result = mysqli_query($db_var, $query) or die(mysql_error());
         
             echo " 
                     
                     <a href=\"report.php?start=$start&end=$end\"><button type=\"submit\" class=\"btn btn-large btn-success\">Export this data as Excel</button></a>
                     <table class=\"table table-bordered\">
                   <thead>
                     <tr>
                       <th>Sr No.</th>
                       <th>UID</th>
                       <th>Name</th>
                       <th>Age</th>
                       <th>Gender</th>
                       <th>Address</th>
                       <th>Category</th>
                       <th> Period</th>
                       <th>From</th>
                       <th>To</th>
                       <th>Class</th>
                       <th>Issued</th>
                       <th>DOB</th>
                     </tr>
                   </thead>
                   ";
         
             while ($obj = $result->fetch_object()) {
                 echo "<tr class=\"danger\">
                                 <td>$obj->Sr_no</td>
                                 <td>$obj->UID</td>
                                 <td>$obj->Name</td>
                                 <td>$obj->Age</td>
                                 <td>$obj->Sex</td>
                                 <td>$obj->Address</td>
                                 <td>$obj->Category</td>
                                 <td>$obj->Period</td>
                                 <td>$obj->From_stn</td>
                                 <td>$obj->To_stn</td>
                                 <td>$obj->Class</td>
                                 <td>$obj->Issued_date</td>
                                 <td>$obj->DOB</td>
                                 </tr>";
         
             }
         }
         ?>
   </table>
   <!--<footer class="footer">
      <p>&copy Sardar Patel Institute of Technology</p>
      </footer>-->
</div>
</div>
</section>
<!-- /container -->
<!-- Bootstrap core JavaScript
   ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets1/js/admin-dashboard.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>