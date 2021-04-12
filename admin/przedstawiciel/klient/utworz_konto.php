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

    <title>Day Vahe - Utwórz konto</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body class="bg-form">
<div class="container-fluid m-0 p-0">
    <div class="add-car-form-container p-4">
        <div class="card w-50 mt-5">
            <div class="card-body">
                <h3 class="card-title text-center font-weight-bold">Stwórz nowe konto klienta</h3>
                <div class="card-text">
                    <form action="klientC.php" method="post">
                        <div class="form-group">
                            <label for="flogin">Login: </label>
                            <input type="text" id="flogin" name="login" class="form-control form-control-sm text-muted" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="femail">Email: </label>
                            <input type="text" id="femail" name="email" class="form-control form-control-sm text-muted" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="fhasło">Hasło: </label>
                            <input type="text" id="fhaslo" name="haslo"  class="form-control form-control-sm text-muted" placeholder="Hasło">
                        </div>
                        <div class="form-group">
                            <label for="fimie">Imie: </label>
                            <input type="text" id="fimie" name="imie" class="form-control form-control-sm text-muted" placeholder="Imie">
                        </div>
                        <div class="form-group">
                            <label for="fnazwisko">Nazwisko: </label>
                            <input type="text" id="fnazwisko" name="nazwisko" class="form-control form-control-sm text-muted" placeholder="Nazwisko">
                        </div>
                        <div class="form-group">
                            <label for="fpesel">PESEL: </label>
                            <input type="text" id="fpesel" name="pesel" class="form-control form-control-sm text-muted" placeholder="PESEL">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Stwórz konto</button>

                        <div class="sign-up">
                            <a href="../../przedstawiciel.php">Powrót do ekranu głównego</a>
                        </div>
                    </form>
                    <div class="text-center text-danger">
                        <?php
                        if($_GET['error'] == 1){
                            echo("Wypełnij wszystkie pola");
                        }
                        if($_GET['error'] == 2){
                            echo("Konto z takim loginem już istnieje");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Loading Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
</body>
</html>
