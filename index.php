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
    <!-- === NAVBAR === -->

    <!-- TOP NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-2">
        <div class="container-lg">
            <div class="row g-1 g-lg-4 w-100">
                <!-- LOGO -->
                <div class="col-sm-auto col-12 d-flex justify-content-center align-items-center navbar-logo">
                    <a class="navbar-brand" href="index.php">
                        <img class="navbar_image" src="assets/images/Logo.svg" alt="Logo UNIX">
                    </a>
                </div>

                <!--  WYSZUKIWARKA -->
                <div class="col d-flex justify-content-center align-items-center">
                    <form class="d-flex w-100">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <!-- MENU KLIENTA -->
                <div class="col-auto d-flex justify-content-center align-items-center">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col-lg-auto col-12 d-flex justify-content-center align-items-center">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex flex-row justify-content-evenly pt-2">
                            <li class="nav-item dropdown d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-user navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#" id="navbarDropdown0" role="button" data-bs-toggle="dropdown" aria-expanded="false">Twoje konto</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown0">
                                    <li><a class="dropdown-item" href="#">Zaloguj się</a></li>
                                    <li><a class="dropdown-item" href="#">Zarejestruj się</a></li>
                                    <!-- PHP JEŻELI UŻYTKOWNIK JEST ZALOGOWANY WYŚWIETL INNE OPCJE -->
                                </ul>
                            </li>
                            <li class="nav-item d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-heart navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#">Twoje polubienia</a>
                            </li>
                            <li class="nav-item dropdown d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-cart-shopping navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Koszyk</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <!-- PHP JEŻELI KOSZYK PUSTY WYŚWIETL "KOSZYK PUSTY" JEŻELI COŚ JEST WYŚWIETL PRODUKTY -->
                                </ul>
                            </li>
                            <li class="nav-item dropdown d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-headphones navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pomoc i kontakt</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item" href="#">Kontakt</a></li>
                                    <!-- PHP JEŻELI UŻYTKOWNIK JEST ZALOGOWANY WYŚWIETL INNE OPCJE -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>  

    <!-- BOTTOM NAVBAR -->
    <div class="container-fluid d-flex">
        <div class="container">
            <div class="slider-wrapper overflow-hidden d-flex justify-content-xxl-evenly py-3" id="slider-wrapper">
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-computer fs-4"></i>
                        <p class="mb-0">Laptopy i komputery</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="komputery.php">Komputery</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-mobile-screen-button fs-4"></i>
                        <p class="mb-0">Smartfony i Smartwatche</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-microchip fs-4"></i>
                        <p class="mb-0">Podzespoły komputerowe</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-print fs-4"></i>
                        <p class="mb-0">Urządzenia peryferyjne</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-tv fs-4"></i>
                        <p class="mb-0">TV i audio</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-keyboard fs-4"></i>
                        <p class="mb-0">Akcesoria</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                        <li><a class="dropdown-item" href="#">Link1</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <button>
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button>
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>

    <!-- BANNER SLIDER -->
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/Banner0.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/Banner1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- BESTSELLERS -->
    <div class="container">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Bestsellery</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
        </div>
        
    </div>

    <!-- PROMOTIONS -->
    <div class="container">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Promocje</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <!-- SUGGESTED -->
    <div class="container">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Polecamy</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <!-- SUGGESTED -->
    <div class="container">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Aktualności</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>

    <!-- SUGGESTED -->
    <div class="container">
        <hr class="bg-danger border-2 border-top border-dark">
        <div class="d-flex justify-content-between">
            <h1>Poradniki</h1>
            <a href="#">Zobacz więcej</a>
        </div>
        <!-- PRODUCTS -->
        <div class="">
            
        </div>
    </div>
</body>
</html>