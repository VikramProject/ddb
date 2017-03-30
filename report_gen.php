<?php
/**
 * Created by PhpStorm.
 * User: siddhey
 * Date: 29/3/17
 * Time: 4:34 PM
 */
include("config.php");
include("nav_bar.php");

?>

<div class="jumbotron">
<!--    <h1>Welcome-->
<!--    </h1>-->
    <h4> Enter details for Railway Pass</h4>
    <form role="form" method="POST" action="student_home.php">
        <div class="form-group">
            <label class="control-label" ">Class</label>
            <select class="form-control" name="Class" required="required" placeholder="Class">
                <option value="first">First</option>
                <option value="sec">Second</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" ">Period</label>
            <select class="form-control" name="Period" required="required" placeholder="Period">
                <option value="1">Monthly</option>
                <option value="3">Quarterly</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" ">Date</label>
            <?php $curr = date("Y-m-d");
            $curr = strtotime($curr);
            $curr = strtotime(" +3 day",$curr);
            $curr = date('Y-m-d',$curr);
            ?>
            <input type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>"max="<?php echo $curr; ?>" name="Issue_date" required="required" placeholder="Date You want Issue">
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

