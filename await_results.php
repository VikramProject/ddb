<?php
   include ("config.php");
    if(!isset($_SESSION["rollno"]))
    {
        header("location:index.php");
        exit();
    }
    $rollno=$_SESSION["rollno"];
   include("nav_bar.php");
   ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Awaiting Review</title>
    </head>

    <body>
        <div class="jumbotron await-results w3-animate-zoom">
            <p>
                <?php
               if(isset($_SESSION["msgAwait"]))
               {
                   $message=$_SESSION["msgAwait"];
                   echo "<div style='margin-top: 20px; font-size: 20px'>$message</div>";
                   $query="SELECT * FROM conc_dtb WHERE UID=$rollno";
                   $result=mysqli_query($db_var,$query) or die(mysqli_error());
                   $formObj=$result->fetch_object();
                   echo "<br>You Have Requested for:-<br> ";
                   echo "Class:- ".$formObj->Class;
                   echo "\tPeriod:- ".$formObj->Period;
                   echo "\nFrom:- ".$formObj->Nearest_stn;
                   echo "\tTo:- Andheri";
                   echo "\nDate:- ".$formObj->Issue_date;

                   if(!strcmp($message,"Your Form Has Been Submitted. \nThe form has still not been reviewed. Do come back to check on your status")) {
                       echo "<br><a style=\"text-decoration:none\" href=\"rerequest.php\"><button type=\"button\" class=\"btn btn-primary btn-large btn-block\">Edit Requested Pass</button></a>
                        <br>";
                   }
               }
               else
               {
                   echo "No session message";
               }
               
               ?>
            </p>


            <a style="text-decoration:none" href="logout.php"><button type="button" class="btn btn-primary btn-large btn-block">LOGOUT</button></a>
            <!--<li><a href="logout.php">Logout</a></li>-->
        </div>
        <footer class="footer">
            <p class="copyright">&copy Sardar Patel Institute of Technology,Andheri</p>
        </footer>
    </body>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets1/js/admin-dashboard.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    </html>