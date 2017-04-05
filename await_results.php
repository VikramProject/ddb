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
</html>