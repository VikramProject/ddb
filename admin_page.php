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
<script type = "text/javascript" language = "javascript">
$(document).ready(function(){
    $(".approve").click(function(){
        var blah = $(this).attr('id');
        $.ajax({
            type: "GET",
            url: "update.php",
            data: {q:blah},
            cache: false,
            context: this,
            success: function(){
                $(this).parent().parent().remove();
                //alert("Record successfully updated");
            }
        });
    });
});
</script>

<div class="jumbotron">
    <h2>Welcome Admin

    <h4>Requests For Passes</h4>

        <div class="container">
            <?php
                $query="select * from conc_dtb inner join student on conc_dtb.UID=student.UID where status='requested'";
                $result=mysqli_query($db_var,$query) or die(mysql_error());
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
                                echo "<div class=\"col-lg-2\">Quarterly</div>";
                            }
                        echo "<div class=\"col-lg-2\">
                                <button type=\"submit\" class=\"btn btn-large btn-success approve\"  id=\"$obj->UID\" onclick=\"showHint($obj->UID); return false\">Submit</button>
                              </div>
                            </div>";




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


