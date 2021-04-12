<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "przedstawiciel_handlowy" ){
    header("location: ../../error.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - Wyszukaj pojazd</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<div class="d-flex toggled" id="wrapper">
    <!-- Left bar - wrapper -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Menu</div>
        <div class="list-group list-group-flush">
            <a href="../klient/utworz_konto.php" class="list-group-item list-group-item-action bg-light">Utwórz konto klienta</a>
            <a href="lista_pojazdow.php" class="list-group-item list-group-item-action bg-light">Wyszukaj pojazd</a>
            <a href="../wynajem_pojazdu/wynajmij.php" class="list-group-item list-group-item-action bg-light">Wynajmij pojazd na podstawie rezerwacji</a>
            <a href="../wynajem_pojazdu/wynajmij.php" class="list-group-item list-group-item-action bg-light">Wynajmij pojazd bez rezerwacji</a>
            <a href="../zwrot_pojazdu/przyjmij.php" class="list-group-item list-group-item-action bg-light">Przyjmij zwrot pojazdu</a>
            <a href="../umowa/lista_umow.php" class="list-group-item list-group-item-action bg-light">Umowy</a>
        </div>
    </div>
    <!-- End Left bar - wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- Top navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Menu</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <h3 class="ml-auto">Panel wyświetlania pojazdów</h3>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Wyloguj </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Top navigation -->

        <div class="container-fluid text-center" style="overflow-x:auto;">
            <h3 class="pt-5">Lista pojazdów </h3>

            <div class="container">
                <button type="button" class="btn btn-outline-primary mb-3" data-toggle="collapse" data-target="#demo">Filtry</button>
                <div id="demo" class="collapse text-justify">
                    <h4 >Opcje filtrowania</h4>
                    <form action="" method="get">
                        <div class="row p-2">
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="cena_min" class="font-weight-bold">Cena minimalna: </label>
                                <input type="text" class="form-control" name="cena_min" placeholder="Cena minimalna">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="cena_max" class="font-weight-bold">Cena maksymalna: </label>
                                <input type="text" class="form-control" name="cena_max" placeholder="Cena maksymalna">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="marka" class="font-weight-bold">Marka: </label>
                                <input type="text" class="form-control" name="marka" placeholder="Marka pojazdu">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="model" class="font-weight-bold">Model: </label>
                                <input type="text" class="form-control" name="model" placeholder="Model pojazdu">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="pojemnosc" class="font-weight-bold">Pojemność silnika: </label>
                                <input type="text" class="form-control" name="pojemnosc" placeholder="Pojemność silnika">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="paliwo" class="font-weight-bold">Rodzaj paliwa: </label>
                                <select name="paliwo" id="fpaliwo" class="form-control form-control-sm text-muted" placeholder="Wybierz rodzaj paliwa">
                                    <option value="" selected>Wybierz rodzaj paliwa</option>
                                    <option value="benzyna">Benzyna</option>
                                    <option value="benzyna+cng">Benzyna+CNG</option>
                                    <option value="benzyna+lpg">Benzyna+LPG</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="elektryczne">Elektryczne</option>
                                    <option value="etanol">Etanol</option>
                                    <option value="hybryda">Hybryda</option>
                                    <option value="wodor">wodór</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="klasa" class="font-weight-bold">Klasa pojazdu: </label>
                                <select name="klasa" id="klasa" class="form-control form-control-sm text-muted" placeholder="Wybierz klasę pojazdu">
                                    <option value="" selected>Wybierz klasę pojazdu</option>
                                    <option value="suv">SUV</option>
                                    <option value="premium">premium</option>
                                    <option value="kompakt">kompakt</option>
                                    <option value="dostawcze">dostawcze</option>
                                    <option value="miejskie">miejskie</option>
                                    <option value="srednie">srednie</option>
                                    <option value="van">VAN</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right mb-3">Zastosuj</button>
                    </form>
                </div>
            </div>

            <?php include('pojazdy.php');?>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Loading Scripts -->
<script src="../../../assets/js/jquery.min.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../../assets/js/jquery.dataTables.min.js"></script>
<script src="../../../assets/js/Chart.min.js"></script>
<script src="../../../assets/js/fileinput.js"></script>
<script src="../../../assets/js/chartData.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
