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
<style>
    textarea {resize: none;}
    .form-control{font-size: 16px;}
    .colhead{font-weight: 900;margin-bottom: 15px;padding-left: 30px;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function(){
        $(".apply").click(function(){
            var rollno = $(this).attr('id');
            //var name = $(this).parent().siblings().find(".Name").val();
            //var email = $(this).parent().siblings().find(".Email").val();
            var near = $(this).parent().siblings().find(".Nearest_stn").val();
            var classn = $(this).parent().siblings().find(".Class").val();
            var period = $(this).parent().siblings().find(".Period").val();
            //alert($(this).parent().siblings().find(".Period").val());

            //alert("Period is "+period);
            $.ajax({
                type: "POST",
                url: "change_student_info.php",
                data: {roll:rollno, near:near, classn:classn, period:period},
                cache: false,
                context: this,
                success: function(){
                    alert("Successfully update student info");
                }
            });
        });
    });
</script>

<div class="jumbotron">
    <h2 style="margin-top:-20px;">Student Database</h2>
        <div class="container" style="margin-top:10px;">
            <?php
            $query = "select * from conc_dtb inner join student on conc_dtb.UID=student.UID";
            $result=mysqli_query($db_var,$query) or die(mysql_error());
            echo "<div class='row'>
                <div class=\"col-lg-2 colhead\" style='font-size: 16px; padding-top: 7px;font-style: italic; padding-left: 35px;'>UID</div>
                <div class=\"col-lg-2 colhead\" style='font-size: 16px; padding-top: 7px;font-style: italic'>Name</div>
                <div class=\"col-lg-2 colhead\" style='font-size: 16px; padding-top: 7px;font-style: italic'>Nearest Stn</div>
                <div class=\"col-lg-2 colhead\" style='font-size: 16px; padding-top: 7px;font-style: italic'>Train Class</div>
                <div class=\"col-lg-2 colhead\" style='font-size: 16px; padding-top: 7px;font-style: italic'>Period</div>
                </div>";
            while($obj = $result->fetch_object()){
                echo "<div class=\"row\" style=\"margin-top: 10px;\">
                        <div class=\"col-lg-2\" style='font-size: 16px; padding-top: 7px;'>$obj->UID</div>
                        <div class=\"col-lg-2\" style='font-size: 16px; padding-top: 7px;'>$obj->Name</div>
                        <div class=\"col-lg-2\"><textarea class=\"form-control Nearest_stn\" rows=\"1\" col='Nearest_stn' val='$obj->Nearest_stn' >$obj->Nearest_stn</textarea></div>
                        <div class=\"col-lg-2\">
                        <select class=\"form-control Class\" name=\"Class\" required=\"required\" placeholder=\"Class\">";
                        if($obj->Class == "first"){
                            echo "<option value=\"first\" selected='selected'>First</option>
                            <option value=\"sec\">Sec</option>";
                        }
                        else{
                            echo "<option value=\"first\" >First</option>
                            <option value=\"sec\" selected='selected'>Sec</option>";
                        }
                        echo "</select>
                      </div>
                      <div class=\"col-lg-2\">
                        <select class=\"form-control Period\" name=\"Period\" required=\"required\" placeholder=\"Period\">";
                        if($obj->Period == 1){
                            echo "<option value=\"1\" selected='selected'>Monthly</option>
                            <option value=\"3\">Quarterly</option>";
                        }
                        else{
                            echo "<option value=\"1\" >Monthly</option>
                            <option value=\"3\" selected='selected'>Quarterly</option>";
                        }
                        echo "</select></div>
                       <div class=\"col-lg-2\"><button type=\"submit\" class=\"btn btn-large btn-success apply\"  id=\"$obj->UID\">Apply Change</button>
                       </div>
                </div>";
            }
            ?>
        </div>
</div>
</div>
<br>
<footer class="footer">
    <p style="font-size: 16px">&copy Sardar Patel Institute of Technology</p>
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


