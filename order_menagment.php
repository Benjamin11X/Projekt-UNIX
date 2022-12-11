<?php
    session_start();
    include 'connect.php';

    $product_sql = "SELECT * FROM zamowienie";
    $product_result = $connection->query($product_sql);

    if(isset($_POST['show_button'])){
        header('Location: order_menagment.php?type=0&order=' . $_POST['zamowienie'] . '');
    }
    else if(isset($_POST['product_delivery'])){
        $product_delivery_sql = "UPDATE zamowienie SET admin='1' WHERE id=" . $_POST['users'] . "";
        $connection->query($product_delivery_sql);
        header('Location: order_menagment.php');
    }
    else if(isset($_POST['del_button'])){
        $user_del_sql = "DELETE FROM zamowienie WHERE id=" . $_POST['order'] ."";
        $connection->query($user_del_sql);
        header('Location: order_menagment.php');
    }
    else if(isset($_POST['exit_button'])){
        header('Location: menagment.php');
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
                <select class="form-select" name="zamowienie" id="zamowienie">
                    <?php
                        while($row = $product_result->fetch_assoc()){
                            if($row['id'] == 1){
                                echo '<option value="' . $row['id'] . '" selected>ID: ' . $row['id'] . ' Data: ' . $row['data'] . '</option>';
                            }
                            else{
                                echo '<option value="' . $row['id'] . '">ID: ' . $row['id'] . ' Data: ' . $row['data'] . '</option>';
                            }
                            
                        }
                    ?>
                </select>
                <input class="btn btn-primary" type="submit" name="show_button" value="Pokaż informacje">
                <input class="btn btn-primary" type="submit" name="edit_button" value="Edit" />
                <input class="btn btn-danger" type="submit" name="del_button" value="Usuń Produkt">
                <input class="btn btn-danger" type="submit" name="exit_button" value="Wyjdź">
                
            </form>
            <?php
                if(isset($_GET['type'])){
                    if($_GET['type']==0){
                        $order_data_sql = "SELECT * FROM zamowienie WHERE id=" . $_GET['order'] . "";
                        $order_data_result = $connection->query($order_data_sql);
                        $order_data = $order_data_result->fetch_assoc();

                        echo '<p><b>ID: </b>' . $order_data['id'] . '</p>';
                        echo '<p><b>ID klienta: </b>' . $order_data['client_id'] . '</p>';
                        echo '<p><b>Rodzaj dostawy: </b>' . $order_data['delivery_id'] . '</p>';
                        echo '<p><b>Data: </b>' . $order_data['data'] . '</p>';
                        echo '<p><b>Kwota zamówienia: </b>' . $order_data['kwota_zamowienia'] . '</p>';
                        echo '<p><b>Rodzaj płatności: </b>' . $order_data['payment_id'] . '</p>';
                        
                    }
                    else if($_GET['type']==0){
                        // EDIT FORM
                        $order_data_sql = "SELECT * FROM zamowienie WHERE id=" . $_GET['type'] . "";
                        $order_data_result = $connection->query($order_data_sql);
                        $order_data = $order_data_result->fetch_assoc();

                        echo '<form action="" method="post" enctype="multipart/form-data">';
                            echo '<div class="mb-3">';
                                echo '<label for="id" class="form-label">ID:</label>';
                                if(isset($_POST['id'])){
                                    echo '<input type="text" class="form-control" id="id" name="id" value="' . $_POST['id'] . '">';
                                }
                                else{
                                    echo '<input type="text" class="form-control" id="id" name="id" value="' . $order_data['id'] . '">';
                                }
                                
                            echo '</div>';
                            
                            echo '<div class="mb-3">';
                                echo '<label for="delivery_id" class="form-label">Dostawa:</label>';
                                if(isset($_POST['delivery'])){
                                    echo '<input type="text" class="form-control" id="delivery" name="delivery" value="' . $_POST['delivery'] . '">';
                                }
                                else{
                                    echo '<input type="text" class="form-control" id="delivery" name="deliveryy value="' . $order_data['delivery_id'] . '">';
                                }
                                
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="price" class="form-label">Kwota zamówienia:</label>';
                                if(isset($_POST['kwota_zamow'])){
                                    echo '<input type="number" class="form-control" id="kwota_zamow" name="kwota_zamow" value="' . $_POST['kwota_zamow'] .'">';
                                }
                                else{
                                    echo '<input type="number" class="form-control" id="kwota_zamow" name="kwota_zamow" value="' . $order_data['kwota_zamowienia'] . '">';
                                }    
                            echo '</div>';
                            echo '<div class="mb-3">';
                                echo '<label for="pay" class="form-label">Zapłata:</label>';
                                if(isset($_POST['pay'])){
                                    echo '<input type="number" class="form-control" id="pay" name="pay" value="' . $_POST['pay'] .'">';
                                }
                                else{
                                    echo '<input type="number" class="form-control" id="pay" name="pay" value="' . $order_data['payment_id'] . '">';
                                }    
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