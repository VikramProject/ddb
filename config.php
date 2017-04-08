<?php
 //Currency Character or code
session_start();
$db_username = 'root';
$db_password = '';
$db_name = 'railway concession';
$db_host = 'localhost';						
//connect to MySql						
$db_var = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($db_var->connect_error) {
    die('Error : ('. $db_var->connect_errno .') '. $db_var->connect_error);
}
?>
<head>
    <style>
        body {
            background: url("images/local.jpg") no-repeat;
            background-color: #cccccc;
            background-size: cover;
        }
        .jumbotron {

            background-size: cover;
            opacity: 0.9;
    </style>
</head>