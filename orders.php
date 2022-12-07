<?php
    session_start();
    include 'connect.php';
    $orders_sql = "SELECT zamowienie.id, zamowienie.data, zamowienie.kwota_zamowienia, delivery.name, payment.method FROM ((zamowienie INNER JOIN delivery ON zamowienie.delivery_id = delivery.id) INNER JOIN payment ON zamowienie.payment_id = payment.id) WHERE client_id=" . $_SESSION['id'] . "";
    $orders_result = $connection->query($orders_sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/c2d11256b6.js" crossorigin="anonymous" defer></script>

    <!-- IMPORTING STYLES -->
    <link rel="stylesheet" href="assets/styles/style.css">

    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'header.php'; ?>

    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="container-lg orderShowcase">
            <?php
                while($row = $orders_result->fetch_assoc()){
                    echo '<div class="orderShowcase__order container-fluid">';
                        echo '<div class="d-flex justify-content-between">';
                            echo '<p>Id: ' . $row['id'] . '</p>';
                            echo '<p>Data zamówienia: ' . $row['data'] . '</p>';
                        echo '</div>';
                        echo '<p>Sposób dostawy: ' . $row['name'] . '</p>';
                        echo '<p>Rodzaj płatności: ' . $row['method'] . '</p>';
                        $orderDetails_sql = "SELECT order_details.order_id, product.name, product.picture_url, order_details.quantity, order_details.price FROM order_details INNER JOIN product ON order_details.produkt_id = product.id WHERE order_details.order_id=" . $row['id'] . "";
                        $orderDetails_result = $connection->query($orderDetails_sql);
                        while($row1 = $orderDetails_result->fetch_assoc()){
                            echo '<div class="orderShowcase__order--details d-flex">';
                                echo '<div class="orderShowcase__order--details-image">';
                                    echo '<img src='. $row1['picture_url'] .'>';
                                echo '</div>';
                                echo '<div class="orderShowcase__order--details-info">';
                                    echo '<a href="#">' . $row1['name'] . '</a>';
                                    echo '<p>Ilość: ' . $row1['quantity'] . '</p>';
                                    echo '<p>Cena: ' . $row1['price'] . '</p>';
                                echo '</div>';
                            echo '</div>';
                        }
                    echo '</div>';
                    echo '<hr class="bg-danger border-2 border-top border-dark">';
                }
            ?>
        </div>
    </div>

    <!-- FOOTER -->    
    <?php include 'footer.php'; ?>
</body>
</html>