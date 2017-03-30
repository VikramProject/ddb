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

    $query="select UID,Name,Age,Sex,Address,DOB,Nearest_stn,Class,Period,Issue_date from student join conc_dtb USING(UID) where UID=$record";
    $result=mysqli_query($db_var,$query) or die(mysql_error());
    $no_rows=mysqli_num_rows($result);
    if($no_rows==1){
        $obj = $result->fetch_object();
        echo"ok";
        //echo "$row[UID],$row[name],$row[Age],$row[Sex],$row[Address],$row[Nearest_stn],$row[class],$row[period],$row[issue_date],$row[DOB]";
    }
    else
        echo"hello";


    //$query="insert into report_dtb(UID,Name,Age,Sex,Address,From_stn,Class,Period,Issued_date,DOB) values($row[UID],$row[name],$row[Age],$row[Sex],$row[Address],$row[Nearest_stn],$row[Class],$row[Period],$row[Issue_date],$row[DOB])";
//$query="insert into report_dtb(UID,Name,Age,Sex,Address,From_stn,Class,Period,Issued_date,DOB) values('$row[UID]','$row[name]','$row[Age]','$row[Sex]','$row[Address]','$row[Nearest_stn]','$row[Class]','$row[Period]','$row[Issue_date]','$row[DOB]') ";
    $query="insert into report_dtb(UID,Name,Age,Sex,Address,From_stn,Class,Period,Issued_date,DOB) values('$obj->UID','$obj->Name','$obj->Age','$obj->Sex','$obj->Address','$obj->Nearest_stn','$obj->Class','$obj->Period','$obj->Issue_date','$obj->DOB') ";
    $result=mysqli_query($db_var,$query) or die (mysql_error());

}
else
{ echo "Query string not received";
}

