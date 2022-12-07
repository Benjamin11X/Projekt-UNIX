<?php
    include 'connect.php';
    session_start();
    $removeFromPolubione_sql = "DELETE FROM polubione WHERE user_id=" . $_SESSION['id'] . " AND produkt_id=" . $_GET['id'] . "";
    $connection->query($removeFromPolubione_sql);
    header("Location: index.php");
?>