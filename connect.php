<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "sklep";


$connection = new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
