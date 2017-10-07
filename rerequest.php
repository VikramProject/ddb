<?php
/**
 * Created by PhpStorm.
 * User: zainahmeds
 * Date: 07/10/17
 * Time: 4:58 PM
 */
include ("config.php");
if(!isset($_SESSION["rollno"]))
{
    header("location:index.php");
    exit();
}
$rollno=$_SESSION["rollno"];
$query="select Status from conc_dtb where UID=$rollno";
$result=mysqli_query($db_var,$query) or die(mysqli_error());
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$status=$row["Status"];

if($status == "requested")
{
    $query="UPDATE conc_dtb SET Status='unlocked'  where UID=$rollno";
    $result=mysqli_query($db_var,$query) or die(mysqli_error());
    header("Location:student_home.php");
    exit();
}
else{
    $_SESSION["msgAwait"]="Some Error has occurred. Someone is trying something nasty!!!!";
    header("Location:await_results.php");
    exit();
}