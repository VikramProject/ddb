<?php
include('config.php');
include('nav_bar.php');
if(!isset($_SESSION["rollno"]))
    header("location:index.php");
$rollno=$_SESSION["rollno"];
if ($rollno!=$admin)
    header("Location:student_home.php");

$flg=0;
if(isset($_POST["rollno"]))
{

    $roll=$_POST["rollno"];
    $query="select * from student join conc_dtb USING(UID) where UID='$roll'";
    $result=mysqli_query($db_var,$query) or die(mysql_error());
    $rows=mysqli_num_rows($result);
    $obj = $result->fetch_object();
    /*if($rows == 1)
    {
        $message = "Success";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }*/
    if($rows == 0)
    {
        $_SESSION["msgF"] = "Student has not been registered. Recheck credentials :)";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location:change_info.php");
    }
}

/*if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["nearest"]) && isset($_POST["addr"]) &&isset($_POST["dob"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $nearest = $_POST["nearest"];
    $dob = $_POST["dob"];
    $addr = $_POST["addr"];

    $query = "update student set Name='$name', Email='$email', Address='$addr', DOB='$dob' where UID=$roll";
    $result = mysqli_query($db_var, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
}*/


?>
<script>
    function phoneno(){
        $('#phone').keypress(function(e) {
            var a = [];
            var k = e.which;

            for (i = 48; i < 58; i++)
                a.push(i);

            if (!(a.indexOf(k)>=0))
                e.preventDefault();
        });
    }
</script>
<head>
    <style type="text/css">
        #station {
            position: relative;
            z-index: 10000;
        }
        .autocomplete {
            z-index: 9999 !important;
        }
    </style>
</head>
<div class="jumbotron" id="<?php echo $obj->UID; ?>">
    <h2 style="margin-top: -17px"><?php echo "UID : $obj->UID"?></h2>
    <h2 style="margin-top: 20px;">Student Info</h2>
        <div class="form-group">
            <label class="control-label" for="\Name">Name</label>
            <input type="text" class="form-control" id="name" required="required" value="<?php echo $obj->Name; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="\Email">Email</label>
            <input type="email" class="form-control" id="email" required="required" value="<?php echo $obj->Email; ?>">
        </div>
        <div class="ui-widget form-group">
            <label class="control-label" for="\Nearest" style="font-weight:lighter">Nearest Station</label>
            <input  id="station" type="text" class="form-control" required="required" value="<?php echo $obj->Nearest_stn; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="\Address">Address</label>
            <input type="text" class="form-control" id="addr" required="required" value="<?php echo $obj->Address; ?>">
        </div>
        <div class="form-group">
            <label class="control-label" ">Date Of Birth </label>
            <input type="date" class="form-control" id="dob" required="required" value="<?php echo date("Y-m-d",strtotime($obj->DOB)); ?>">
        </div>
        <button type="submit" class="btn btn-large btn-success">Submit</button>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>

    $(function() {
        $( "#station" ).autocomplete({
            source: 'search.php'
        });
    });
</script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function(){
        $(".btn").click(function(){
            var name = $('#name').val();
            //alert("name: "+name);
            var email = $('#email').val();
            var nearest = $('#station').val();
            var dob = $('#dob').val();
            var addr = $('#addr').val();
            var roll = $('.jumbotron').attr('id');
            //alert("name: "+nearest);
            $.ajax({
                type: "GET",
                url: "change_info_database.php",
                data: {name:name,email:email,nearest:nearest,dob:dob,roll:roll,addr:addr},
                cache: false,
                context: this,
                success: function(data){
                    //alert(data);
                    location.reload();
                }
            });
        });
    });
</script>





