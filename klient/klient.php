<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../error.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Day Vahe - Panel klienta</title>
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
                    <a href="zarzadzaj_kontem.php" class="list-group-item list-group-item-action bg-light">Zarządzaj kontem</a>
                    <a href="wyszukaj_pojazd.php" class="list-group-item list-group-item-action bg-light">Wyszukaj pojazd</a>
                    <a href="historia_wynajmow.php" class="list-group-item list-group-item-action bg-light">Historia Wynajmów</a>
                    <a href="zarezerwuj_pojazd.php" class="list-group-item list-group-item-action bg-light">Zarezerwuj pojazd</a>

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
                        <h3 class="ml-auto">Panel klienta</h3>
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Wyloguj </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Top navigation -->

                <div class="container-fluid text-center" style="overflow-x:auto;">
                    <h1>Witaj w panelu klienta! </h1>
                    <p> Naciśnij przycisk "Menu", aby przejść do dostępnych opcji.</p>
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
        </script>
    </body>
</html>
