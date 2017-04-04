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


<style type="text/css">
    .head-container {
        text-transform: inherit;
        padding-top: 15px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 15px;
    }
    .head-containerbs3 {
        text-transform: inherit;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 15px;
    }
    .category-color-bar {
        height: 5px !important;
        min-height: 5px !important;
    }
    .item-title {
        font-size: 40px;
    }
    .item-titlebs3 {
        font-size: 40px;
    }
    .item-amount {
        white-space: nowrap;
        font-size: 50px;
    }
    .item-amountbs3{
        white-space: nowrap;
        font-size: 50px;
        font-weight: 400 !important;
    }
    .item-date-div {
        padding-top: 3px;
    }
    .item-date {
        font-size: 16px;
    }
    .positive-amount-details {
        font-weight: 500;
        color:#4cb07d;
    }
    .negative-amount-details {
        font-weight: 500;
        color:#bd4c4f;
    }
    .zero-amount-details {
        font-weight: 500;
        color:#bdbdbd;
    }
    .amount-div-details {
        text-align: right;
        height: 100%;
        padding-top: 25px;
    }
    .name-date {
        padding-top: 15px;
    }
    .column-details {
        margin-top: 15px;
        margin-bottom: 15px;
        padding: 15px;
    }
    .left-column-details {
        border-right: 1px solid rgb(225,225,225);
        padding-left: 30px;
    }
    .right-column-details {
        padding-left: 30px;
        padding-right: 30px;
    }
    .label-details {
        font-size: 11px;
        color: #757575;
    }
    .value-details {
        font-size: 14px;
    }
    .label-details-div {
        margin-bottom: -10px;
    }
    .horizontal-separator-out {
        padding-right: 15px;
        padding-top: 5px;
        padding-bottom: 10px;
    }
    .horizontal-separator-in {
        border-bottom: 1px solid rgb(215,215,215);
        height: 1px !important;
        min-height: 1px !important;
    }
    .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
        display: block;
        max-width: 100px;
        height: 100px;
    }
    .info{padding-top: 5px; font-size: 16px;}
    .colhead{font-weight: 900;margin-bottom: 15px;}
</style>


<div class="jumbotron">
    <h2 style="margin-top: -20px;">Requests For Passes</h2>

        <table class="container">
            <?php
                $query="select * from conc_dtb inner join clg_dtb on conc_dtb.UID=clg_dtb.UID where status='requested'ORDER BY Issue_date ASC ";
                $result=mysqli_query($db_var,$query) or die(mysql_error());

                echo " <table class=\"table table-bordered\">
              <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Category/Source</th>
                  <th>Amount</th>
                  <th>Date</th>
                    <th> Details </th>
                </tr>
              </thead>
              ";

                while($obj = $result->fetch_object()){
                    if($obj->Status == "requested")
                    {
                        echo "<tr class=\"danger\">
                            <td>$obj->UID</td>
                            <td>$obj->Name</td>
                            <td>$obj->Nearest_stn</td>";
                            if($obj->Class == "first")
                                echo "<td>First</td>";
                            else
                                echo "<td>Second</td>";
                            if($obj->Period==1)
                            {
                                echo"<td>Monthly</td>";
                            }
                            else
                            {
                                echo "<td>Quarterly</td>";
                            }
                        $birthdate = new DateTime($obj->DOB);
                        $today   = new DateTime('today');
                        $age = $birthdate->diff($today)->y;

                        echo "<td>
                                <button type=\"button\" class=\"btn btn-large btn-success \"  id=\"bt1\" data-toggle=\"modal\"  data-target=\"#$obj->id\" data-backdrop=\"static\" data-keyboard=\"false\" \" > Details</button >
                                
                             
                              </td>
                            </tr>
                            <div class=\"modal fade\" id=\"$obj->id\" role=\"dialog\">
                       <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\"><div class=\"row\">
    <div class=\"col-sm-12 head-containerbs3\">
        <div class=\"col-sm-7 name-date\">
            <div class=\"row\">
                <span class=\"item-titlebs3\">$obj->Name</span>
            </div>
            <div class=\"row item-date-div\">
                <span class=\"item-date\">$obj->UID</span>
            </div>
        </div>
        <div class=\"col-sm-5 amount-div-details\"><div class=\"row\">
          
           <label class=\"control-label col-sm-4\" for=\"pwd\">SERIAL NO</label>
      <div class=\"col-sm-10\">          
        <input type=\"text\" class=\"form-control\" id=\"pwd\" placeholder=\"Enter Serial Number\">
      </div>
            </div></div>
    </div>
       
</div>
<div class=\"row\">
    <div class=\"col-sm-12 category-color-bar\" style=\"background-color: #FFFFFF;\"></div>
</div>
<div class=\"row\">
    <div class=\"col-sm-6 column-details left-column-details\"> <!-- left column -->
        <!-- category -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"label-details\">Date of Issue:</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\">$obj->Issue_date</span>
            </div>
        </div>
        <!-- account -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"label-details\">Address</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\">$obj->Address</span>
            </div>
        </div>

        <!-- vat id -->
                <!-- external reference -->

        <div class=\"row horizontal-separator-out\">
            <div class=\"col-sm-12 horizontal-separator-in\"></div>
        </div>

                <div class=\"row\">
            <div class=\"col-sm-6\">
                <!-- tax -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"label-details\">Sex</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"value-details\">Male</span>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <!-- tax deductable -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"label-details\">Class</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"value-details\">$obj->Class</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <!-- base -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"label-details\">From</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"value-details\">$obj->Nearest_stn</span>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <!-- value tax -->
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"label-details\">To</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"value-details\">Andheri</span>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <div class=\"col-sm-6 column-details right-column-details\"> <!-- right column -->
      
                <div class=\"row\"></div>
   
     
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"label-details\">Date of Birth:</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\">$obj->DOB</span>
            </div>
        </div>
        <!-- account -->
          
           
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"label-details\">Age</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\">$age</span>
            </div>
        </div>
</div>

</div>
      <div class=\"modal-footer\">
      <a type=\"submit\" class=\"btn btn-large btn-success approve\"  id=\"$obj->UID\" style='padding-top:7px;' data-dismiss=\"modal\"\">Approve</a >
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
                          </div>

                        </div>
                      </div>
 

                             ";

                   }
                }
            ?>
        </table>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
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
</body>
</html>


