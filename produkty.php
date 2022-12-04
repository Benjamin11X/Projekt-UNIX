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

    <!-- SCRIPTS -->
    <script src="assets/scripts/filtr.js" defer></script>
    <title>UNIX</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <div class="container-fluid">
        <form class="filtr" method="post">
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="komputery_laptopy">
                    <label for="komputery_laptopy">Komputery i laptopy</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="komputery">
                            <label for="komputery">Komputery</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="laptopy">
                            <label for="laptopy">Laptopy</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="smartfony_smartwatche">
                    <label for="smartfony_smartwatche">Smartfony i smartwatche</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="smartfony">
                            <label for="smartfony">Smartfony</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="smartwatche">
                            <label for="smartwatche">Smartwatche</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="tablety">
                            <label for="tablety">Tablety</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="komórkowe">
                            <label for="komórkowe">Komórkowe</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="podzespoly_komputerowe">
                    <label for="podzespoly_komputerowe">Podzespoły komputerowe</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="procesory">
                            <label for="procesory">Procesory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="karty_graficzne">
                            <label for="karty_graficzne">Karty Graficzne</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="pamiec_ram">
                            <label for="pamiec_ram">Pamięć RAM</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="plyty_glowne">
                            <label for="plyty_glowne">Płyty Główne</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="dyski">
                            <label for="dyski">Dyski</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="obudowy">
                            <label for="obudowy">Obudowy</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="chlodzenie">
                            <label for="chlodzenie">Chłodzenie</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="zasilacze">
                            <label for="zasilacze">Zasilacze</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="urzadzenia_peryferyjne">
                    <label for="urzadzenia_peryferyjne">Urządzenia peryferyjne</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="drukarki">
                            <label for="drukarki">Drukarki</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="monitory">
                            <label for="monitory">Monitory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="mikrofony">
                            <label for="mikrofony">Mikrofony</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="tv_audio">
                    <label for="tv_audio">Urządzenia peryferyjne</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="telewizory">
                            <label for="telewizory">Telewizory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="audio">
                            <label for="audio">Audio</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" id="akcesoria">
                    <label for="akcesoria">Urządzenia peryferyjne</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" id="klawiatury">
                            <label for="klawiatury">Klawiatury</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="myszki">
                            <label for="myszki">Myszki</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" id="sluchawki">
                            <label for="sluchawki">Słuchawki</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <input type="submit" value="Filtruj" class="btn btn-dark">
        </form>
        <div class="container">

        </div>
    </div>
    
</body>
</html>