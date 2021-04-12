<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik" ){
    header("location: ../../error.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - Umowy</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<div class="d-flex" id="wrapper">
    <!-- Left bar - wrapper -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Zarządzaj </div>
        <div class="list-group list-group-flush">
            <a href="../klient/lista_klientow.php" class="list-group-item list-group-item-action bg-light">Klienci</a>
            <a href="../pojazd/lista_pojazdow.php" class="list-group-item list-group-item-action bg-light">Pojazdy</a>
            <a href="../pracownik/lista_pracownikow.php" class="list-group-item list-group-item-action bg-light">Pracownicy</a>
            <a href="../wynajem/lista_wynajmow.php" class="list-group-item list-group-item-action bg-light">Wynajmy</a>
            <a href="lista_umow.php" class="list-group-item list-group-item-action bg-light">Umowy</a>
        </div>
    </div>
    <!-- End Left bar - wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <!-- Top navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Zarządzaj</button>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <h3 class="ml-auto">Panel zarządzania - Kierownik</h3>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../logout.php">Wyloguj </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Top navigation -->
        <div class="container-fluid text-center" style="overflow-x:auto;">
            <h3 class="pt-5">Umowy </h3>
            <div class="text-center pt-3 pb-3 font-weight-bold">
                <?php
                if($_GET['success'] == 1){
                    echo("<div class='my-alert alert alert-success'> 
                            Wygenerowano umowę
                        </div> ");
                }
                ?>
            </div>
            <?php include('umowaR.php');?>
        </div>

    </div>
    <!-- /#page-content-wrapper -->
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Szczegóły umowy</h4>
                </div>
                <div class="modal-body" id="umowa_detail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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

    $(document).ready(function(){
        $('.view_data').click(function(){
            var id = $(this).attr("id");
            $.ajax({
                url:"selectUmowa.php",
                method:"post",
                data:{id:id},
                success:function(data){
                    $('#umowa_detail').html(data);
                    $('#dataModal').modal("show");
                }
            });
        });
    });

    setTimeout(function () {
        // Closing the alert
        $('.my-alert').alert('close');
    }, 4000);
    
</script>
</body>
</html>
