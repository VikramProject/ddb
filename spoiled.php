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
   
       $query = "update conc_dtb set status='requested' where UID='$resetUID'";
       $result = mysqli_query($db_var,$query);
   
       $query="update conc_dtb set Issue_date='$new_issue' where UID='$resetUID'";
       $result=mysqli_query($db_var,$query);
   
       $message = "Successfully Changed!!!!";
       echo "<script type='text/javascript'>alert('$message');</script>";
   
   
   
   
   
   
   }
   ?>
<div class="container-fluid content-container">
   <div class="jumbotron reissue-spoiled">
      <h4>Enter the UID to change the SR Number</h4>
      <form role="form" method="POST" action="spoiled.php">
         <?php
            if(isset($_POST['resetUID']))
            {
                $resetUID=$_POST['resetUID'];
                $query="select *from conc_dtb where UID='$resetUID'";
                $result=mysqli_query($db_var,$query);
                $row=mysqli_num_rows($result);
                if($row==1)
                {
                    echo"<div class=\"form-group\">
                        <label class=\"control-label\" \"></label>
                        <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" value=\"$resetUID\" readonly>
                     </div>
                     <div class=\"form-group\">
                          <label class=\"control-label\" \">Enter new issue date</label>
                          <input type=\"date\" class=\"form-control\" name=\"new_date\" required=\"required\" placeholder=\"New Issue Date\">
                     </div>
                     
                     <button type=\"submit\" class=\"btn btn-large btn-success\">Submit</button>
                     
                
            ";
                }
            
            else
            {
                $message = "Please Enter valid UID No.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo"<div class=\"form-group\">
                        <label class=\"control-label\" \"></label>
                        <input type=\"number\" class=\"form-control\" name=\"resetUID\" required=\"required\" placeholder=\"UID\">
                     </div>
            
                     <button type=\"submit\" class=\"btn btn-large btn-success\">Search</button>";
            }
            
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
</div>
<!--<footer class="footer">
   <p>&copy Sardar Patel Institute of Technology</p>
   </footer>-->
<!--</div>-->
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