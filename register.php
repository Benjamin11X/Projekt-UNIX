<?php
session_start();

if (isset($_POST['email'])){

    $imie = $_POST['fname'];
    $nazwisko = $_POST['lname'];
   
    //Udana walidacja
    $correct = true;

    //Nick chceck 
    $nickname = $_POST['nickname'];

    if ((strlen($nickname)<3) || (strlen($nickname)>20)){
        
        $correct = false;
        $_SESSION['e_nick'] = "Nazwa użytkownika musi posiadać od 3 do 20 znaków.";
    }

    if (ctype_alnum($nickname)==false){
        $correct = false;
        $_SESSION['e_nick'] = "Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
    }

    //email check 
    $email = $_POST['email'];
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

    if((filter_var($emailB, FILTER_VALIDATE_EMAIL)== false ) || ($emailB!=$email)){
        $correct = false;
        $_SESSION['e_email'] = "Podaj poprawny adres e-mail";
    }

    //password check 
    $haslo1 = $_POST['password'];
    $haslo2 = $_POST['password2'];
    if((strlen($haslo1)<8) ||(strlen($haslo1)>20)){
        $correct = false;
        $_SESSION['e_haslo'] = 'Hasło musi posiadać od 8 do 20 znaków';
    }

    if ($haslo1 !=$haslo2){
        $correct = false;
        $_SESSION['e_haslo'] = 'Podane hasła nie są identyczne';
    }


    

    
    

    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);

    try {
        $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
        if($polaczenie->connect_errno!=0){
            throw new Exception(mysqli_connect_errno());
        }
        else
        {   
            //Czy email już istnieje?
            $rezultat = $polaczenie->query("SELECT id FROM user WHERE email='$email'");

            if (!$rezultat) throw new Exception($polaczenie->error);
            $ile_takich_maili = $rezultat->num_rows;
            if($ile_takich_maili>0){
                $correct = false;
                $_SESSION['e_email'] = 'Istnieje już konto przypisane do tego adresu e-mail!';
            }

            //Czy nick juz istnieje?
            $rezultat = $polaczenie->query("SELECT id FROM user WHERE login='$nickname'");

            if (!$rezultat) throw new Exception($polaczenie->error);
            $ile_takich_nickow = $rezultat->num_rows;
            if($ile_takich_nickow){
                $correct = false;
                $_SESSION['e_nick'] = 'Istnieje już konto przypisane do tego nicku. Wybierz inny';
            }

            if ($correct == true){
                
                if($polaczenie->query("INSERT INTO user VALUSE (NULL,'$email','$nickname','$haslo1','0','$imie','$nazwisko','','','','')")){
                    $_SESSION['udanarejestracja'] = true;
                    header('Location: welcome.php');
                }
                else {
                    throw new Exception($polaczenie->error);
                }
            }

            $polaczenie->close();
        }
    }
    catch(Exception $e) {
        echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestracje w innym terminie </span>';
        echo '<br/>Develop infromation:' . $e;
    }

   
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

    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LeCslQjAAAAAIBew8ZBBqV7mP-1CqGtCWrkn4rq"></script>

    <title>UNIX - Zarejestruj się</title>
</head>
<body>
    <div class="register-form-container container-md d-flex flex-column justify-content-center align-items-center">
        <img class="register-form-container__logo" src="assets/images/Logo.svg" alt="">
        <hr class="bg-danger border-2 border-top border-dark w-100">
        <div class="register-form-container__content container-fluid d-flex flex-column-reverse flex-md-row justify-content-between">
            <div class="register-form-container__content__form">
                <h1>Załóż konto</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nickname">Nazwa użytkownika *</label>
                        <input class="form-control" type="text" name="nickname" id="nickname" required="required" data-error="Nazwa użytkownika jest wymagana">
                        
                        <?php if (isset($_SESSION['e_nick'])){
                            echo '<p class ="error">' . $_SESSION['e_nick'] . '</p>'; // POPRAWKI STYLU
                            unset($_SESSION['e_nick']);
                        }
                        ?>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="fname">Imie</label>
                        <input class="form-control" type="text" name="fname" id="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname">Nazwisko</label>
                        <input class="form-control" type="text" name="lname" id="lname">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email *</label>
                        <input class="form-control" type="email" name="email" id="email" required="required" data-error="Email jest wymagany">

                        <?php if (isset($_SESSION['e_email'])){
                            echo '<div class ="error">' . $_SESSION['e_email'] . '</div>'; // POPRAWKI STYLU
                            unset($_SESSION['e_email']);
                        }
                        ?>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Hasło *</label>
                        <input class="form-control" type="password" name="password" id="password" required="required" data-error="Hasło jest wymagane">
                        <?php if (isset($_SESSION['e_haslo'])){
                            echo '<div class ="error">' . $_SESSION['e_haslo'] . '</div>'; // POPRAWKI STYLU
                            unset($_SESSION['e_haslo']);
                        }
                        ?>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Powtórz hasło *</label>
                        <input class="form-control" type="password" name="password2" id="password2" required="required" data-error="Hasło jest wymagane">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-outline-dark" type="submit" value="Zarejestruj konto"></input>
                    </div>
                </form>
            </div>
            <div class="register-form-container__content__vl"></div>
            <div class="register-form-container__content__info">
                <h2 class="h-25">Dzięki założeniu konta możesz wykonywać zakupy w naszym sklepie dużo łatwiej</h2>
                <div class="d-flex flex-column justify-content-evenly h-75">
                    <div class="register-form-container__content__info-row d-flex flex-column flex-md-row align-items-center">
                        <i class="fa-solid fa-signs-post display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Zamawiaj szybciej i łatwiej</p>
                    </div>
                    <div class="register-form-container__content__info-row d-flex flex-column flex-md-row align-items-center">
                        <i class="fa-regular fa-clipboard display-5 me-md-4 pe-md-1"></i>
                        <p class="fs-5 m-0">Sprawdzaj swoją historie zamówień</p>
                    </div>
                    <div class="register-form-container__content__info-row d-flex flex-column flex-md-row align-items-center">
                        <i class="fa-solid fa-magnifying-glass display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Śledź status przesyłki</p>
                    </div>
                    <div class="register-form-container__content__info-row d-flex flex-column flex-md-row align-items-center">
                        <i class="fa-solid fa-coins display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Korzystaj z rabatów, promocji, oraz ofert specjalnych</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>