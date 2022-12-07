<?php
    session_start();
    include 'connect.php';
    $order_sql = "INSERT INTO zamowienie VALUES (DEFAULT,'" . $_SESSION['id'] . "','" . $_POST['deliveryMethod'] . "', '" . date("Y-m-d") . "' , '" . $_POST['sum'] . "','" . $_POST['paymentMethod'] . "')";
    $connection->query($order_sql);

    $orderInfo_sql = "SELECT id FROM zamowienie ORDER BY id DESC LIMIT 1";
    $orderInfo_result = $connection->query($orderInfo_sql);
    $lastId = $orderInfo_result->fetch_assoc();

    $productsId_sql = "SELECT product_id, quantity, price FROM cart WHERE client_id=". $_SESSION['id']."";
    $productsId_result = $connection->query($productsId_sql);

    while($row = $productsId_result->fetch_assoc()){
        $orderDetails_sql = "INSERT INTO order_details VALUES (DEFAULT, '" . $lastId['id'] ."','" . $row['product_id'] ."','" . $row['quantity'] . "','" . $row['price'] . "')";
        $connection->query($orderDetails_sql);
    }

    $deleteFromCart_sql = "DELETE FROM cart WHERE client_id=".$_SESSION['id']."";
    $connection->query($deleteFromCart_sql);

    header('location: order_succesfuly.php');
?>