
<!-- === NAVBAR === -->
<script src="assets/scripts/header.js" defer></script>
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
                        <button class="btn btn-dark" type="submit">
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
                                    <!-- PHP JEŻELI UŻYTKOWNIK JEST ZALOGOWANY WYŚWIETL INNE OPCJE -->
                                    <?php
                                     if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                                        echo '<li><a class="dropdown-item" href="account.php">Twoje konto</a></li>
                                                <li><a class="dropdown-item" href="orders.php">Zamówienia</a></li>
                                                <li><a class="dropdown-item" href="logout.php">Wyloguj się</a></li>';
                                                if($_SESSION['admin']==1){
                                                    echo '<li><a class="dropdown-item" href="menagment.php">Zarządzanie danymi</a></li>';
                                                }
                                    }
                                    else {
                                        echo '<li><a class="dropdown-item" href="login.php">Zaloguj się</a></li>
                                        <li><a class="dropdown-item" href="register.php">Zarejestruj się</a></li>';
                                    }
                                    ?>
                                </ul>
                            </li>
                            <li class="nav-item d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-heart navbar-icon"></i>
                                <?php
                                    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                                        echo '<a class="nav-link navbar-label" href="polubione.php">Twoje polubienia</a>';
                                    }
                                    else {
                                        echo '<a class="nav-link navbar-label" href="login.php">Twoje polubienia</a>';
                                    }
                                    ?>
                                
                            </li>
                            <li class="nav-item dropdown d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-cart-shopping navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Koszyk</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <?php
                                        if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']== true)){
                                            echo '<li><a class="dropdown-item" href="cart.php">Sprawdz koszyk</a></li>';
                                        }else{
                                            echo '<li><span class="dropdown-item-text" >Koszyk jest pusty, zarejestruj sie aby dodać rzeczy do koszyka</span></li>';
                                        }
                                    ?>
                                   
                                </ul>
                            </li>
                            <li class="nav-item dropdown d-flex flex-column align-items-center justify-content-between">
                                <i class="fa-solid fa-headphones navbar-icon"></i>
                                <a class="nav-link navbar-label" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pomoc i kontakt</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
                                    <li><a class="dropdown-item" href="kontakt.php">Kontakt</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><span class="dropdown-item-text">Kontakt</span></li>
                                    <li><span class="dropdown-item-text">example@gmail.com</span></li>
                                    <li><span class="dropdown-item-text">505404303</span></li>
                                    <li><span class="dropdown-item-text">Pon. - Pt. 10:00 - 18:00</span></li>
                                    <li><span class="dropdown-item-text">Sb. - Nd. 12:00 - 16:00</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>  

    <!-- BOTTOM NAVBAR -->
    <div class="container-xxl d-flex">
        <button id="btn-left">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <div class="container">
            <div class="slider-wrapper overflow-hidden d-flex justify-content-xxl-evenly py-3" id="slider-wrapper">
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-computer fs-4"></i>
                        <p class="mb-0">Laptopy i komputery</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=2">Komputery</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=1">Laptopy</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-mobile-screen-button fs-4"></i>
                        <p class="mb-0">Smartfony i Smartwatche</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=3">Smartfony</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=4">Smartwatche</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=5">Tablety</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=6">Telefony komórkowe</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-microchip fs-4"></i>
                        <p class="mb-0">Podzespoły komputerowe</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=7">Procesory</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=8">Karty Graficzne</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=9">Pamięć RAM</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=10">Płyty główne</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=11">Dyski</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=12">Obudowy</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=13">Chłodzenie</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=14">Zasilacze</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-print fs-4"></i>
                        <p class="mb-0">Urządzenia peryferyjne</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=15">Drukarki</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=16">Monitory</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=17">Mikrofony</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-tv fs-4"></i>
                        <p class="mb-0">TV i audio</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=18">Telewizory</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=19">Głośniki</a></li>
                    </ul>
                </div>
                <div class="category-container">
                    <button type="button" class="category-button category-button-shadow btn d-flex justify-content-evenly align-items-center" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-keyboard fs-4"></i>
                        <p class="mb-0">Akcesoria</p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="produkty.php?kategoria=20">Klawiatury</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=21">Myszki</a></li>
                        <li><a class="dropdown-item" href="produkty.php?kategoria=22">Słuchawki</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <button id="btn-right">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>