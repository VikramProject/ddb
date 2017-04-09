<?php
/**
 * Created by PhpStorm.
 * User: anisasayed
 * Date: 01-04-2017
 * Time: 20:40
 */
include ("config.php");
if(!isset($_SESSION["rollno"]))
    header("location:index.php");
$rollno=$_SESSION["rollno"];
if ($rollno!=$admin)
    header("Location:student_home.php");
$start=$_GET["start"];
$end=$_GET["end"];
$setSql = "SELECT Sr_no,UID,Name,Age,Sex,Address,Category,Period,From_stn,To_stn,Class,Issued_date,DOB FROM report_dtb where sr_no BETWEEN '$start' and '$end'";
$setRec = mysqli_query($db_var, $setSql);

$columnHeader = '';
$columnHeader = "Sr NO" . "\t" . "UID" . "\t" . "Name" . "\t" . "Age" . "\t" . "Gender" . "\t" . "Address" . "\t" . "Category" . "\t" . "Period" . "\t" . "From" . "\t" . "To" . "\t" . "Class" . "\t" . "Issued" . "\t" . "Date 0f Birth" . "\t\n";

$setData = '';

while ($rec = mysqli_fetch_row($setRec)) {
    $rowData = '';
    foreach ($rec as $value) {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
}


header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader) . "\n" . $setData . "\n";