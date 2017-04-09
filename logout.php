<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 17-03-2017
 * Time: 23:55
 */
session_start();
$message = "Thank You . Successfully Logged Out";
echo "<script type='text/javascript'>alert('$message');</script>";
session_unset();
header("location:index.php");
exit();
