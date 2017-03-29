<?php
/**
 * Created by PhpStorm.
 * User: hertz
 * Date: 24/3/17
 * Time: 11:16 PM
 */
include("config.php");

$searchTerm = $_GET['term'];

$query =$db_var->query("SELECT * FROM stations WHERE station LIKE '%".$searchTerm."%' ORDER BY station ASC limit 0,5");

while ($row = $query->fetch_assoc()) {
    $data[]= $row['station'];
}
echo json_encode($data);
?>