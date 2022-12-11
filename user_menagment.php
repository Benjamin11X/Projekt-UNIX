<?php
    session_start();
    include 'connect.php';

    $users_sql = "SELECT * FROM user";
    $users_result = $connection->query($users_sql);

    if(isset($_POST['show_button'])){
        header('Location: user_menagment.php?type=0&user=' . $_POST['users'] . '');
    }
    else if(isset($_POST['prom_button'])){
        $user_prom_sql = "UPDATE user SET admin='1' WHERE id=" . $_POST['users'] . "";
        $connection->query($user_prom_sql);
        header('Location: user_menagment.php');
    }
    else if(isset($_POST['deprom_button'])){
        $user_deprom_sql = "UPDATE user SET admin='0' WHERE id=" . $_POST['users'] . "";
        $connection->query($user_deprom_sql);
        header('Location: user_menagment.php');
    }
    else if(isset($_POST['del_button'])){
        $user_del_sql = "DELETE FROM user WHERE id=" . $_POST['user'] ."";
        $connection->query($user_del_sql);
        header('Location: user_menagment.php');
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
                <select class="form-select" name="users" id="users">
                    <?php
                        while($row = $users_result->fetch_assoc()){
                            if($row['id'] == 1){
                                echo '<option value="' . $row['id'] . '" selected>ID: ' . $row['id'] . ' Email: ' . $row['email'] . '</option>';
                            }
                            else{
                                echo '<option value="' . $row['id'] . '">ID: ' . $row['id'] . ' Email: ' . $row['email'] . '</option>';
                            }
                        }
                    ?>
                </select>
                <input class="btn btn-primary" type="submit" name="show_button" value="Pokaż informacje">
                <input class="btn btn-primary" type="submit" name="prom_button" value="Promuj na admina">
                <input class="btn btn-primary" type="submit" name="deprom_button" value="Odpromuj z admina">
                <input class="btn btn-danger" type="submit" name="del_button" value="Usuń użytkownika">
                <input class="btn btn-danger" type="submit" name="exit_button" value="Wyjdź">
            </form>
            <?php
                if(isset($_GET['type'])){
                    if($_GET['type']==0){
                        $user_data_sql = "SELECT * FROM user WHERE id=" . $_GET['user'] . "";
                        $user_data_result = $connection->query($user_data_sql);
                        $user_data = $user_data_result->fetch_assoc();

                        echo '<p><b>ID: </b>' . $user_data['id'] . '</p>';
                        echo '<p><b>Email: </b>' . $user_data['email'] . '</p>';
                        echo '<p><b>Login: </b>' . $user_data['login'] . '</p>';
                        echo '<p><b>Hasło: </b>' . $user_data['password'] . '</p>';
                        echo '<p><b>Admin: </b>' . $user_data['admin'] . '</p>';
                        echo '<p><b>Imie: </b>' . $user_data['imie'] . '</p>';
                        echo '<p><b>Nazwisko: </b>' . $user_data['nazwisko'] . '</p>';
                        echo '<p><b>Miasto: </b>' . $user_data['miasto'] . '</p>';
                        echo '<p><b>Kod pocztowy: </b>' . $user_data['kod_pocztowy'] . '</p>';
                        echo '<p><b>Ulica: </b>' . $user_data['ulica'] . '</p>';
                        echo '<p><b>Nr Domu: </b>' . $user_data['nr_domu'] . '</p>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>