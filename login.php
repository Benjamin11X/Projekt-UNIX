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

    <title>UNIX - Zarejestruj się</title>
</head>
<body>
    <div class="login-form-container container-md d-flex flex-column justify-content-center align-items-center">
        <img class="login-form-container__logo" src="assets/images/Logo.svg" alt="">
        <hr class="bg-danger border-2 border-top border-dark w-100">
        <div class="login-form-container__content container-fluid d-flex flex-column flex-md-row justify-content-between">
            <div class="login-form-container__content__form">
                <h1>Zaloguj się</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nickname">Nazwa użytkownika *</label>
                        <input class="form-control" type="text" name="nickname" id="nickname" required="required" data-error="Nazwa użytkownika jest wymagana">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Hasło *</label>
                        <input class="form-control" type="text" name="password" id="password" required="required" data-error="Hasło jest wymagane">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-outline-dark" type="submit" value="Zaloguj się"></input>
                    </div>
                </form>
            </div>
            <div class="login-form-container__content__vl"></div>
            <div class="login-form-container__content__info">
                <h2 class="pb-3">Dzięki założeniu konta możesz wykonywać zakupy w naszym sklepie dużo łatwiej</h2>
                <div class="d-flex flex-column justify-content-evenly">
                    <div class="login-form-container__content__info-row d-flex flex-column flex-md-row align-items-center py-2">
                        <i class="fa-solid fa-signs-post display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Zamawiaj szybciej i łatwiej</p>
                    </div>
                    <div class="login-form-container__content__info-row d-flex flex-column flex-md-row align-items-center py-2">
                        <i class="fa-regular fa-clipboard display-5 me-md-4 pe-md-1"></i>
                        <p class="fs-5 m-0">Sprawdzaj swoją historie zamówień</p>
                    </div>
                    <div class="login-form-container__content__info-row d-flex flex-column flex-md-row align-items-center py-2">
                        <i class="fa-solid fa-magnifying-glass display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Śledź status przesyłki</p>
                    </div>
                    <div class="login-form-container__content__info-row d-flex flex-column flex-md-row align-items-center py-2">
                        <i class="fa-solid fa-coins display-5 me-md-3"></i>
                        <p class="fs-5 m-0">Korzystaj z rabatów, promocji, oraz ofert specjalnych</p>
                    </div>
                </div>
                <h2 class=" my-3">Załóż konto już teraz</h2>
                <a href="register.php" class="btn btn-outline-dark">Załóż konto</a>
            </div>
        </div>
    </div>
</body>
</html>