<?php
include ("config.php");
include("nav_bar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awaiting Review</title>
</head>
<body>
    <p><?php
        if(isset($_SESSION["msgAwait"]))
        {
            $message=$_SESSION["msgAwait"];
            echo "<div style='margin-top: 20px; font-size: 20px'>$message</div>";
        }
        else
        {
            echo "No session message";
        }

        ?></p>
</body>
<script src="assets/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</html>