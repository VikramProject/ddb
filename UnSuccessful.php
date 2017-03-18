<?php
include('config.php');
include('nav_bar.php');
?>

            <div class="jumbotron">
                <h2><?php 
                if(isset($_SESSION["Error"]))
                {
                    $message=$_SESSION["Error"];
                    echo "$message";
                }
                else
                {
                    echo "No session message";
                }
                
                ?>
                </h2>                    
                <a href="<?php 
                    if(isset($_SESSION["Revert"]))
                    {
                        $message=$_SESSION["Revert"];
                        echo "$message";
                    }
                    else
                    {
                        echo "Unsuccessful.php";
                    }
                    ?>
                "><button type="Button" class="btn btn-large btn-success">Go Back</button></a>                     
            </div>
            <footer class="footer">
                <p>	&copy Sardar Patel Institute of Technology</p>
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
