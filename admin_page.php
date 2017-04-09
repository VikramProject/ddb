<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 18-03-2017
 * Time: 22:52
 */
include('config.php');
if(!isset($_SESSION["rollno"]))
{
    header("location:index.php");
    exit();
}

$rollno=$_SESSION["rollno"];
if ($rollno!=$admin)
{

    header("Location:student_home.php");
    exit();
}

$query="select * from serial_no_storage where id=1";
$res=mysqli_query($db_var,$query) or die(mysqli_error());
$serial = $res->fetch_object();
$last = $serial->last;
$avail = $serial->available;
if($last-$avail+1==0)
{
    header("Location:request_serial.php");
    exit();
}

include('nav_bar.php');
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
    .error
    {
        border:1px solid red;
    }
</style>


<div class="jumbotron">
    <h2 style="margin-top: -20px;">Requests For Passes</h2>


            <?php
                $query="select * from conc_dtb inner join student on conc_dtb.UID=student.UID where status='requested'ORDER BY Issue_date ASC ";
                $result=mysqli_query($db_var,$query) or die(mysqli_error());
                $query="select * from serial_no_storage where id=1";
                $res=mysqli_query($db_var,$query) or die(mysqli_error());
                $serial = $res->fetch_object();
                $count = $serial->last - $serial->available + 1;

                echo "<span class=\"form-group pull-right \">
  <label for=\"search\">Search</label>
  <input  id=\"search\" type=\"text\">
<br></span> ";

                echo " <table class=\"table table-bordered\" id='table' '>
              <thead style='background-color: slategrey;color: white'>
                <tr>
                  <th>Sr No.</th>
                  <th>Name</th>
                  <th>Station</th>
                  <th>Class</th>
                  <th>Period</th>
                  <th> Details </th>
                </tr>
              </thead>
              ";

                while($obj = $result->fetch_object()){
                    if($obj->Status == "requested") {
                        echo "<tr class=\"danger\" id='$obj->UID'>
                            <td data-id='$obj->UID'>$obj->UID</td>
                            <td>$obj->Name</td>
                            <td>$obj->Nearest_stn</td>
                            <td>$obj->Class</td>
                            <td>$obj->Period</td>";
                        $birthdate = new DateTime($obj->DOB);
                        $today = new DateTime('today');
                        $ageY = $birthdate->diff($today)->y;
                        $ageM = $birthdate->diff($today)->m;

                        echo "<td>
                                <button type=\"button\" class=\"btn btn-large btn-danger \"  id=\"bt1\" data-toggle=\"modal\"  data-target=\"#$obj->UID\" data-backdrop=\"static\" data-keyboard=\"false\" \" >Details</button >
                                
                             
                              </td>
                            </tr>
                            <div class=\"modal fade\" id=\"$obj->UID\" role=\"dialog\" data-keyboard=\"true\" tabindex='-1'>
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
          
           <label class=\"control-label col-sm-4\" for=\"ser_no\">SERIAL NO</label>
      <div class=\"col-sm-10\">          
        <input type=\"text\" class=\"form-control \" id=\"ser_no\" value='$serial->available' avail='$serial->available' end='$serial->last'>";
        if($count == 1)
        echo "<div id='count' style='margin-top: 10px;text-align: left;color: red;font-style: italic'>$count form left in the book</div>";
        else 
        echo "<div id='count' style='margin-top: 10px;text-align: left;color: red'>$count forms left in the book</div>";
      echo "</div>
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
                <span class=\"value-details\">" . date("d-m-Y", strtotime($obj->Issue_date)) . "</span>
            </div>
        </div>
        <!-- address -->
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"label-details\">Age</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\" id='age'>Y: $ageY  M: $ageM</span>
            </div>
        </div>
        <!-- vat id -->
                <!-- external reference -->

        <div class=\"row horizontal-separator-out\">
            <div class=\"col-sm-12 horizontal-separator-in\"></div>
        </div>

        <div class=\"row\">
            
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
            <div class=\"col-sm-6\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"label-details\">Period</span>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <span class=\"value-details\">$obj->Period</span>
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
                  <span class=\"label-details\">Gender</span>
             </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                  <span class=\"value-details\">$obj->Sex</span>
            </div>
       </div>
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
                <span class=\"label-details\">Address</span>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <span class=\"value-details\">$obj->Address</span>
            </div>
        </div>
  
           
        
</div>

</div>
      <div class=\"modal-footer\">
       <a type=\"submit\" class=\"btn btn-default btn-success approve\"  id=\"$obj->UID\"  data-dismiss=\"modal\">Approve</a >
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
</div>
<footer class="footer">
    <p>&copy Sardar Patel Institute of Technology</p>
</footer>

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
            var blah1 = $(this).parents('.modal').attr('id');
            var blah = $(this).attr('id');
//            alert("ID: "+blah);

            var ser = $(this).parents('.modal').find('#ser_no').val();
            var ser1 = $(this).parents('.modal').find('#ser_no');
            var end= ser1.attr('end');
            var curr = ser1.attr('avail');
            if(ser > end){
                alert("The serial number provided is not registered in the current concession book. Please insert the correct serial number");
                ser1.val(curr);
                return};
            if(ser < curr){
                alert("The serial number provided has already been used. Please provide an appropriate serial number");
                ser1.val(curr);
                return;}
            //alert("ser_no is "+ser);
            var age =$('#age').text();
            if(ser.length <= 0){
                alert("Please fill Serial No");
                $(ser1).attr("placeholder","****Should not be empty****");
                $(ser1).addClass('error');
            }
            else {$.ajax({
                type: "GET",
                url: "update.php",
                data: {q:blah,c:ser,age:age},
                cache: false,
                context: this,
                success: function(data){
                    var avail = parseInt(data);
                    $('[data-id='+blah+']').parents('tr').remove();
                    if(avail > end){
                        window.location.replace("request_serial.php");
                    }
                    //alert(end);
                    $('.modal').find('#ser_no').val(data);
                    var left = end - avail+1;
                    if(left == 1)
                        $('.modal').find('#count').html(left+" form left in the book");
                    else
                        $('.modal').find('#count').html(left+" forms left in the book");
                }
            });}
        });
    });
</script>
<script type="text/javascript">
    var $rows = $('#table tr').not('thead tr');
    $('#search').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
</script>
</body>
</html>


