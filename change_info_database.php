<?php
/**
 * Created by PhpStorm.
 * User: nishanthuchil
 * Date: 04/04/17
 * Time: 4:41 PM
 */
include("config.php");
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $nearest = $_REQUEST["nearest"];
    $nearest=trim($nearest);
    $dob = $_REQUEST["dob"];
    $addr = $_REQUEST["addr"];
    $roll = $_REQUEST["roll"];

    $query = "update student set Name='$name', Email='$email', Address='$addr', DOB='$dob' where UID=$roll";
    $result = mysqli_query($db_var, $query) or die(mysql_error());
    $query = "update conc_dtb set Nearest_stn='$nearest' where UID=$roll";
    $result = mysqli_query($db_var, $query) or die(mysql_error());
    echo "Success";
