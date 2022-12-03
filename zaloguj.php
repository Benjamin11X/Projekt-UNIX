<?php

session_start();

require_once "connect.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0){
    echo "ERROR: " . $polaczenie->connect_errno; 
}
else{
    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE login='$login' AND password = '$password'";

    if($rezultat = @$polaczenie->query($sql)){
        $many_users = $rezultat->num_rows;
        if($many_users>0){
            $wiersz = $rezultat->fetch_assoc();
            $_SESSION['user'] = $wiersz['login'];
            $_SESSION['e-mail'] = $wiersz['e-mail'];
            $_SESSION['imie'] = $wiersz['imie']; 
            $_SESSION['nazwisko'] = $wiersz['nazwisko']; 
            $_SESSION['miasto'] = $wiersz['miasto']; 
            $_SESSION['kod_pocztowy'] = $wiersz['kod_pocztowy'];
            $_SESSION['ulica'] = $wiersz['ulica'];
            $_SESSION['nr_domu'] = $wiersz['nr_domu'];
            
            $rezultat->free_result();
            header('Location: index.php');
        }
        else {

        }
    }

    $polaczenie->close();
}




?>