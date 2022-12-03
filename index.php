<?php
    include 'connect.php';
    $bestsellers_sql = "SELECT name, price, picture_url FROM product ORDER BY sales DESC LIMIT 5";
    $bestsellers_result = $connection->query($bestsellers_sql);

    $discounts_sql = "SELECT name, discount, picture_url FROM product WHERE discount!=0 LIMIT 5";
    $discounts_result = $connection->query($discounts_sql);
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
    <?php
        include 'header.php';
    ?>

    <!-- BANNER SLIDER -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/Banner0.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/Banner1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- BESTSELLERS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="showcase__text d-flex justify-content-between">
            <h1>Bestsellery</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="showcase__products overflow-hidden d-flex">
            
                <?php 
                    while($row = $bestsellers_result->fetch_assoc()){
                        echo '<div class="showcase__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                            echo '<div class="showcase__products--product-img">';
                                echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                            echo '</div>';
                            echo '<div class="showcase__products--product-text">';
                                echo '<h4>' . $row['name'] . '</h4>';
                                echo '<p>' . $row['price'] . 'zł</p>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
        </div>  
        
    </div>

    <!-- PROMOTIONS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Promocje</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="showcase__products overflow-hidden d-flex">
                <?php 
                    while($row = $discounts_result->fetch_assoc()){
                        echo '<div class="showcase__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                            echo '<div class="showcase__products--product-img">';
                                echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                            echo '</div>';
                            echo '<div class="showcase__products--product-text">';
                                echo '<h4>' . $row['name'] . '</h4>';
                                echo '<p>' . $row['discount'] . 'zł</p>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
        </div>  
    </div>

    <!-- SUGGESTED -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Polecamy</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <!-- NEWS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Aktualności</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <!-- TUTORIALS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Poradniki</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <div class="newsletter container-lg my-5  w-100">
        <div class="newsletter--tab d-flex">
            <div class="newsletter--tab-text">
                <h1>Newsletter</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, a.</p>
                <form action="" method="post">
                    <input type="text" placeholder="Twój e-mail">
                </form>
            </div>
            <div class="footer__newsletter--tab-icon">
                <i class="fa-solid fa-envelope-open-text display-1"></i>
            </div>
        </div>
    </div>
    
    <footer class="container-fluid bg-gray">
        <div class="footer container">

            <div class="footer__links d-flex flex-wrap justify-content-evenly">
                <div class="footer__links--category d-flex flex-column m-4">
                    <p class="fw-bold fs-5">Zamówienia</p>
                    <a href="">Dostawa</a>
                    <a href="">Raty</a>
                    <a href="">Montaż</a>
                    <a href="">Zwroty i reklamacje</a>
                    <a href="">FAQ</a>
                </div>
                <div class="footer__links--category d-flex flex-column m-4">
                    <p class="fw-bold fs-5">Promocje</p>
                    <a href="">Wyprzedaż</a>
                    <a href="">Promocje</a>
                    <a href="">Karty Podarunkowe</a>
                </div>
                <div class="footer__links--category d-flex flex-column m-4">
                    <p class="fw-bold fs-5">UNIX</p>
                    <a href="">O nas</a>
                    <a href="">Regulamin</a>
                    <a href="">Polityka prywatności</a>
                    <a href="">Polityka cookies</a>
                    <a href="">Kontakt</a>
                    <a href="">Kariera</a>
                </div>
                <div class="footer__links--category d-flex flex-column m-4">
                    <p class="fw-bold fs-5">Kontakt</p>
                    <div class="d-flex">
                        <i class="fa-solid fa-phone"></i>
                        <p></p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-envelope"></i>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>