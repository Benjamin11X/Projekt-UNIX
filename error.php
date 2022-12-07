<?php

session_start();

if ((!isset($_POST['login'])) || (!isset($_POST['haslo']))){
    header('Location: index.php');
    exit();
}

require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0){
    echo "ERROR: " . $polaczenie->connect_errno; 
}
else{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");

    

    if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM user WHERE login='%s' ",
    mysqli_real_escape_string($polaczenie,$login)))){
        $many_users = $rezultat->num_rows;
        if($many_users>0)
        {
            $wiersz = $rezultat->fetch_assoc();

            if (password_verify($haslo, $wiersz['password'])) {

            $_SESSION['zalogowany'] = true;

           



                $_SESSION['id'] = $wiersz['id'];
                $_SESSION['user'] = $wiersz['login'];
                $_SESSION['e-mail'] = $wiersz['e-mail'];
                $_SESSION['imie'] = $wiersz['imie'];
                $_SESSION['nazwisko'] = $wiersz['nazwisko'];
                $_SESSION['miasto'] = $wiersz['miasto'];
                $_SESSION['kod_pocztowy'] = $wiersz['kod_pocztowy'];
                $_SESSION['ulica'] = $wiersz['ulica'];
                $_SESSION['nr_domu'] = $wiersz['nr_domu'];

                unset($_SESSION['blad']);

                $rezultat->free_result();
                header('Location: index.php');
            }
            else 
            { 
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: login.php ');
            }
        } else {
            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
            header('Location: login.php ');
        }
    }

    $polaczenie->close();
}




?>