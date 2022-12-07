<?php
    include 'connect.php';
    session_start();
    $deleteFromCart_sql = "DELETE FROM cart WHERE id=" . $_GET['id'] . "";
    $connection->query($deleteFromCart_sql);
    header('Location: cart.php');
?>