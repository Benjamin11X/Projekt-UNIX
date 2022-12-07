<?php
    include 'connect.php';
    session_start();

    $polubione_sql = "SELECT polubione.produkt_id, polubione.id, product.name, product.price, product.discount , product.picture_url FROM polubione INNER JOIN product ON polubione.produkt_id = product.id WHERE polubione.user_id=". $_SESSION['id'] ."";
    $polubione_result = $connection->query($polubione_sql);

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
    <div class="conteiner-flud">
        <div class="container-lg polubione d-flex flex-column">
            <?php
                while($row = $polubione_result->fetch_assoc()){
                    echo '<div class="polubione__product d-flex flex-column flex-md-row">';
                        echo '<div class="polubione__product--image d-flex justify-content-center align-items-center">';
                            echo '<img src='.$row['picture_url'].'>';
                        echo '</div>';
                        echo '<div class="polubione__product--info d-flex flex-column justify-content-between">';
                            echo '<a href="produkt.php?id=' . $row['produkt_id'] . '">' . $row['name'] . '</a>';
                            echo '<div class="polubione__product--info-price d-flex align-items-center">';
                            if($row['discount']!=0){
                                echo '<del>'. $row['price'] .'zł</del>';
                                echo '<p>' . $row['discount'] .'zł</p>';
                            }
                            else{
                                echo '<p>' . $row['price'] .'zł</p>';
                            }
                            echo '</div>';
                        echo '</div>';
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