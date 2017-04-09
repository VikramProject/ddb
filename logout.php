<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 17-03-2017
 * Time: 23:55
 */
include("config.php");
$message = "Thank You . Successfully Logged Out";
echo "<script type='text/javascript'>alert('$message');</script>";
session_unset();
header("location:index.php");
