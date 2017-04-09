<?php
/**
 * Created by PhpStorm.
 * User: hertz
 * Date: 24/3/17
 * Time: 11:16 PM
 */
include("config.php");
if(!isset($_SESSION["rollno"]))
{
    header("location:index.php");
    exit();
}
$rollno=$_SESSION["rollno"];
if ($rollno!=$admin)
{
    header("Location:student_home.php");
    exit();
}

$searchTerm = $_GET['term'];

$query =$db_var->query("SELECT * FROM station WHERE station LIKE '%".$searchTerm."%' ORDER BY station ASC limit 0,5");

while ($row = $query->fetch_assoc()) {
    $data[]= $row['station'];
}
echo json_encode($data);
?>