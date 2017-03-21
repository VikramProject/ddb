<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 21-03-2017
 * Time: 15:05
 */
include("config.php");
$record = $_GET['action'];
$query="update from conc_dtb set Status='locked' where UID=$record";
$result=mysqli_query($db_var,$query) or die(mysql_error());

?>