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
        header('Location: product_menagment.php?id=1&prod='.$_POST['product'].'');
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
        $File = $_FILES['photos']['name'];

        $product_add_sql = "INSERT INTO product VALUES (DEFAULT, " . $_POST['name'] .",".$_POST['subcategory']."," . $_POST['desc'] . "," . $_POST['price'] . "," . $_POST['disc'] . "," .  . ","0")";
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
                        echo '<form action="" method="post">';
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
                                echo '<input class="form-control" type="file" id="photos" multiple/>';
                            echo '</div>';
                            echo '<input class="btn btn-primary" type="submit" value="Zatwierdź" name="add_product">';
                            echo '<input class="btn btn-danger" type="submit" value="Anuluj" name="cancel_add_product">';
                        echo '</form>';
                    }
                    else if($_GET['id']==0){
                        echo '<form action="" method="post">';
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
                                echo '<input class="form-control" name="photos" type="file" id="photos" multiple/>';
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