<?php
    if(isset($_POST['submit'])){
        $kategorie_subkategorie = array(
            array("komputery","laptopy"),
            array("smartfony","smartwatche","tablety","komorkowe"),
            array("procesory","karty_graficzne","pamiec_ram","plyty_glowne","dyski","obudowy","chlodzenie","zasilacze"),
            array("drukarki","monitory","mikrofony"),
            array("telewizory","audio"),
            array("klawiatury","myszki","sluchawki")
        );

        $searchProducts_sql = "";
        $filtrs = array();
        for($i = 0; $i<6; $i++){
            if($i == 0){
                if(isset($_POST['komputery_laptopy'])){
                    array_push($filtrs, "1");
                    continue;
                }
            }
            if($i == 1){
                if(isset($_POST['smartfony_smartwatche'])){
                    echo "smartfony_smartwatche <br>";
                    array_push($filtrs, "2");
                    continue;
                }
            }
            if($i == 2){
                if(isset($_POST['podzespoly_komputerowe'])){
                    echo "podzespoly_komputerowe <br>";
                    array_push($filtrs, "3");
                    continue;
                }
            }
            if($i == 3){
                if(isset($_POST['urzadzenia_peryferyjne'])){
                    echo "urzadzenia_peryferyjne <br>";
                    array_push($filtrs, "4");
                    continue;
                }
            }
            if($i == 4){
                if(isset($_POST['tv_audio'])){
                    echo "tv_audio <br>";
                    array_push($filtrs, "5");
                    continue;
                }
            }
            if($i == 5){
                if(isset($_POST['akcesoria'])){
                    echo "akcesoria <br>";
                    array_push($filtrs, "6");
                    continue;
                }
            }
            for($j = 0; $j < count($kategorie_subkategorie[$i]); $j++){
                if(isset($_POST[$kategorie_subkategorie[$i][$j]])){
                    array_push($filtrs, $kategorie_subkategorie[$i][$j]);
                }
            }
        }

        // TU BĘDZIE SKLEJANY STRING W JEDNĄ KOMENDE SQL
    }
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

    <!-- SCRIPTS -->
    <script src="assets/scripts/filtr.js" defer></script>
    <title>UNIX</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <!-- FILTR BAR -->
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-2">
            <form class="filtr" method="post">
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="komputery_laptopy" value="1" id="komputery_laptopy">
                    <label for="komputery_laptopy">Komputery i laptopy</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="komputery" value="komputery" id="komputery">
                            <label for="komputery">Komputery</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="laptopy" value="laptopy" id="laptopy">
                            <label for="laptopy">Laptopy</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="smartfony_smartwatche" value="2" id="smartfony_smartwatche">
                    <label for="smartfony_smartwatche">Smartfony i smartwatche</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="smartfony" value="smartfony" id="smartfony">
                            <label for="smartfony">Smartfony</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="smartwatche" value="smartwatche" id="smartwatche">
                            <label for="smartwatche">Smartwatche</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="tablety" value="tablety" id="tablety">
                            <label for="tablety">Tablety</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="komorkowe" value="komorkowe" id="komorkowe">
                            <label for="komorkowe">Komórkowe</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="podzespoly_komputerowe" value="3" id="podzespoly_komputerowe">
                    <label for="podzespoly_komputerowe">Podzespoły komputerowe</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="procesory" value="procesory" id="procesory">
                            <label for="procesory">Procesory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="karty_graficzne" value="karty_graficzne" id="karty_graficzne">
                            <label for="karty_graficzne">Karty Graficzne</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="pamiec_ram" value="pamiec_ram" id="pamiec_ram">
                            <label for="pamiec_ram">Pamięć RAM</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="plyty_glowne" value="plyty_glowne" id="plyty_glowne">
                            <label for="plyty_glowne">Płyty Główne</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="dyski" value="dyski" id="dyski">
                            <label for="dyski">Dyski</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="obudowy" value="obudowy" id="obudowy">
                            <label for="obudowy">Obudowy</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="chlodzenie" value="chlodzenie" id="chlodzenie">
                            <label for="chlodzenie">Chłodzenie</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="zasilacze" value="zasilacze" id="zasilacze">
                            <label for="zasilacze">Zasilacze</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="urzadzenia_peryferyjne" value="4" id="urzadzenia_peryferyjne">
                    <label for="urzadzenia_peryferyjne">Urządzenia peryferyjne</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="drukarki" value="drukarki" id="drukarki">
                            <label for="drukarki">Drukarki</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="monitory" value="monitory" id="monitory">
                            <label for="monitory">Monitory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="mikrofony" value="mikrofony" id="mikrofony">
                            <label for="mikrofony">Mikrofony</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="tv_audio" value="5" id="tv_audio">
                    <label for="tv_audio">TV i Audio</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="telewizory" value="telewizory" id="telewizory">
                            <label for="telewizory">Telewizory</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="audio" value="audio" id="audio">
                            <label for="audio">Audio</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="filtr__kategoria mb-1">
                <li>
                    <input type="checkbox" class="form-check-input" name="akcesoria" value="6" id="akcesoria">
                    <label for="akcesoria">Akcesoria</label>
                    <ul class="filtr__kategoria--expandList">
                        <li>
                            <input type="checkbox" class="form-check-input" name="klawiatury" value="klawiatury" id="klawiatury">
                            <label for="klawiatury">Klawiatury</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="myszki" value="myszki" id="myszki">
                            <label for="myszki">Myszki</label>
                        </li>
                        <li>
                            <input type="checkbox" class="form-check-input" name="myszki" value="myszki" id="sluchawki">
                            <label for="sluchawki">Słuchawki</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <input type="submit" name="submit" value="Filtruj" class="btn btn-dark">
        </form>
        </div>
            <div class="col-8 p-0">
            <!-- WYŚWIETLENIE PRODUKTÓW -->
            <div class="container-fluid produkty d-flex flex-wrap w-100 p-0">
                <div class="produkty__kartaProduktu d-flex flex-column align-items-center justify-content-between">
                    <div class="produkty__kartaProduktu--image d-flex align-items-center justify-content-center">
                        <img src="assets/images/KartyGraficzne/1/1.webp" alt="">
                    </div>
                    <div class="produkty__kartaProduktu--text w-100">
                        <a href="#">Lorem ipsum</a>
                        <p>100zł</p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-2">

            </div>
        </div>
        
        
    </div>
    
</body>
</html>