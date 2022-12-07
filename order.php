<?php
    session_start();
    include 'connect.php';

    $productsInOrder_sql = "SELECT product.id, product.name, product.price, product.picture_url, cart.quantity FROM product INNER JOIN cart ON product.id = cart.product_id WHERE cart.client_id = " . $_SESSION['id'] . ""; 
    $productsInOrder_result = $connection->query($productsInOrder_sql);

    $paymentMethod_sql = "SELECT * FROM payment";
    $paymentMethod_result = $connection->query($paymentMethod_sql);

    $deliveryMethod_sql = "SELECT * FROM delivery";
    $deliveryMethod_result = $connection->query($deliveryMethod_sql);

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
    
    <title>UNIX</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'header.php'; ?>

    <!-- CONTENT -->
    <div class="container-fluid my-5">
        <div class="order container-lg d-flex">
            <div class="order__products d-flex flex-column">
                <?php
                    $sum = 0;
                    while(($row = $productsInOrder_result->fetch_assoc())){
                        echo '<div class="order__products--product my-4 w-100 d-flex flex-column flex-md-row">';
                            echo '<div class="order__products--product-image">';
                                echo '<img src="' . $row['picture_url'] . '" alt="">';
                            echo '</div>';
                            echo '<div class="order__products--product-content px-md-5 flex-grow-1">';
                                echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                                echo '<hr class="bg-danger border-1 border-top border-dark ">';
                                echo '<p>Ilość: ' . $row['quantity'] . '</p>';
                                echo '<p>Cena: ' . $row['price'] . 'zł</p>';
                                echo '<hr class="bg-danger border-1 border-top border-dark ">';
                                echo '<div class="d-flex justify-content-between">';
                                    echo '<p>Razem: ' . strval(intval($row['price']) * intval($row['quantity'])) . 'zł</p>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        $sum += (intval($row['price']) * intval($row['quantity']));
                        echo '<hr class="bg-danger border-2 border-top border-dark">';
                    }
                    
                ?>
            </div>
            <div class="order__summary">
                <!-- PHP -->
                <form method="post" action="order_release.php" class="cart__summary--content">
                    <label for="deliveryMethod my-1">Dostawa</label>
                    <select class="form-select mb-4" name="deliveryMethod">
                        <?php
                            while($row = $deliveryMethod_result->fetch_assoc()){
                                $temp = 0;
                                if($temp == 0){
                                    echo '<option value="' . $row['id'] . '" selected>' . $row['name'] .  " " . $row['price'] . 'zł</option>';
                                }
                                else{
                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                }
                                $temp++;
                            }
                        ?>
                    </select>

                    <label for="paymentMethod my-1">Płatność</label>
                    <select class="form-select mb-4" name="paymentMethod" id="paymentMethod">
                        <?php
                            while($row = $paymentMethod_result->fetch_assoc()){
                                $temp = 0;
                                if($temp == 0){
                                    echo '<option value="' . $row['id'] . '" selected>' . $row['method'] .'</option>';
                                }
                                else{
                                    echo '<option value="' . $row['id'] . '">' . $row['method'] . '</option>';
                                }
                                $temp++;
                            }
                        ?>
                    </select>
                    
                    <label for="sum">Razem:</label>
                    <input class="mb-4" type="text" name="sum" id="sum" value="<?php echo $sum; ?>" readonly>

                    <input type="submit" class="btn btn-success" value="Dokonaj zamówienia"></input>
                </form>
                <!-- END OF PHP -->
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>