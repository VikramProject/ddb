<?php
session_start();
$message = "Thank You . Successfully Logged Out";
echo "<script type='text/javascript'>alert('$message');</script>";
session_unset();
header("location:index.php");
exit();
