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
    $query="SELECT * FROM report_dtb
INTO OUTFILE '/home/zainahmeds/Desktop/report.csv'
FIELDS ESCAPED BY '\"\"'
TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\r\n'";
    $result=mysqli_query($db_var,$query);
//    export_excel_csv();
    echo "ok";

    /*SELECT order_id,product_name,qty FROM orders
INTO OUTFILE '/tmp/orders.csv'
FIELDS TERMINATED B Y ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'*/


//}
//function export_excel_csv()
//{
    $header="";
    $data="";
    $query = "SELECT * FROM report_dtb";
    $result=mysqli_query($db_var,$query);

    $num_fields = mysqli_num_fields($result);

    for($i = 0; $i < $num_fields; $i++ )
    {
        $header .= mysqli_fetch_field_direct($result, $i)->name."\\t";
    }

    while($row = mysqli_fetch_row($result))
    {
        $line = '';
        foreach($row as $value)
        {
            if((!isset($value)) || ($value == ""))
            {
                $value = "\\t";
            }
            else
            {
                $value = str_replace( '"' , '""' , $value );
                $value = '"' . $value . '"' . "\\t";
            }
            $line .= $value;
        }
        $data .= trim( $line ) . "\\n";
    }

    $data = str_replace("\\r" , "" , $data);

    if ($data == "")
    {
        $data = "\\n No Record Found!\n";
    }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=reports.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print "$header\\n$data";
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

<table class="container">
    <?php
    if(isset($_POST['start_sr']) && isset($_POST['end_sr'])) {
        $query = "select * from report_dtb where sr_no BETWEEN '$start' and '$end'";
        $result = mysqli_query($db_var, $query) or die(mysql_error());

        echo " <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>UID</th>
                  <th>Name</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th> Period</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Class</th>
                  <th>Issued</th>
                  <th>DOB</th>
                </tr>
              </thead>
              ";

        while ($obj = $result->fetch_object()) {
            echo "<tr class=\"danger\">
                            <td>$obj->Sr_no</td>
                            <td>$obj->UID</td>
                            <td>$obj->Name</td>
                            <td>$obj->Age</td>
                            <td>$obj->Sex</td>
                            <td>$obj->Address</td>
                            <td>$obj->Period</td>
                            <td>$obj->From_stn</td>
                            <td>$obj->To_stn</td>
                            <td>$obj->Class</td>
                            <td>$obj->Issued_date</td>
                            <td>$obj->DOB</td>
                            </tr>";

        }
    }
    ?>
</table>


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

