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
        if(isset($_SESSION["msg"]))
        {
            $message=$_SESSION["msg"];
            echo "$message";
        }
        else
        {
            echo "No session message";
        }

        ?></p>
</body>
</html>