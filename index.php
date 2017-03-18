<?php
session_start();
if(isset($_SESSION["rollno"]))
{
    $rollno=$_SESSION["rollno"];
    if ($rollno==2014130999)
        header("Location:admin_page.php");
    else
        header("location:student_home.php");
}

include("nav_bar.php");
?>
            <div class="jumbotron">
                <h2>Log In</h2>
                <form role="form" method="POST" action="login.php"> 
                    <div class="form-group"> 
                        <label class="control-label" for="UID">Roll No.(UID)</label>                         
                        <input type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID"> 
                    </div>                     
                    <div class="form-group"> 
                        <label class="control-label" for="\Password">Password</label>                         
                        <input type="password" class="form-control" name="Password" required="required" placeholder="Password"> 
                    </div>                     
                    <button type="submit" class="btn btn-large btn-success">Submit</button>                     
                </form>
            </div>
            <footer class="footer">
                <p>&copy Sardar Patel Institute of Technology</p>
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
