<?php
/**
 * Created by PhpStorm.
 * User: siddhey
 * Date: 29/3/17
 * Time: 4:34 PM
 */
include("config.php");
include("nav_bar.php");

/*function getcsv($fields)
{
    $separator = '';
    foreach ($fields as $field) {
        if (preg_match('/\\r|\\n|,|"/', $field)) {
            $field = '"' . str_replace('"', '""', $field) . '"';
        }
        echo $separator . $field;
        $separator = ',';
    }
    echo "\r\n";
    return;
}*/

if(isset($_POST['start_sr']) && isset($_POST['end_sr']))
{
    $start=$_POST['start_sr'];
    $end=$_POST['end_sr'];
   // $query="select * from report_dtb into outfile 'C:\Users\Rohan\Desktop\report.csv' FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' where sr_no BETWEEN '$start' and '$end'";
  //  $result=mysqli_query($db_var,$query);


    $output = fopen("php://output", "w");
    fputcsv($output, array('Id', 'UID', 'Sr_no', 'Name', 'Age', 'Sex', 'Address', 'Period', 'From_stn', 'To_stn', 'Class', 'Issued_date', 'DOB'));
    $query = "SELECT * from report_dtb where Sr_no BETWEEN $start and $end";

    $result = mysqli_query($db_var,$query);
   while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=report.csv');

  /*  $row = mysqli_fetch_assoc($result);
    if ($row) {
        getcsv(array_keys($row));
    }*/

    /*
     * output data rows (if atleast one row exists)
     */

 /*   while ($row) {
        getcsv($row);
        $row = mysqli_fetch_assoc($result);
    }*/

    /*
     * echo the input array as csv data maintaining consistency with most CSV implementations
     * - uses double-quotes as enclosure when necessary
     * - uses double double-quotes to escape double-quotes
     * - uses CRLF as a line separator
     */


    /*   echo"<table>

           <>
   ";*/

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
            <div class="col-xs-4">
            <label class="control-label" ">Start SR Number</label>
            <input class="form-control" id="ex3" name="start_sr" required="required" placeholder="Enter Start SR Number">
            </div>
        </div>
        <br><br><br><br>
        <div class="form-group">
            <div class="col-xs-4">
            <label class="control-label" ">End SR Number</label>
            <input class="form-control" id="ex3" name="end_sr" required="required" placeholder="Enter End SR Number">
            </div>
        </div>
        <br><br><br><br>

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

