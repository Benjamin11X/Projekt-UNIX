<?php
    session_start();
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
    <div class="conteiner-fluid">
        <div class="menagment container-lg d-flex justify-content-evenly flex-wrap my-5">
            <div class="menagment__tab d-flex flex-column justify-content-between m-5">
                <h5>Zarządzanie produktami</h5>
                <a class="btn btn-primary w-50" href="product_menagment.php">Zarządzaj</a>
            </div>
            <div class="menagment__tab d-flex flex-column justify-content-between  m-5">
                <h5>Zarządzanie użytkownikami</h5>
                <a class="btn btn-primary w-50" href="user_menagment.php">Zarządzaj</a>
            </div>
            <div class="menagment__tab d-flex flex-column justify-content-between m-5">
                <h5>Zarządzanie zamowieniami</h5>
                <a class="btn btn-primary w-50" href="order_menagment.php">Zarządzaj</a>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>