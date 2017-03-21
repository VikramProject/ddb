<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 18-03-2017
 * Time: 22:52
 */
include('config.php');
include('nav_bar.php');
if(!isset($_SESSION["rollno"]))
    header("location:index.php");
$rollno=$_SESSION["rollno"];
if ($rollno!=2014130999)
    header("Location:student_home.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    function showHint(str) {
        if (str.length == 0) {
            this.innerHTML = "Not Found";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    this.parentNode.removeChild(this);
                }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<div class="jumbotron">
    <h2>Welcome Admin

    <h4>Requests For Passes</h4>

<!--    <div class="contianer">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-3">name</div>-->
<!--            <div class="col-lg-3">UID</div>-->
<!--            <div class="col-lg-3">Station</div>-->
<!--        </div>-->
<!--    <form role="form" method="POST" action="#">-->
<!--        <div class="form-group">-->
<!--            <label class="control-label" for="/Nearest Station">Nearest Station</label>-->
<!--            <input type="text" class="form-control" name="Nearest_stn" required="required" placeholder="Nearest Station">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="control-label" for="UID">Class</label>-->
<!--            <input type="text" class="form-control" name="Class" required="required" placeholder="Class">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="control-label" for="\Password">Period</label>-->
<!--            <input type="number" class="form-control" min=1 name="Period" required="required" placeholder="Period in Months">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="control-label" for="\Date">Date</label>-->
<!--            <input type="date" class="form-control" min="--><?php //echo date("Y-m-d"); ?><!--" name="Issue_date" required="required" placeholder="Date You want Issue">-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-large btn-success">Submit</button>-->
<!--    </form>-->
        <div class="container">
            <?php
                $query="select * from conc_dtb inner join student on conc_dtb.UID=student.UID where status='requested'";
                $result=mysqli_query($db_var,$query) or die(mysql_error());
                //$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                while($obj = $result->fetch_object()){
                    if($obj->Status == "requested")
                    {
                        echo "<div class=\"row\">
                            <div class=\"col-lg-2\">$obj->UID</div>
                            <div class=\"col-lg-2\">$obj->Name</div>
                            <div class=\"col-lg-2\">$obj->Nearest_stn</div>
                            <div class=\"col-lg-2\">$obj->Class</div>";
                            if($obj->Period==1)
                            {
                                echo"<div class=\"col-lg-2\">Monthly</div>";
                            }
                            else
                            {
                                echo "<div class=\"col-lg-2\">Quaterly</div>";
                            }
                        echo"<div class=\"col-lg-2\"><form><button type=\"submit\" class=\"btn btn-large btn-success approve\"  id=\"$obj->UID\" onclick=\"showHint($obj->UID)\">Submit</button></form></div></div>";




                   }
                }
            ?>
        </div>
</div>
</div>
<br>
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


