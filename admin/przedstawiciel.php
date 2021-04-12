<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "przedstawiciel_handlowy" ){
    die("Nie masz uprawnień do tej strony");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - Panel zarządzania</title>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="d-flex toggled" id="wrapper">
    <!-- Left bar - wrapper -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Menu</div>
        <div class="list-group list-group-flush">
            <a href="przedstawiciel/klient/utworz_konto.php" class="list-group-item list-group-item-action bg-light">Utwórz konto klienta</a>
            <a href="przedstawiciel/wyszukaj_pojazd/lista_pojazdow.php" class="list-group-item list-group-item-action bg-light">Wyszukaj pojazd</a>
            <a href="przedstawiciel/wynajem_pojazdu/wynajmij.php" class="list-group-item list-group-item-action bg-light">Wynajmij pojazd na podstawie rezerwacji</a>
            <a href="przedstawiciel/nowy_wynajem/dodaj.php" class="list-group-item list-group-item-action bg-light">Wynajmij pojazd bez rezerwacji</a>
            <a href="przedstawiciel/zwrot_pojazdu/przyjmij.php" class="list-group-item list-group-item-action bg-light">Przyjmij zwrot pojazdu</a>
            <a href="przedstawiciel/umowa/lista_umow.php" class="list-group-item list-group-item-action bg-light">Umowy</a>
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
                <h3 class="ml-auto">Panel przedstawiciela handlowego</h3>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Wyloguj </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Top navigation -->

        <div class="container-fluid">
            <div class="content p-5 text-center">
                <div class="text-center  m-4 pb-3 font-weight-bold">
                    <?php
                    if($_GET['success'] == 1){
                        echo("<div class='my-alert alert alert-success'> 
                            Dodano nowego klienta
                        </div> ");
                    }

                    if($_GET['success'] == 2){
                        echo("<div class='alert alert-success alert-dismissible fade show'> 
                            Pojazd został zwrócony. Kaucja do zwrotu: ".$_GET['kaucja']."
                             <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                 <span aria-hidden='true'>&times;</span>
                             </button>
                        </div> ");
                    }
                    if($_GET['success'] == 3){
                        echo("<div class='my-alert alert alert-success'> 
                            Pojazd został wynajęty 
                        </div> ");
                    }
                    ?>
                </div>
                <h1>Witaj w panelu przedstawiciela handlowego! </h1>
                <p> Naciśnij przycisk "Menu", aby przejść do konkretnych funkcji.</p>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- Loading Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/Chart.min.js"></script>
<script src="../assets/js/fileinput.js"></script>
<script src="../assets/js/chartData.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    setTimeout(function () {
        // Closing the alert
        $('.my-alert').alert('close');
    }, 4000);
</script>
</body>
</html>

