<?php
    session_start();
    include 'connect.php';

    $products_sql = "SELECT id, name FROM product";
    $products_result = $connection->query($products_sql);

    $kategoria_sql = "SELECT id, subcategory_name FROM subcategory";
    $kategoria_result = $connection->query($kategoria_sql);

    if(isset($_POST['edit_button'])){
        header('Location: product_menagment.php?id=0&prod='.$_POST['product'].'');
    }
    else if(isset($_POST['add_button'])){
        header('Location: product_menagment.php?id=1');
    }
    else if(isset($_POST['del_button'])){
        // USUWANIE PRODUKTU
        $product_del_sql = "DELETE FROM product WHERE id=" . $_GET['prod'] . "";
        $connection->query($product_del_sql);
        header('Location: product_menagment.php');
    }
    else if(isset($_POST['exit_button'])){
        header('Location: index.php');
    }
    else if(isset($_POST['add_product'])){
        // DODAWANIE PRODUKTU
        if(empty($_POST['name']) || empty($_POST['desc']) || empty($_POST['price']) || empty($_FILES['photos'])){
            if(empty($_POST['name'])){
                echo "Podaj nazwe produktu <br>";
            }
            if(empty($_POST['desc'])){
                echo "Podaj opis produktu <br>";
            }
            if(empty($_POST['price'])){
                echo "Podaj opis produktu <br>";
            }
            if(empty($_POST['photos'])){
                echo "Podaj zdjecia produktu <br>";
            }
        }
        else{
            if($_FILES['photos']['error'] != 0){
                switch($_FILES['photos']['error']){
                    case 3:
                        echo "Plik wysłany tylko częściowo";
                        break;
                    case 4:
                        echo "Plik nie został wysłany";
                        break;
                    case 2:
                        echo "Wysłany plik jest za duży";
                        break;
                    default:
                        echo "Nieznany błąd wysyłania";
                        break;
                }
            }
            else if($_FILES['photos']['type'] !== "image/webp"){
                echo "Podany plik ma nieprawidlowy format";
            }
            else{
                $subfolderName_sql = "SELECT subcategory_name FROM subcategory WHERE id=" . $_POST['subcategory'] . "";
                $subfolderName_result = $connection->query($subfolderName_sql);
                $subfolderName = $subfolderName_result->fetch_assoc();

                $filename = $_FILES['photos']['name'];

                $destiny = __DIR__ . "/assets/images/" . $subfolderName['subcategory_name'] . "/" . $filename; 

                $x = 1;

                while(file_exists($destiny)){
                    $filename = "($x)" . $filename;
                    $destiny = __DIR__ . "/assets/images/" . $subfolderName['subcategory_name'] . "/" . $filename; 
                    $x++; 
                }

                if(!(move_uploaded_file($_FILES['photos']['tmp_name'], $destiny))){
                    echo "Wysyłanie się nie powiodło";
                }
            }
        }
        $destiny_sql = explode("Projekt_Bozy/", $destiny);

        $product_add_sql = "INSERT INTO product VALUES (DEFAULT, '" . $_POST['name'] . "','" . $_POST['subcategory'] . "','" . $_POST['desc'] . "','" . $_POST['price'] . "','" . $_POST['disc'] . "','" . $destiny_sql[1] . "','" . 0 . "')";
        $connection->query($product_add_sql);
        header('Location: product_menagment.php');
    }
    
    
    else if(isset($_POST['cancel_add_product'])){
        header('Location: product_menagment.php');
    }
    else if(isset($_POST['edit_product'])){
        //EDYTOWANIE PRODUKU PRODUKTU
    }
    else if(isset($_POST['cancel_edit_product'])){
        header('Location: product_menagment.php');
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

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container-lg">
            <form action="" method="post">
                <select class="form-select" name="product" id="product">
                    <?php
                        while($row = $products_result->fetch_assoc()){
                            if($row['id']==1){
                                echo '<option value="'. $row['id'].'" selected>' . $row['name'] . '</option>';
                            }
                            else{
                                echo '<option value="'. $row['id'].'">' . $row['name'] . '</option>';
                            }
                        }
                    ?>
                    <input class="btn btn-primary" type="submit" name="edit_button" value="Edit" />
                    <input class="btn btn-primary" type="submit" name="add_button" value="Dodaj" />
                    <input class="btn btn-danger" type="submit" name="del_button" value="Usuń" />
                    <input class="btn btn-danger" type="submit" name="exit_button" value="Wyjdź" />

                </select>
            </form>

            <?php
                if(isset($_GET['id'])){
                    if($_GET['id']==1){
                        // ADD FORM
                        echo '<form action="" method="post" enctype="multipart/form-data">';
                            echo '<input type="hidden" name="MAX_FILE_SIZE" value="1048576">';
                            echo '<div class="mb-3">';
                                echo '<label for="name" class="form-label">Nazwa produktu:</label>';
                                if(isset($_POST['name'])){
                                    echo '<input type="text" class="form-control" id="name" name="name" value="' . $_POST['name'] . '">';
                                }else{
                                    echo '<input type="text" class="form-control" id="name" name="name">';
                                }
                                
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="subcategory" class="form-label">Kategoria produktu:</label>';
                                echo '<select class="form-select" name="subcategory" id="subcategory">';
                                while($row = $kategoria_result->fetch_assoc()){
                                    if($row['id'] == 1){
                                        echo '<option value="' . $row['id'] . '" selected>' . $row['subcategory_name'] . '</option>';
                                    }else{
                                        echo '<option value="' . $row['id'] . '">' . $row['subcategory_name'] . '</option>';
                                    }
                                }
                                echo '</select>';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="desc" class="form-label">Opis:</label>';
                                if(isset($_POST['desc'])){
                                    echo '<input type="text" class="form-control" id="desc" name="desc" value="' . $_POST['desc'] . '">';
                                }
                                else{
                                    echo '<input type="text" class="form-control" id="desc" name="desc">';
                                }
                                
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="price" class="form-label">Cena:</label>';
                                if(isset($_POST['price'])){
                                    echo '<input type="number" class="form-control" id="price" name="price" value="' . $_POST['price'] . '">';
                                }
                                else{
                                    echo '<input type="number" class="form-control" id="price" name="price">';
                                }
                                
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="disc" class="form-label">Cena promocyjna:</label>';
                                if(isset($_POST['disc'])){
                                    echo '<input type="number" class="form-control" id="disc" name="disc" value="' . $_POST['disc'] . '">';
                                }
                                else{
                                    echo '<input type="number" class="form-control" id="disc" name="disc">';
                                }
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="photos" class="form-label">Zdjęcia produktu:</label>';
                                echo '<input class="form-control" name="photos" type="file" id="photos"/>';
                            echo '</div>';
                            echo '<input class="btn btn-primary" type="submit" value="Zatwierdź" name="add_product">';
                            echo '<input class="btn btn-danger" type="submit" value="Anuluj" name="cancel_add_product">';
                        echo '</form>';
                    }
                    else if($_GET['id']==0){
                        // EDIT FORM
                        echo '<form action="" method="post" enctype="multipart/form-data">';
                            echo '<div class="mb-3">';
                                echo '<label for="name" class="form-label">Nazwa produktu:</label>';
                                echo '<input type="text" class="form-control" id="name" name="name">';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="subcategory" class="form-label">Kategoria produktu:</label>';
                                echo '<select class="form-select" name="subcategory" id="subcategory">';
                                while($row = $kategoria_result->fetch_assoc()){
                                    if($row['id'] == 1){
                                        echo '<option value="' . $row['id'] . '" selected>' . $row['subcategory_name'] . '</option>';
                                    }else{
                                        echo '<option value="' . $row['id'] . '">' . $row['subcategory_name'] . '</option>';
                                    }
                                }
                                echo '</select>';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="desc" class="form-label">Opis:</label>';
                                echo '<input type="text" class="form-control" id="desc" name="desc">';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="price" class="form-label">Cena:</label>';
                                echo '<input type="number" class="form-control" id="price" name="price">';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="disc" class="form-label">Cena promocyjna:</label>';
                                echo '<input type="number" class="form-control" id="disc" name="disc">';
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="photos" class="form-label">Zdjęcia produktu:</label>';
                                echo '<input class="form-control" name="photos" type="file" id="photos"/>';
                            echo '</div>';
                            echo '<input class="btn btn-primary" type="submit" value="Zatwierdź" name="edit_product">';
                            echo '<input class="btn btn-danger" type="submit" value="Anuluj" name="cancel_edit_product">';
                        echo '</form>';
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>