<?php
/**
 * Created by PhpStorm.
 * User: siddhey
 * Date: 29/3/17
 * Time: 4:34 PM
 */
include("config.php");
include("nav_bar.php");

if(isset($_POST['start_sr']) && isset($_POST['end_sr']))
{

    $start=$_POST['start_sr'];
    $end=$_POST['end_sr'];
    echo"$start,$end";
    $query="select *from report_dtb into outfile 'C:\Users\Rohan\Downloads\report.csv'  where sr_no BETWEEN '$start' and '$end'";
    $result=mysqli_query($db_var,$query);



    /*SELECT order_id,product_name,qty FROM orders
INTO OUTFILE '/tmp/orders.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'*/


}


?>

<div class="jumbotron">
<!--    <h1>Welcome-->
<!--    </h1>-->
    <h4> Enter details for Report Generations</h4>
    <form role="form" method="POST" action="report_gen.php">
        <div class="form-group">
            <label class="control-label" ">Start SR Number</label>
            <input class="form-control" name="start_sr" required="required" placeholder="Enter Start SR Number">
        </div>
        <div class="form-group">
            <label class="control-label" ">End SR Number</label>
            <input class="form-control" name="end_sr" required="required" placeholder="Enter End SR Number">

        </div>

        <button type="submit" class="btn btn-large btn-success">Generate Report</button>
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

