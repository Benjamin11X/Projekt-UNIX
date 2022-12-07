<?php
    session_start();
    include 'connect.php';
    $bestsellers_sql = "SELECT id, name, discount ,price, picture_url FROM product ORDER BY sales DESC LIMIT 5";
    $bestsellers_result = $connection->query($bestsellers_sql);

    $discounts_sql = "SELECT id, name, price, discount, picture_url FROM product WHERE discount!=0 LIMIT 5";
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
        <div class="showcase__text d-flex justify-content-between align-items-center">
            <h1>Bestsellery</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="showcase__products d-flex">
                <?php 
                    while($row = $bestsellers_result->fetch_assoc()){
                        $polubione = false;
                        $polubione_sql = "SELECT produkt_id FROM polubione WHERE produkt_id=" . $row['id'] . " AND user_id=" . $_SESSION['id'] . "";
                        $polubione_result = $connection->query($polubione_sql);
                        if($polubione_result->fetch_assoc()){
                            $polubione = true;
                        }
                        echo '<div class="showcase__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                            echo '<div class="showcase__products--product-img d-flex justify-content-center align-items-center">';
                                echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                            echo '</div>';
                            echo '<div class="showcase__products--product-text d-flex flex-column justify-content-end">';
                                echo '<div class="showcase__products--product-text-name">';
                                    echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                                echo '</div>';
                                echo '<div class="showcase__products--product-text-priceAndLinks d-flex justify-content-between align-items-center">';
                                    echo '<p>' . $row['price'] . 'zł</p>';
                                    if($polubione){
                                        echo '<a class="btn btn-success" href="odpolubienie.php?id=' . $row['id'] .'"><i class="fa-solid fa-heart"></i></a>';
                                    }
                                    else{
                                        echo '<a class="btn btn-success" href="polubienie.php?id=' . $row['id'] .'"><i class="fa-regular fa-heart"></i></a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        
                    }
                    
                ?>
        </div>  
        
    </div>

    <!-- PROMOTIONS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="showcase__text d-flex justify-content-between align-items-center">
            <h1>Promocje</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="showcase__products d-flex">
                <?php 
                    while($row = $discounts_result->fetch_assoc()){
                        $polubione = false;
                        $polubione_sql = "SELECT produkt_id FROM polubione WHERE produkt_id=" . $row['id'] . " AND user_id=" . $_SESSION['id'] . "";
                        $polubione_result = $connection->query($polubione_sql);
                        if($polubione_result->fetch_assoc()){
                            $polubione = true;
                        }
                        echo '<div class="showcase__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                            echo '<div class="showcase__products--product-img d-flex justify-content-center align-items-center">';
                                echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                            echo '</div>';
                            echo '<div class="showcase__products--product-text d-flex flex-column justify-content-end">';
                                echo '<div class="showcase__products--product-text-name">';
                                    echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                                echo '</div>';
                                echo '<div class="showcase__products--product-text-priceAndLinks d-flex justify-content-between align-items-center">';
                                    echo '<p>' . $row['discount'] . 'zł</p>';
                                    if($polubione){
                                        echo '<a class="btn btn-success" href="odpolubienie.php?id=' . $row['id'] .'"><i class="fa-solid fa-heart"></i></a>';
                                    }
                                    else{
                                        echo '<a class="btn btn-success" href="polubienie.php?id=' . $row['id'] .'"><i class="fa-regular fa-heart"></i></a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
        </div>  
    </div>

    <!-- NEWS -->
    <div class="container showcase">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="showcase__text d-flex justify-content-between align-items-center">
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
        <div class="showcase__text d-flex justify-content-between align-items-center">
            <h1>Poradniki</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="showcase__products d-flex">
            <?php 
                while($row = $discounts_result->fetch_assoc()){
                    echo '<div class="showcase__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                        echo '<div class="showcase__products--product-img d-flex justify-content-center align-items-center">';
                            echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                        echo '</div>';
                        echo '<div class="showcase__products--product-text d-flex flex-column justify-content-end">';
                            echo '<div class="showcase__products--product-text-name">';
                                echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                            echo '</div>';
                            echo '<div class="showcase__products--product-text-priceAndLinks d-flex justify-content-between align-items-center">';
                                echo '<p>' . $row['discount'] . 'zł</p>';
                                echo '<a class="btn btn-success" href="polubienie.php?id=' . $row['id'] .'"><i class="fa-regular fa-heart"></i></a>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
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
            <div class="newsletter--tab-icon">
                <i class="fa-solid fa-envelope-open-text display-1"></i>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
</body>
</html>