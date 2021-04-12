<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Day Vahe - Strona głowna</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">


    </head>

    <body>
    <!-- Navigation -->
        <nav id="nav" class="navbar navbar-expand-md py-1 navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" height="40" class="d-inline-block mr-1 align-bottom" alt="Logo firmy DayVahe"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto my-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#banner">Strona główna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-page scrollTo" href="#sec-about">O nas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-page scrollTo" href="#sec-cars">Samochody</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-page scrollTo" href="#testimonials">Opinie</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-lg-auto nav-login">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle d-none d-lg-inline"></i> Panel klienta
                            </a>
                            <div class="dropdown-menu bg-black text-center px-3 pt-3" aria-labelledby="navbarDropdown">
                                <a class="my-dropdown-item" href="klient/utworz_konto.php">Utwórz konto</a><br>
                                <a class="my-dropdown-item" href="klient">Zaloguj</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navigation -->

        <!-- Header Banner -->
        <header id="banner" class="container-fluid my-header">
            <div class="my-header-content">
                <h1 class="text-shadow"> Witaj na stronie wypożyczalni samochodowej - Day Vahe</h1>
            </div>
        </header>
        <!-- End Header Banner -->

        <!-- Section - About us -->

        <!-- End Section - About us -->
        <div id="sec-about" class="container-fluid p-0 m-0 about-us">
            <div class="container p-5">
                <h2 class="section-title mb-2 text-center">O nas</h2>
                <p class="text-center"> Wypożyczalnia samochodów DayVahe powstała w 2009 roku i od początku jej działalności priorytetem była popularyzacja
                    wynajmu aut. Dokładamy wszelkich starań, aby przekonać naszych klientów, że wynajem samochodu to łatwy i tani
                    sposób podróżowania. Oferta DayVahe jest bogata i zróżnicowana. Znajdą u nas coś dla siebie, klienci poszukujący
                    najtańszej oferty jak również wymagający odbiorcy oczekujący samochodów wysokiej klasy.</p>
                <div class="row mt-5">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 rounded">
                        <div class="card">
                            <div class="card-block block-1">
                                <h3 class="card-title">Klienci</h3>
                                <p class="card-text">Mamy już ponad 100 klientów, którzy regularnie wracają po nasze auta. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-block block-2">
                                <h3 class="card-title">Samochody</h3>
                                <p class="card-text">Posiadamy już ponad 12 pojazdów, a nasza flota jest ciągle rozwijana. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-block block-3">
                                <h3 class="card-title">Nagrody</h3>
                                <p class="card-text">W 2020 roku nasza firma otrzymała nagrodę "Dobra firma" w kategori Najbardziej Efektywna Firma</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Cars card -->
        <div id="sec-cars" class="container-fluid p-0 m-0 section-cars">
            <div class="container p-4 h-50">
                <div class="section-header text-center pt-4">
                    <h2>U nas znajdziesz swój wymarzony samochód</h2>
                    <p> Dysponujemy wieloma pojazdami  przeróżnych marek i  klas cenowych. Wychodzimy na przeciw wymaganiom klienta,
                        dlatego w  naszej flocie znajdziesz zarówno niewielkie, ekonomiczne auta, jak i te nieco agresywniejsze, przysparzające wielu emocji podczas jazdy.</p>
                </div>
                <div class="row">

                    <!-- Car 1 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car1.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Hyundai i30</h3>
                                <span class="card-detail-badge">480zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 2 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car2.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Fiat 500</h3>
                                <span class="card-detail-badge">450zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 3 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car3.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Nissan Qashqai</h3>
                                <span class="card-detail-badge">750zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 4 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car4.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">VW Passat</h3>
                                <span class="card-detail-badge">1000zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 5 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car5.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Suzuki Vitara</h3>
                                <span class="card-detail-badge">650zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 6 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car6.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Toyota Corolla</h3>
                                <span class="card-detail-badge">1000zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 7 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car7.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Opel Insignia</h3>
                                <span class="card-detail-badge">1100zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 8 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car8.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Mazda 6</h3>
                                <span class="card-detail-badge">1150zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 9 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car9.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Volvo XC60</h3>
                                <span class="card-detail-badge">1500 zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Car 10 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car10.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Audi A6 Avant</h3>
                                <span class="card-detail-badge">1650zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Cars 11 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car11.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Audi A6</h3>
                                <span class="card-detail-badge">2000zł / doba</span>
                            </div>
                        </div>
                    </div>
                    <!-- Cars 12 -->
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="section-cars-card text-center rounded p-3 py-4">
                            <img src="assets/images/cars/car12.jpg" class="img-fluid avatar avatar-medium shadow rounded" alt="">
                            <div class="content mt-3">
                                <h3 class="title mb-0">Mercedes-Benz E-Class</h3>
                                <span class="card-detail-badge">2450zł / doba</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Cars card -->

        <!--  Section Testimonials -->
        <div id="testimonials" class="container-fluid p-0 m-0 testimonials">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-caption">
                            <p>Obsługa jak zawsze na wysokim poziomie. Samochód z wyższej klasy niż rezerwowałem. Gorąco polecam!</p> <img src="https://i.imgur.com/lE89Aey.jpg">
                            <div id="image-caption">Bolesław Andrzejewski</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Super wypożyczalnia. Bardzo miła obsługa 0 problemów polecam!</p> <img src="https://i.imgur.com/QptVdsp.jpg" class="img-fluid">
                            <div id="image-caption">Marcel Sobczak</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Jak zwykle jesteśmy bardzo zadowoleni zarówno z obsługi oraz autka,nie ma się do czego przyczepić. Gorąco polecamy wszystkim!</p> <img src="https://i.imgur.com/jQWThIn.jpg" class="img-fluid">
                            <div id="image-caption">Fryderyk Wolski</div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-caption">
                            <p>Super oferta. Duży wybór. I jaki przystojny Pan z obsługi. Gorąco wszystkim polecam! :) </p> <img src="assets/images/barti.jpg" class="img-fluid">
                            <div id="image-caption">Bartek A</div>
                        </div>
                    </div>
                </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left'></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right'></i> </a>
            </div>
        </div>
        <!--  Section Testimonials -->

        <!-- Footer -->
        <footer class="bg-dark">
            <div class="container py-5">
                <div class="row  text-sm-left text-md-left">
                    <div class="col-lg-6 col-md-12 ">
                        <h2>Wypożyczalnia samochodów - DayVahe</h2>
                        <div class="text-white">
                            <p class="text-justify">
                                Wypożyczalnia samochodów DayVahe powstała w 2009 roku i od początku jej działalności priorytetem była popularyzacja
                                wynajmu aut. Dokładamy wszelkich starań, aby przekonać naszych klientów, że wynajem samochodu to łatwy i tani
                                sposób podróżowania. Oferta DayVahe jest bogata i zróżnicowana. Znajdą u nas coś dla siebie, klienci poszukujący
                                najtańszej oferty jak również wymagający odbiorcy oczekujący samochodów wysokiej klasy.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 ">
                        <h2>Przydatne linki</h2>
                        <ul class="list-unstyled quick-links">
                            <li><a href="klient/utworz_konto.php"><i class="fa fa-angle-double-right"></i>Utwórz nowe konto klienta</a></li>
                            <li><a href="klient"><i class="fa fa-angle-double-right"></i>Panel logowania klienta</a></li>
                            <li><a href="admin"><i class="fa fa-angle-double-right"></i>Panel logowania pracownika</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 ">
                        <h2>Social media</h2>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i>Instagram</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i>Twitter</a></li>
                        </ul>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p class="h6"> Copyright &copy 2021 Day Vahe</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

            <!-- Modal Box- Create account client success -->
            <div class="modal fade" id="scrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content alert alert-success">
                        <div class="modal-header">
                            <h5 class="modal-title mx-auto" id="exampleModalLabel1">Sukces!</h5>
                        </div>
                        <div class="modal-body text-center">
                            Konto klienta zostało utworzone pomyślnie.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" type="button" data-dismiss="modal">Zamknij</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Box- Create account client success -->


        <!-- Loading Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            //Navbar scrolled
            $(document).scroll(function (){
                $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
            });

            //ScrollTo section
            $(document).ready(function () {
                $(".scrollTo").on('click', function (e) {
                    console.log('clicked');
                    e.preventDefault();
                    var target = $(this).attr('href');
                    $('html, body').animate({
                        scrollTop: ($(target).offset().top - 100)
                    }, 800);
                });
            });
            

        </script>
    </body>
</html>

<?php if(isset($_GET['success'])){ ?>
    <script>
        $('#scrapModal').modal('show');
    </script>
<?php }?>