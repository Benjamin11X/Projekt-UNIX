<?php
    session_start();
    include 'connect.php';

    $searchProducts_sql = "SELECT id, name, price, discount, picture_url FROM product";
    $subkategorie = array("laptopy","komputery",
        "smartfony","smartwatche","tablety","komorkowe","procesory",
        "karty_graficzne","pamiec_ram","plyty_glowne","dyski","obudowy",
        "chlodzenie","zasilacze","drukarki","monitory","mikrofony",
        "telewizory","audio","klawiatury","myszki","sluchawki");
    if(isset($_POST['submit'])){
        $filtrs_filtr = array();
        for ($i = 0; $i < count($subkategorie); $i++){
            if(isset($_POST[$subkategorie[$i]])){
                array_push($filtrs_filtr, strval($i+1));
            }
        }

        $x = 0;
        foreach($filtrs_filtr as $val){
            $x++;
            if($x == 1 && count($filtrs_filtr)==1){
                $searchProducts_sql .= " WHERE (subcategory_id=" . $val . ") ";
            }
            else if($x == 1){
                $searchProducts_sql .= " WHERE (subcategory_id=" . $val . " OR ";
            }
            else if(count($filtrs_filtr)>$x){
                $searchProducts_sql .= "subcategory_id=" . $val . " OR ";
            }else{
                $searchProducts_sql .= "subcategory_id=" . $val . ") ";
            }
        }

        if((isset($_POST['min']) || isset($_POST['max'])) && strpos($searchProducts_sql, "subcategory_id") != NULL){
            if(isset($_POST['min']) && isset($_POST['max']) && $_POST['min']!=NULL && $_POST['max']!=NULL){
                $searchProducts_sql .= " AND (price>" . $_POST['min'] . " AND price<" . $_POST['max'] . ")";
            }
            else if(isset($_POST['max']) && $_POST['max']!=NULL){
                $searchProducts_sql .= " AND price<" . $_POST['max'] . "";
            }
            else if(isset($_POST['min']) && $_POST['min']!=NULL){
                $searchProducts_sql .= " AND price>" . $_POST['min'] . "";
            }
        }
        else if((isset($_POST['min']) || isset($_POST['max']))){
            if(isset($_POST['min']) && isset($_POST['max']) && $_POST['min']!=NULL && $_POST['max']!=NULL){
                $searchProducts_sql .= " WHERE (price>" . $_POST['min'] . " AND price<" . $_POST['max'] . ")";
            }
            else if(isset($_POST['max']) && $_POST['max']!=NULL){
                $searchProducts_sql .= " WHERE price<" . $_POST['max'] . "";
            }
            else if(isset($_POST['min']) && $_POST['min']!=NULL){
                $searchProducts_sql .= " WHERE price>" . $_POST['min'] . "";
            }
        }
        $searchProducts_result = $connection->query($searchProducts_sql);
    }else if($_GET['kategoria']){
        $searchProducts_sql .= " WHERE subcategory_id=" . $_GET['kategoria'];

        $searchProducts_result = $connection->query($searchProducts_sql);
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
        <div class="container-lg">
            <div class="container-fluid filtrbar">
                <form class="filtrbar__filtr d-flex flex-column-reverse my-4" method="post">
                <div class="filtrbar__filtr--priceAndDisplay container-fluid d-flex">
                    <div class="filtrbar__filtr--priceAndDisplay-price">
                        <div>
                            <label for="min">Cena minimalna</label>
                            <input type="number" name="min" id="min">
                        </div>
                        <div>
                            <label for="max">Cena maksymalna</label>
                            <input type="number" name="max" id="max">
                        </div>
                    </div>
                    <div class="filtrbar__filtr--priceAndDisplay-display">
                        <label for="count">Wyswietlane produkty: </label>
                        <select class="form-select" name="count" id="count">
                            <option selected>Wybierz ilo????</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                        </select>
                    </div>
                </div>
                <div class="container-fluid d-flex flex-wrap  mt-4">
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="komputery_laptopy" value="1" id="komputery_laptopy">
                            <label for="komputery_laptopy">Komputery i laptopy</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="smartfony_smartwatche" value="2" id="smartfony_smartwatche">
                            <label for="smartfony_smartwatche">Smartfony i smartwatche</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                                    <label for="komorkowe">Kom??rkowe</label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="podzespoly_komputerowe" value="3" id="podzespoly_komputerowe">
                            <label for="podzespoly_komputerowe">Podzespo??y komputerowe</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                                    <label for="pamiec_ram">Pami???? RAM</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="form-check-input" name="plyty_glowne" value="plyty_glowne" id="plyty_glowne">
                                    <label for="plyty_glowne">P??yty G????wne</label>
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
                                    <label for="chlodzenie">Ch??odzenie</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="form-check-input" name="zasilacze" value="zasilacze" id="zasilacze">
                                    <label for="zasilacze">Zasilacze</label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="urzadzenia_peryferyjne" value="4" id="urzadzenia_peryferyjne">
                            <label for="urzadzenia_peryferyjne">Urz??dzenia peryferyjne</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="tv_audio" value="5" id="tv_audio">
                            <label for="tv_audio">TV i Audio</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                    <ul class="filtrbar__filtr__kategoria mb-1">
                        <li>
                            <input type="checkbox" class="form-check-input" name="akcesoria" value="6" id="akcesoria">
                            <label for="akcesoria">Akcesoria</label>
                            <ul class="filtrbar__filtr__kategoria--expandList">
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
                                    <label for="sluchawki">S??uchawki</label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="container-fluid d-flex w-100">
                    <input type="submit" name="submit" value="Filtruj" class="btn btn-dark w-100">
                </div>
                
            </form>
        </div>
        <div class="container-lg">
            <div class="produkty container-fluid d-flex flex-wrap justify-content-between">
                        <!-- WY??WIETLENIE PRODUKT??W -->
                        
                    <?php
                    $x = 0;
                    while($row = $searchProducts_result->fetch_assoc()){
                        if(isset($_POST['count']) && $_POST['count']==NULL){
                            if($x == $_POST['count']){
                                break;
                            }
                        }
                        $polubione = false;
                        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                            $polubione_sql = "SELECT produkt_id FROM polubione WHERE produkt_id=" . $row['id'] . " AND user_id=" . $_SESSION['id'] . "";
                            $polubione_result = $connection->query($polubione_sql);
                            if($polubione_result->fetch_assoc()){
                                $polubione = true;
                            }
                        }
                        echo '<div class="produkty__products--product d-flex flex-column justify-space-between my-3 mx-2">';
                            echo '<div class="produkty__products--product-img d-flex justify-content-center align-items-center">';
                                echo '<img src="' . $row['picture_url'] . '" alt="' . $row["name"] . '">';
                            echo '</div>';
                            echo '<div class="produkty__products--product-text d-flex flex-column justify-content-end">';
                                echo '<div class="produkty__products--product-text-name">';
                                    echo '<a href="produkt.php?id=' . $row['id'] . '">' . $row['name'] . '</a>';
                                echo '</div>';
                                echo '<div class="produkty__products--product-text-priceAndLinks d-flex justify-content-between align-items-center">';
                                    if($row['discount']!=0){
                                        echo '<div class="d-flex align-items-center">';
                                            echo '<del class="me-2">'. $row['price'] .'z??</del>';
                                            echo '<p>' . $row['discount'] .'z??</p>';
                                        echo '</div>';
                                    }
                                    else{
                                        echo '<p>' . $row['price'] .'z??</p>';
                                    }
                                    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                                        if($polubione){
                                            echo '<a class="btn btn-success" href="odpolubienie.php?id=' . $row['id'] .'"><i class="fa-solid fa-heart"></i></a>';
                                        }
                                        else{
                                            echo '<a class="btn btn-success" href="polubienie.php?id=' . $row['id'] .'"><i class="fa-regular fa-heart"></i></a>';
                                        }
                                    }
                                    else{
                                        echo '<a class="btn btn-success" href="login.php"><i class="fa-regular fa-heart"></i></a>';
                                    }
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        $x++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>