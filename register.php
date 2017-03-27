<?php
include("config.php");
include("nav_bar.php");

$flg=0;
if(isset($_POST["rollno"])&&isset($_POST["Password"])&&isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["nearest"]))
{

	$roll=$_POST["rollno"];
	$name=$_POST["name"];
	$pass=$_POST["Password"];
	$pass=password_hash($pass,PASSWORD_BCRYPT,['cost' => 12]);
	$email=$_POST["email"];
	$nearest=$_POST["nearest"];


	$query="select * from clg_dtb where UID='$roll'";
    $result=mysqli_query($db_var,$query) or die(mysql_error());
    $rows=mysqli_num_rows($result);
    if($rows==0)
    {
        $message = "Sorry There is No such UID present Please recheck Your UID";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
        $query="select * from conc_dtb where UID='$roll'";
        $result=mysqli_query($db_var,$query) or die(mysql_error());
        $rows=mysqli_num_rows($result);
        if($rows==0)
        {
            $query="insert into student(UID,Password,Name,Email) values('$roll','$pass','$name','$email')";
            $result=mysqli_query($db_var,$query) or die(mysql_error());
            $query="insert into conc_dtb(UID,Nearest_stn) values('$roll','$nearest')";
            $result=mysqli_query($db_var,$query) or die(mysql_error());
            header("Location:index.php");
        }
        else if($rows==1)
        {
            $message = "Alraedy Registered Please Login";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {
            echo"Something went wrong";
        }
    }


	


	
	
	
}


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

            <div class="jumbotron">
                <h2>Register</h2>
                <form role="form" method="POST" action="register.php"> 
                    <div class="form-group"> 
                        <label class="control-label" for="UID">Roll No.(UID)</label>                         
                        <input type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID"> 
                    </div> 
                    <div class="form-group"> 
                        <label class="control-label" for="\Password">Password</label>                         
                        <input type="password" class="form-control" name="Password" required="required" placeholder="Password"> 
                    </div>                    
                    <div class="form-group"> 
                        <label class="control-label" for="\Name">Name</label>                         
                        <input type="text" class="form-control" name="name" required="required" placeholder="Name"> 
                    </div>
                    <div class="form-group"> 
                        <label class="control-label" for="\Email">Email</label>                         
                        <input type="email" class="form-control" name="email" required="required" placeholder="Email Id"> 
                    </div>
                    <div class="form-group"> 
                        <label class="control-label" for="\Nearest">Nearest Station</label>
                        <input type="text" class="form-control" name="nearest" required="required" placeholder="Nearest Station">
                    </div>


                    <button type="submit" class="btn btn-large btn-success">Submit</button>

                </form>
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
    </body>
</html>
