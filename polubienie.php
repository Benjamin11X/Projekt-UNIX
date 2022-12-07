<?php
    include 'connect.php';
    session_start();
    $addToPolubione_sql = "INSERT INTO polubione VALUES (DEFAULT, '" . $_SESSION['id'] . "','" . $_GET['id'] . "')";
    $connection->query($addToPolubione_sql);
    header("Location: index.php");
?>