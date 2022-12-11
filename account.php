<?php
    session_start();
    include 'connect.php';

    $subkategorie = array("","komputery","laptopy",
    "smartfony","smartwatche","tablety","komorkowe","procesory",
    "karty_graficzne","pamiec_ram","plyty_glowne","dyski","obudowy",
    "chlodzenie","zasilacze","drukarki","monitory","mikrofony",
    "telewizory","audio","klawiatury","myszki","sluchawki");

    $user_data_sql = "SELECT * FROM user WHERE id=" . $_SESSION['id'] . "";
    $user_data_result = $connection->query($user_data_sql);
    $user_data = $user_data_result->fetch_assoc();

    $obtainet_products_sql = "SELECT DISTINCT product.subcategory_id, product.name, product.picture_url FROM ((product INNER JOIN order_details ON product.id = order_details.produkt_id) INNER JOIN zamowienie ON zamowienie.id = order_details.order_id) WHERE zamowienie.client_id='" . $_SESSION['id'] . "'";
    $obtainet_products_result = $connection->query($obtainet_products_sql);

    if(isset($_POST['submit'])){
        if(isset($_POST['login']) && $_POST['login']!=NULL){
            $user_data_update_sql = "UPDATE user SET login='" . $_POST['login'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['email']) && $_POST['email']!=NULL){
            $user_data_update_sql = "UPDATE user SET email='" . $_POST['email'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['password']) && $_POST['password']!=NULL){
            $user_data_update_sql = "UPDATE user SET password='" . $_POST['password'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['name']) && $_POST['name']!=NULL){
            $user_data_update_sql = "UPDATE user SET imie='" . $_POST['name'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['surname']) && $_POST['surname']!=NULL){
            $user_data_update_sql = "UPDATE user SET nazwisko='" . $_POST['surname'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['city']) && $_POST['city']!=NULL){
            $user_data_update_sql = "UPDATE user SET city='" . $_POST['miasto'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['postcode']) && $_POST['postcode']!=NULL){
            $user_data_update_sql = "UPDATE user SET kod_pocztowy='" . $_POST['postcode'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['street']) && $_POST['street']!=NULL){
            $user_data_update_sql = "UPDATE user SET ulica='" . $_POST['street'] . "'";
            $connection->query($user_data_update_sql);
        }
        if(isset($_POST['house']) && $_POST['house']!=NULL){
            $user_data_update_sql = "UPDATE user SET nr_domu='" . $_POST['house'] . "'";
            $connection->query($user_data_update_sql);
        }
        header('Location: account.php');
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
    
    <title>UNIX</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'header.php'; ?>

    <!-- CONTENT -->
    <div class="container-fluid">
        <div class="container-lg d-flex">
            <div class="account d-flex w-100">
                <div class="account__info">
                    <form class="account__info--form my-4" action="" method="post">
                        <div class="account__info--form-row">
                            <label for="login" class="form-label">Nazwa/Login</label>
                            <input type="text" class="form-control mb-2" id="login" name="login" value="<?php echo $user_data['login'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control mb-2" id="email" name="email" value="<?php echo $user_data['email'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="pswd" class="form-label">Hasło</label>
                            <input type="password" class="form-control mb-2" id="pswd" name="pswd"  value="<?php echo $user_data['password'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="name" class="form-label">Imie</label>
                            <input type="text" class="form-control mb-2" id="name" name="name" value="<?php echo $user_data['imie'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="surname" class="form-label">Nazwisko</label>
                            <input type="text" class="form-control mb-2" id="surname" name="surname" value="<?php echo $user_data['nazwisko'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="city" class="form-label">Miasto</label>
                            <input type="text" class="form-control mb-2" id="city" name="city" value="<?php echo $user_data['miasto'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="postcode" class="form-label">Kod Pocztowy</label>
                            <input type="text" class="form-control mb-2" id="postcode" name="postcode" value="<?php echo $user_data['kod_pocztowy'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="street" class="form-label">Ulica</label>
                            <input type="text" class="form-control mb-2" id="street" name="street" value="<?php echo $user_data['ulica'] ?>">
                        </div>
                        <div class="account__info--form-row">
                            <label for="house" class="form-label">Nr domu</label>
                            <input type="number" class="form-control mb-2" id="house" name="house" value="<?php echo $user_data['nr_domu'] ?>">
                        </div>
                        <input class="btn btn-primary" type="submit" name="submit" value="Zatwierdź">
                    </form>
                </div>
                <div class="account__links my-5 p-4">
                    <h3>Twoje produkty</h3>
                    <div class="account__links--products d-flex flex-column px-2">
                        <?php
                            while($row = $obtainet_products_result->fetch_assoc()){
                                echo '<a class="mb-2" href="download.php?file=' . $row['picture_url'] . '&subcat=' . $subkategorie[intval($row['subcategory_id'])] . '">' . $row['name'] . '</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>