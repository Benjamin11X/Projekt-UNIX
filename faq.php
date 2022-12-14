<?php
    session_start();
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
    <title>UNIX - Kontakt</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <!-- KONTENT -->
    <div class="kontakt container-lg">
        <h1>Kontakt</h1>
         <div class="kontakt__info container-fluid d-flex justify-content-evenly flex-wrap">
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-laptop fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Sklep internetowy</p>
                    </div>
                    
                    <p class="m-0">example_sklep@gmail.com</p>
                    <p class="m-0">+48 505 404 303</p>
                    <p class="m-0">Pon. - Pt.     10:00</p>
                    <p class="m-0">Sob. - Niedz.  18:00</p>
                </div>
            </div>
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-wrench fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Serwis</p>
                    </div>
                    
                    <p class="m-0">example_serwis@gmail.com</p>
                    <p class="m-0">+48 303 404 505</p>
                    <p class="m-0">Pon. - Pt.     10:00</p>
                    <p class="m-0">Sob. - Niedz.  18:00</p>
                </div>
            </div>
            <div class="kontakt__info__card m-4">
                <div class="d-flex flex-column justify-content-evenly w-100 h-100">
                    <div class="d-flex align-items-center p-0">
                        <i class="fa-solid fa-location-dot fs-3 me-2"></i>
                        <p class="fw-bold fs-4 m-0">Adres siedziby</p>
                    </div>

                    <p class="m-0">Siedlce 08-110</p>
                    <p class="m-0">ul. Armii Krajowej 1</p>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ -->
    <div class="faq container-lg my-5  w-100">
    <h1>Najcz????ciej zadawane pytania</h1>
        <div class="faq--tab d-flex">
            <div class="faq--tab-text d-flex flex-column align-items-center">
                <a class="btn btn-light" data-bs-toggle="collapse" href="#faq1" role="button" aria-expanded="false" aria-controls="collapseExample">Jak mo??esz odda?? zu??yty sprz??t elektryczny i elektroniczny, kt??ry by?? u??ywany w gospodarstwie domowym?</a>
                <div class="faq--tab-text-collapse collapse" id="faq1">
                    <div class="card card-body">
                    Je??li kupujesz nowy sprz??t, mo??esz bezp??atnie odda?? nam zu??yty sprz??t tego samego rodzaju i o tych samych funkcjach.
                    <br><br>
                    Je??li nie kupujesz nowego sprz??tu ??? zu??yty mo??esz odda?? w niekt??rych sklepach lub punktach zbi??rki odpad??w. Szczeg????y znajdziesz poni??ej.
                    <br><br>
                    Mo??esz odda?? nam zu??yty sprz??t, je??li jednocze??nie kupujesz nowy
                    Je??li kupujesz u nas sprz??t elektroniczny lub elektryczny dla gospodarstw domowych, mo??esz bezp??atnie odda?? zu??yty sprz??t. Tw??j zu??yty sprz??t musi by?? tego samego rodzaju i o tych samych funkcjach, co nowy. Na przyk??ad, kiedy kupujesz u nas nowy monitor, mo??esz odda?? nam sw??j stary monitor.
                    <br><br>
                    W jakim stanie powinien by?? sprz??t, kt??ry oddajesz
                    Sprz??t, kt??ry oddajesz, musi by?? kompletny. Nie mo??e by?? te?? zanieczyszczony w spos??b, kt??ry mo??e zagra??a?? ??yciu lub zdrowiu. Oznacza to, ??e mo??emy na przyk??ad odm??wi?? przyj??cia smartfona z wylan?? bateri??.
                    <br><br>
                    Jak odda?? nam zu??yty sprz??t w salonie
                    Je??li robisz zakupy w salonie, zabierz zu??yty sprz??t elektroniczny lub elektryczny ze sob??. Kup nowy sprz??t i oddaj bezp??atnie zu??yty sprz??t elektroniczny lub elektryczny naszemu doradcy.
                    <br><br>
                    Jak przekaza?? nam zu??yty sprz??t przy zakupach z dostaw??
                    Je??li kupujesz sprz??t z dostaw?? ??? zadzwo?? do nas pod 34 377 00 00 lub napisz na x-kom@x-kom.pl. Ustalimy wsp??lnie termin, w kt??rym kurier odbierze od Ciebie bezp??atnie zu??yty sprz??t elektroniczny lub elektryczny z tego samego adresu.
                    <br><br>
                    Gdzie mo??esz odda?? niedu??y zu??yty sprz??t, je??li nie kupujesz nowego
                    Zgodnie z prawem, niedu??y zu??yty sprz??t mo??esz za darmo odda?? w dowolnym wielkopowierzchniowym sklepie z urz??dzeniami dla gospodarstw domowych. Chodzi o sklepy, kt??rych powierzchna handlowa przekracza 400 m??.
                    <br><br>
                    Zasada ta dotyczy takiego sprz??tu elektrycznego i elektronicznego, kt??rego ??aden z wymiar??w nie przekracza 25 cm. Niedu??y zu??yty sprz??t mo??esz odda?? nawet wtedy, gdy nie kupujesz nowego sprz??tu tego samego rodzaju.
                    <br><br>
                    Gdzie mo??esz odda?? bezp??atnie zu??yty sprz??t w pozosta??ych przypadkach
                    Je??li nie kupujesz nowego sprz??tu tego samego rodzaju oraz jeden z wymiar??w sprz??tu przekracza 25 cm ??? zanie?? zu??yty sprz??t do jednego z punkt??w selektywnej zbi??rki odpad??w. W punktach mo??esz zostawi?? bezp??atnie zar??wno wi??kszy, jak i drobny sprz??t elektroniczny lub elektryczny.
                    <br><br>
                    Dlaczego powinni??my dba?? o recykling sprz??tu w gospodarstwach domowych
                    Ka??dy z nas ma wp??yw na to, co dzieje si?? ze starym sprz??tem elektronicznym, kt??rego u??ywamy. Za prawid??owe post??powanie ze zu??ytym sprz??tem odpowiadaj?? nie tylko przedsi??biorcy, ale tak??e konsumenci. Dlatego wa??ne jest, ??eby w Twoim domu segregowa?? i utylizowa?? stary sprz??t w odpowiedni spos??b. Dzi??ki temu pomagasz chroni?? ??rodowisko. Wiele cennych surowc??w, z kt??rych zrobione s?? urz??dzenia, mo??na ponownie wykorzysta??.
                    <br><br>
                    Nigdy nie wyrzucaj zu??ytego sprz??tu wraz z innymi odpadami. Zanie?? go do odpowiedniego punktu zbi??rki takich urz??dze??.
                    <br><br>
                    Podstawa prawna
                    Ustawa o zu??ytym sprz??cie elektrycznym i elektronicznym.
                    </div>
                </div>
                <a class="btn btn-light" data-bs-toggle="collapse" href="#faq2" role="button" aria-expanded="false" aria-controls="collapseExample">Lorem Ipsum</a>
                <div class="faq--tab-text-collapse collapse" id="faq2">
                    <div class="card card-body">
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
                    </div>
                </div>
                <a class="btn btn-light" data-bs-toggle="collapse" href="#faq3" role="button" aria-expanded="false" aria-controls="collapseExample">Lorem Ipsum</a>
                <div class="faq--tab-text-collapse collapse" id="faq3">
                    <div class="card card-body">
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.
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