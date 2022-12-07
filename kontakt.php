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
    <title>UNIX - Kontakt</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- KONTENT -->
    <div class="kontakt container-lg">
        <h1>Kontakt</h1>
         <div class="kontakt__info container-fluid d-flex justify-content-evenly flex-wrap">
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-laptop fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Sklep internetowy</p>
                    </div>
                    
                    <p class="m-0">example_sklep@gmail.com</p>
                    <p class="m-0">+48 505 404 303</p>
                    <p class="m-0">Pon. - Pt.     10:00</p>
                    <p class="m-0">Sob. - Niedz.  18:00</p>
                </div>
            </div>
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-wrench fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Serwis</p>
                    </div>
                    
                    <p class="m-0">example_serwis@gmail.com</p>
                    <p class="m-0">+48 303 404 505</p>
                    <p class="m-0">Pon. - Pt.     10:00</p>
                    <p class="m-0">Sob. - Niedz.  18:00</p>
                </div>
            </div>
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-location-dot fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Adres siedziby</p>
                    </div>

                    <p class="m-0">Siedlce 08-110</p>
                    <p class="m-0">ul. Armii Krajowej 1</p>
                </div>
            </div>
        </div>

        <h4>Posiadasz pytanie na które nie jesteś w stanie uzyskać odpowiedzi?</h4>
        <h4>Zapraszamy do kontaktu poprzez formularz</h4>
        <form class="kontakt__form p-5" action="" method="post">
            <div class="form-group">
                <label for="imie" class="form-label">Imie</label>
                <input type="text" class="form-control" id="imie">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="temat" class="form-label">Temat</label>
                <input type="text" class="form-control" id="temat">
            </div>
            <div class="form-group">
                <label for="wiadomosc" class="form-label">Wiadomość</label>
                <textarea class="form-control" name="wiadomosc" id="wiadomosc" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="btn btn-dark">
            </div>
         </form>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>