<?php
include("config.php");
$msg=$_SESSION["rollno"];
include("nav_bar.php");

if(!isset($_SESSION["rollno"]))
    header("location:index.php");
if(isset($_POST["Nearest_stn"]))



//echo"Welcome Student $msg";






?>


    <div class="jumbotron">
        <h1>Welcome
        </h1>
        <h4>Enter details for Railway Pass</h4>
        <form role="form" method="POST" action="student_home.php">
            <div class="form-group">
                <label class="control-label" for="/Nearest Station">Nearest Station</label>
                <input type="text" class="form-control" name="Nearest_stn" required="required" placeholder="Nearest Station">
            </div>
            <div class="form-group">
                <label class="control-label" for="UID">Class</label>
                <input type="text" class="form-control" name="Class" required="required" placeholder="Class">
            </div>
            <div class="form-group">
                <label class="control-label" for="\Password">Period</label>
                <input type="number" class="form-control" min=1 name="Period" required="required" placeholder="Period in Months">
            </div>
            <div class="form-group">
                <label class="control-label" for="\Date">Date</label>
                <input type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>" name="Issue_date" required="required" placeholder="Date You want Issue">
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

