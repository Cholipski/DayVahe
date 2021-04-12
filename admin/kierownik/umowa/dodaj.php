<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}

require_once("../../../config.php");
$stmt_k = $db->prepare("SELECT * FROM klient RIGHT JOIN wynajem ON wynajem.klient = klient.id WHERE wynajem.umowa = 0");
$stmt_k->execute();


?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - Dodaj nowy wynajem</title>
    <link rel="stylesheet" href="../../../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<div class="container-fluid m-0 p-0 bg-form" style="height: 100vh">
    <div class="add-car-form-container p-4">
        <div class="card w-50 mt-5">
            <div class="card-body">
                <h3 class="card-title text-center font-weight-bold">Dodaj nową umowę</h3>
                <div class="card-text">
                    <form action="umowaC.php" method="post">
                        <div class="form-group">
                            <label for="fwynajem">Wybierz wynajem: </label>
                            <select name="wynajem" id="fwynajem" class="selectpicker form-control form-control-sm" data-live-search="true">
                                <option value="" disabled selected class="pl-3">Wybierz wynajem</option>
                                <?php
                                while($row = $stmt_k->fetch(PDO::FETCH_ASSOC)){
                                    echo '<option class="pl-3" data-tokens="'.$row['data_rozpoczecia'].' '.$row['id'].' '.$row['pesel'].' '.$row['nazwisko'].' '.$row['imie'].'"
                                    value='.$row['id'].'>'.$row['id'].' '.$row['data_rozpoczecia'].' '.$row['data_zakonczenia'].' '.$row['imie'].' '.$row['nazwisko'].' '.$row['pesel'].' '.$row['email'].'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Generuj umowę</button>
                        <div class="sign-up">
                            <a href="lista_umow.php">Powrót do listy umów</a>
                        </div>
                    </form>
                    <div class="text-center text-danger">
                        <?php
                        if($_GET['error'] == 1){
                            echo("Wypełnij wszystkie pola");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Loading Scripts -->

<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script>
    $(function () {
        $('select').selectpicker();
    });
</script>
</body>
</html>
