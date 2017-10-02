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
       $dob = date('Y-m-d',strtotime($dob));
       $addr = $_POST["addr"];
       $category=$_POST["caste"];
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
    <!--Register-->
    <div class="jumbotron register-form">
        <h2 class="text-center">REGISTER</h2>
        <br>
        <form role="form" method="POST" action="register.php" name="register">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="UID">Roll No.(UID)</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                            <input readonly type="text" class="form-control" name="rollno" required="required" placeholder="Enter UID" value="<?php echo $objectStudent->UID?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="\Name">Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input readonly type="text" class="form-control" name="name" required="required" placeholder="Name" value="<?php echo $objectStudent->Name?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label class="control-label " for="\Gender">Gender:  </label>
                        <label class="control-label " for="\Gender"><?php echo $objectStudent->Sex?> </label>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label class="control-label">Category:  </label>
                        <label class="control-label"><?php echo $objectStudent->Category?></label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input readonly type="email" style="z-index:1" class="form-control" name="email" required="required" placeholder="Email Id"
                        value="<?php echo $objectStudent->Email?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="\Nearest">Nearest Station</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train"></i></span>
                            <select name="nearest" id="\Nearest" class="form-control" required>
                  <?php
                     $sql = mysqli_query($db_var, "SELECT station FROM station");
                     while ($row = $sql->fetch_assoc()){
                         echo "<option value=".$row['station'].">" . $row['station'] . "</option>";
                     }
                     ?>
                  </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Date Of Birth </label>
                        <div class="form-group" ng-class="{ 'has-error' : register.dob.$dirty && register.dob.$invalid }">
                            <input type="date" name="dob" class="form-control" ng-model="dob" required
                                placeholder="DD-MM-YYYY" />
                            <span class="help-block" ng-show="register.dob.$dirty && register.dob.$error.required">Date Of Birth is required.</span>
                            <span class="help-block" ng-show="register.dob.$dirty && register.dob.$error.date">Invalid Date</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label" for="\Address">Address</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <input readonly type="text" class="form-control" name="addr" required="required" placeholder="Address" value="<?php echo $objectStudent->Address?>">
                        </div>
                    </div>
                </div>
                <button type="submit" ng-disabled="register.$invalid" class="btn btn-primary btn-large btn-block">Submit</button>
        </form>
        </div>
        <!-- jumbotron -->
    </div>
    <!-- container -->
    <footer class="footer">
        <p class="copyright">&copy Sardar Patel Institute of Technology, Andheri</p>
    </footer>
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
        function phoneno() {
            $('#phone').keypress(function (e) {
                var a = [];
                var k = e.which;
                for (i = 48; i < 58; i++)
                    a.push(i);
                if (!(a.indexOf(k) >= 0))
                    e.preventDefault();
            });
        }
    </script>