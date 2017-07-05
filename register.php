<?php
include("config.php");
$flg=0;
if(!$_SESSION['rollno']){
    header('location:index.php');
}
if(isset($_POST["rollno"])&&isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["nearest"]))
{
    $roll=$_POST["rollno"];
    $name=$_POST["name"];
    $pass=$_POST["Password"];
    $pass=password_hash($pass,PASSWORD_BCRYPT,['cost' => 12]);
    $email=$_POST["email"];
    $nearest=$_POST["nearest"];
    $nearest=$nearest;
    $sex = $_POST["gender"];
    $dob = $_POST["dob"];
    $dob = date('d-m-y',strtotime($dob));
    $addr = $_POST["addr"];
    $category=$_POST["caste"];
//    $query="select * from clg_dtb where UID='$roll'";
//    $result=mysqli_query($db_var,$query) or die(mysqli_error());
//    $rows=mysqli_num_rows($result);
    /* if($rows==0)
     {
         $message = "Sorry There is No such UID present Please recheck Your UID";
         echo "<script type='text/javascript'>alert('$message');</script>";
     }*/
    //   else
//    {
    $query="select * from conc_dtb where UID='$roll'";
    $result=mysqli_query($db_var,$query) or die(mysql_error());
    $rows=mysqli_num_rows($result);
    if($rows==0)
    {
        $query="update student set DOB='$dob' where UID='$roll'";
        $result=mysqli_query($db_var,$query) or die(mysql_error());
        $query="insert into conc_dtb(UID,Nearest_stn) values('$roll','$nearest')";
        $result=mysqli_query($db_var,$query) or die(mysql_error());
        $message = "Sucessfully Registered";
        //echo "<script type='text/javascript'>alert('$message');</script>";
        //header("Location:index.php");
        header("Location: index.php?Message=" . urlencode($message));
        exit();
    }
    else if($rows==1)
    {
        $message = "Already Registered Please Login";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
        echo"Something went wrong";
    }
    //  }


}
$rollno=$_SESSION["rollno"];
$query="select * from student where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$objectStudent = $result->fetch_object();
$query="select * from conc_dtb where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$objectConc_dtb = $result->fetch_object();



include("nav_bar.php");
?>


<div class="jumbotron">
    <h2>Register</h2>
    <form role="form" method="POST" action="register.php">
        <div class="form-group">
            <label class="control-label" for="UID">Roll No.(UID)</label>
            <input readonly type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID" value="<?php echo $objectStudent->UID?>">
        </div>
<!--        <div class="form-group">-->
<!--            <label class="control-label" for="\Password">Password</label>-->
<!--            <input type="password" class="form-control" name="Password" required="required" placeholder="Password">-->
<!--        </div>-->
        <div class="form-group">
            <label class="control-label" for="\Name">Name</label>
            <input readonly type="text" class="form-control" name="name" required="required" placeholder="Name" value="<?php echo $objectStudent->Name?>">
        </div>
        <div class="form-group">
            <label class="control-label " for="\Gender">Gender:  </label>
            <label class="control-label " for="\Gender"><?php echo $objectStudent->Sex?> </label>
        </div>
        <div class="form-group">
            <label class="control-label" >Category:  </label>
            <label class="control-label" ><?php echo $objectStudent->Category?></label>
        </div>
        <div class="form-group">
            <label class="control-label" for="\Email">Email</label>
            <input readonly type="email" class="form-control" name="email" required="required" placeholder="Email Id" value="<?php echo $objectStudent->Email?>">
        </div>
        <div class="form-group">
            <label class="control-label" for="\Nearest">Nearest Station</label>
<!--            <input   id="station" type="text" class="form-control" name="nearest" required="required" placeholder="Nearest Station" value="--><?php //$val=(isset($objectConc_dtb->Nearest_stn))?$objectConc_dtb->Nearest_stn:""; echo $val?><!--">-->

            <select name="nearest" id="\Nearest" class="form-control" required>
                <?php
                $sql = mysqli_query($db_var, "SELECT station FROM station");
                while ($row = $sql->fetch_assoc()){
                    echo "<option value=".$row['station'].">" . $row['station'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label" for="\Address">Address</label>
            <input readonly type="text" class="form-control" name="addr" required="required" placeholder="Address" value="<?php echo $objectStudent->Address?>">
        </div>
        <div class="form-group">
            <label class="control-label" ">Date Of Birth </label>
            <input type="text" class="form-control" id="idTourDateDetails" name="dob" required="required" placeholder="Date Of Birth" value="<?php $d=($objectStudent->DOB!=date('d-m-y',strtotime("00-00-0000")))?"":$objectStudent->DOB;echo $d;?>">
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
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->
<!--<script>-->
<!---->
<!--    $(function() {-->
<!--        $( "#station" ).autocomplete({-->
<!--            source: 'search.php'-->
<!--        });-->
<!--    });-->
<!--</script>-->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
   $('#idTourDateDetails').datepicker({
     
     dateFormat: 'dd-mm-yy',
     changeMonth: true,
     changeYear: true,
     yearRange: "-100:+0",       
     altField: "#idTourDateDetailsHidden",
     altFormat: "yy-mm-dd"
 });
 </script>
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
