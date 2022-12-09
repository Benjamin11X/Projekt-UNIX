<?php
    session_start();

    if(isset($_SESSION['udanarejestracja'])){
    header('Location: index.php');
    exit();
    }
    else {
    unset($_SESSION['udanarejestracja']);
    }
?>
<html>
    <head>
        <title>Witamy w UNIX</title>
    </head>
    <body>
        <h1>Dziękujemy za rejestracje w serwisie</h1>
    </body>
</html>