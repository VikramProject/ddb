<?php
include("config.php");

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
if(isset($_SESSION["rollno"]))
{
    $rollno=$_SESSION["rollno"];
    if ($rollno==$admin)
        header("Location:admin_page.php");
    else
        header("location:student_home.php");
}

include("nav_bar.php");
?>

<body>
            <div class="jumbotron">
                <h2 color="Black"><b><legend>Log In</legend></b></h2>
                <div class="container">
                <form role="form" method="POST" action="login.php">
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label class="control-label" for="UID">Roll No.(UID)</label>
                        <input type="text" id="ex3" class="form-control" name="rollno" required="required" placeholder="Enter UID">
                        </div>
                    </div>
                </br></br></br></br>
                    <div class="form-group">
                        <div class="col-xs-4">
                            <label class="control-label" for="\Password"><b>Password</b></label>
                        <input type="password" id="ex3" class="form-control" name="Password" required="required" placeholder="Password">
                        </div>
                    </div>
                    </br></br></br></br>
                    <button type="submit" class="btn btn-large btn-success">Submit</button>
                </form>
                </div>
                </br></br></br></br></br></br></br>
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
