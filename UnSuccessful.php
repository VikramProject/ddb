<?php
include('config.php');
include('nav_bar.php');
?>
<!--unsuccessful message-->
<div class="jumbotron unsucessful">
    <h2 class="text-center">
        <?php 
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
                    if(isset($_SESSION[" Revert "]))
                    {
                        $message=$_SESSION["Revert "];
                        echo "$message ";
                    }
                    else
                    {
                        echo "Unsuccessful.php ";
                    }
                    ?>
                "><button type="button" class="btn btn-primary btn-large btn-block">Go Back</button>
                </a>
</div>
</div>
<!-- container ends -->

<!--footer-->
<footer class="footer">
    <p class="copyright">&copy Sardar Patel Institute of Technology,Andheri</p>
</footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<link href="assets1/css/index.css" rel="stylesheet" />

</body>

</html>