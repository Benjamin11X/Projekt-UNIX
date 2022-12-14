<?php
    session_start();
    include 'connect.php';

    
    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $client_id = $_SESSION['id'];
        $product_quantity = $_POST['quantity'];
        $price = $_GET['price'];

        $final_price = intval($price) * intval($product_quantity);
        $addToCart_sql = "INSERT INTO cart VALUES (DEFAULT,'" . $client_id . "','" . $product_id . "','" . $product_quantity . "','" . strval($final_price) . "')";

        $connection->query($addToCart_sql);

        
    }

    $cart_sql = "SELECT product.id, product.name, product.price, product.picture_url, cart.quantity FROM product INNER JOIN cart ON product.id = cart.product_id WHERE cart.client_id = " . $_SESSION['id'] . ""; 
    $cart_result = $connection->query($cart_sql);

    $productsInCart_sql = "SELECT id FROM cart WHERE client_id=" . $_SESSION['id'] . "";
    $productsInCart_result = $connection->query($productsInCart_sql);

    $isSomethingIn_sql = "SELECT COUNT(id) FROM cart WHERE client_id=" . $_SESSION['id']. "";
    $isSomethingIn_result = $connection->query($isSomethingIn_sql);
    $isSomethingIn = $isSomethingIn_result->fetch_assoc();

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

    <title>UNIX - Zarejestruj si??</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'header.php'; ?>

    <!-- CONTENT -->
    <div class="container-fluid my-5">
        <div class="cart container-lg d-flex flex-column">
            <div class="cart__products container-fluid d-flex flex-column">
                <?php
                    $sum = 0;
                    while(($row = $cart_result->fetch_assoc()) && ($row1 = $productsInCart_result->fetch_assoc())){
                        echo '<div class="cart__products--product my-4 w-100 d-flex flex-column flex-md-row">';
                            echo '<div class="cart__products--product-image">';
                                echo '<img src="' . $row['picture_url'] . '" alt="">';
                            echo '</div>';
                            echo '<div class="cart__products--product-content px-md-5 flex-grow-1">';
                                echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                                echo '<hr class="bg-danger border-1 border-top border-dark ">';
                                echo '<p>Ilo????: ' . $row['quantity'] . '</p>';
                                echo '<p>Cena: ' . $row['price'] . 'z??</p>';
                                echo '<hr class="bg-danger border-1 border-top border-dark ">';
                                echo '<div class="d-flex justify-content-between">';
                                    echo '<p>Razem: ' . strval(intval($row['price']) * intval($row['quantity'])) . 'z??</p>';
                                    echo '<a class="btn btn-danger" href="deleteProductFromCart.php?id='. $row1['id'] .'">Usu??</a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        $sum += (intval($row['price']) * intval($row['quantity']));
                        echo '<hr class="bg-danger border-2 border-top border-dark">';
                    }
                    
                ?>
            </div>
            <div class="cart__summary container-fluid">
                <!-- PHP -->
                <div class="cart__summary--content">
                    <?php
                        if($isSomethingIn['COUNT(id)']==0){
                            echo '<p>Koszyk jest pusty</p>';
                        }
                        else{
                            echo '<p>Razem: ' . $sum .'z??</p>';
                            echo '<a href="order.php" class="btn btn-success">Zamawiam i p??ace</a>';
                        }
                    ?>
                    <?php  ?>
                    
                </div>
                <!-- END OF PHP -->
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>