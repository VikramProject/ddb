<?php
   include("config.php");
   
   if (isset($_GET['Message'])) {
       print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
   }
   if(isset($_SESSION["rollno"]))
   {
       $rollno=$_SESSION["rollno"];
       if ($rollno==$admin)
       {
           header("Location:admin_page.php");
           exit();
       }
   
       else
       {
           header("location:student_home.php");
           exit();
       }
   
   }
   
   include("nav_bar.php");
?>

    <!--login-->
    <div class="login w3-animate-zoom">
        <div class="login-screen">
            <span class="logo"></span>
            <div class="app-title">
                <h2>LOGIN</h2>
            </div>
            <div class="login-form">

                <!--login form-->
                <form role="form" method="POST" action="login.php" name="loginForm">

                    <!--UID(Roll No.)-->
                    <div class="form-group" ng-class="{ 'has-error' : loginForm.rollno.$invalid && !loginForm.rollno.$pristine }">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="number" id="ex3" class="form-control" name="rollno" placeholder="Enter UID" ng-model="rollno" ng-maxlength="10"
                                ng-minlength="10" required/>
                        </div>
                        <p ng-show="loginForm.rollno.$dirty && loginForm.rollno.$error.required" class="help-block text-left">UID is required.</p>
                        <p ng-show="loginForm.rollno.$error.minlength" class="help-block text-left">UID must contain 10 digits.</p>
                        <p ng-show="loginForm.rollno.$error.maxlength" class="help-block text-left">UID must contain 10 digits.</p>
                    </div>

                    <!--Password-->
                    <div class="form-group" ng-class="{ 'has-error' : loginForm.Password.$invalid && !loginForm.Password.$pristine }">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" id="ex3" class="form-control" name="Password" ng-model="password" placeholder="Password" required/>
                        </div>
                        <p ng-show="loginForm.Password.$dirty && loginForm.Password.$error.required" class="help-block text-left">Password is required.</p>
                    </div>

                    <!--login button-->
                    <button type="submit" class="btn btn-primary btn-large btn-block" ng-disabled="loginForm.$invalid">LOGIN</button>
                </form>
                <!--form ends-->
                <a class="login-link" data-toggle="modal" data-target="#forgotPassword">Forgot password?</a>
            </div>
        </div>
       

        <!--footer-->
        <footer class="footer">
            <p class="copyright">&copy Sardar Patel Institute of Technology</p>
        </footer>

    </div>
     <!--login ends-->

    </div>
    <!-- container(starts on navbar page) ends here -->

    <!-- Forgot Password Modal -->
    <div class="modal modal-wide fade" id="forgotPassword" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close close-demo" data-dismiss="modal">&times;</button><br><br>
                    <div class="container-fluid">
                        <div class="login-form">
                            <form role="form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input placeholder="Email" name="username" class="form-control" type="email" required/>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-large btn-block" data-dismiss="modal" type="button">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
   ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>

    </html>