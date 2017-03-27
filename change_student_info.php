<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 21-03-2017
 * Time: 15:05
 */
include("config.php");

    $rollno = $_REQUEST["roll"];
    //$name = $_REQUEST["name"];
    $near = $_REQUEST["near"];
    //$email = $_REQUEST["email"];
    $class = $_REQUEST["classn"];
    $period = $_REQUEST["period"];
    //$query="UPDATE student SET Name='$name',Email='$email' WHERE UID='$rollno'";
    //$result=mysqli_query($db_var,$query) or die(mysql_error());
    $qu="update conc_dtb set Nearest_stn = '$near', Class='$class',Period='$period' where UID='$rollno'";
    $result=mysqli_query($db_var,$qu) or die(mysql_error());
    echo $period;


