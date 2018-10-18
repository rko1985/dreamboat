<?php 


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dreamboat";

$connection = mysqli_connect($servername, $username, $password, $db_name);

if(!$connection) {
    die("Connection Failed " . mysqli_error($connection));
} 


?>