<?php
    session_start();
    include 'connect.php';

    $product_sql = "SELECT * FROM product WHERE id=" . $_GET['id'] . "";

    $product_result = $connection->query($product_sql);

    $product = $product_result->fetch_assoc();

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

    <title>Produkt</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="container-fluid my-5">
        <div class="container-lg d-flex">
            <div class="produkt container-fluid d-flex">
                <div class="produkt__sliderContainer">
                    <div class="produkt__sliderContainer--image">
                        <?php echo '<img src="' . $product['picture_url'] . '" alt="">'; ?>
                    </div>
                </div>
                <div class="produkt__info">
                    <?php echo '<h3>' . $product['name'] . '</h3>'; ?>
                    <div class="produkt__info--price d-flex flex-column align-items-center">
                        <div class="produkt__info--price-details d-flex w-100">
                            <?php echo '<p>ID: ' . $product['id'] . '</p>'; ?>
                            <?php echo '<p>Sprzedana ilość: ' . $product['sales'] . ' </p>'; ?>
                        </div>
                        <?php echo '<h4 class="w-100"> ' . $product['price'] . 'zł</h4>'; ?>
                        <?php
                            if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                                $cart = "cart.php?id=".$product['id']."&price=" . $product['price'] . "";
                            }else{
                                $cart = "login.php?zalogowany=0";
                            }
                        ?>
                        <form class="produkt__info--price-addToCart d-flex w-100" action="<?php echo $cart; ?>" method="post">
                            <select name="quantity" class="form-select">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="9">10</option>
                            </select>
                            <button type="submit" class="btn btn-success">Dodaj do koszyka</button>
                        </form>
                        <hr class="bg-danger border-2 border-top border-dark w-75">
                        <div class="produkt__info--price-addToCart-desc">
                            <h5>Lorem ipsum</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, esse.</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>