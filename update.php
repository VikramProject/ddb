<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 21-03-2017
 * Time: 15:05
 */
include("config.php");
if(isset($_REQUEST["q"])){
$record = $_REQUEST["q"];
$query="update conc_dtb set Status='locked' where UID=$record";
$result=mysqli_query($db_var,$query) or die(mysql_error());
$query="Insert into report_dtb() (select Name,Email,Age,Sex,Address,DOB,Nearest_stn,class,period,issue_date,expiry_date from student natural join conc_dtb where UID=$record)";
$result=mysqli_query($db_var,$query) or die (mysql_error());
echo "query string received";}
else
{ echo "query string not received";
}

