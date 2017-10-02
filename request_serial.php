<?php
   include('config.php');
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
           exit();
       }
   }
   
   
   include('admin_dashboard.php');
   ?>
<div class="container-fluid content-container">
   <div class="jumbotron add-new-book">
      <h2>Enter New Book</h2>
      <!--<style>
         .form-control {
                 font-size: 16px;
             }
         }
         </style>-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <div class="std_uid">
         <div>All the serial numbers have been exhausted. Please enter the start and end serial numbers of the new concession-entry
            book
         </div>
         <form role="form" method="POST" action="request_serial.php">
            <div class="form-group">
               <label class="control-label" for="start srno">Enter Start Serial No:</label>
               <input type="text" class="form-control" name="start" required="required" placeholder="Enter Start Serial No.">
            </div>
            <div class="form-group">
               <label class="control-label" for="end srno">Enter End Serial No:</label>
               <input type="text" class="form-control" name="end" required="required" placeholder="Enter End Serial No.">
            </div>
            <button type="submit" class="btn btn-large btn-success">Submit</button>
         </form>
      </div>
   </div>
   <br>
   <!--<footer class="footer">
      <p style="font-size: 16px">&copy Sardar Patel Institute of Technology</p>
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