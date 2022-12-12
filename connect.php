<?php
$host = "mysql.ct8.pl";
$db_user = "m31366_kondas";
$db_password = "Kondas!!321";
$db_name = "m31366_unix";


$connection = new mysqli($host, $db_user, $db_password, $db_name);

if ($connection->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
