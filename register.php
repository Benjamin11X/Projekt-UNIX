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
    <div class="login-form-container container d-flex flex-column justify-content-center align-items-center">
        <img class="login-form-container__logo" src="assets/images/Logo.svg" alt="">
        <hr class="bg-danger border-2 border-top border-dark w-100">
        <div class="login-form-container__content container d-flex justify-content-between">
            <div class="login-form-container__content__form w-50">
                <h1>Załóż konto</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nickname">Nazwa użytkownika *</label>
                        <input class="form-control" type="text" name="nickname" id="nickname" required="required" data-error="Nazwa użytkownika jest wymagana">
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
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Hasło *</label>
                        <input class="form-control" type="text" name="password" id="password" required="required" data-error="Hasło jest wymagane">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-outline-dark" type="submit" value="Zarejestruj konto"></input>
                    </div>
                </form>
            </div>
            <div class="login-form-container__content__vl"></div>
            <div class="login-form-container__content__info ">
                <h2 class="h-25">Dzięki założeniu konta możesz wykonywać zakupy w naszym sklepie dużo łatwiej</h2>
                <div class="d-flex flex-column justify-content-evenly h-75">
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-signs-post display-5 me-3"></i>
                        <p class="fs-5 m-0">Zamawiaj szybciej i łatwiej</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-regular fa-clipboard display-5 me-4 pe-1"></i>
                        <p class="fs-5 m-0">Sprawdzaj swoją historie zamówień</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-magnifying-glass display-5 me-3"></i>
                        <p class="fs-5 m-0">Śledź status przesyłki</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-coins display-5 me-3"></i>
                        <p class="fs-5 m-0">Korzystaj z rabatów, promocji, oraz ofert specjalnych</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>