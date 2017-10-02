<?php
   include('config.php');
   if(isset($_SESSION["msgF"]))
   {
       $message=$_SESSION["msgF"];
       echo "<script type=text/javascript>alert('$message')</script>";
       $_SESSION["msgF"]=null;
   }
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
   
   include('admin_dashboard.php');
   
   
   ?>
<div class="container-fluid content-container">
   <!--<div class="jumbotron">-->
   <div class="jumbotron  change-info">
      <h4>Enter the UID to change Student Info</h4>
      <form role="form" method="POST" action="change_student_info.php">
         <div class="form-group">
            <label class="control-label" for="UID"></label>
            <input type="number" class="form-control" name="rollno" required="required" placeholder="Enter UID">
         </div>
         <button type="submit" class="btn btn-large btn-success">Submit</button>
      </form>
   </div>
   <br>
   <!--</div>-->
</div>
</section>
<!-- /container -->
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets1/js/admin-dashboard.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>