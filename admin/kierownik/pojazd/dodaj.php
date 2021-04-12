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

    <title>Day Vahe - Dodaj nowy pojazd</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
    <div class="container-fluid m-0 p-0 bg-form">
        <div class="add-car-form-container p-4">
            <div class="card w-50 mt-5">
                <div class="card-body">

                    <h3 class="card-title text-center font-weight-bold">Dodaj nowy pojazd</h3>
                    <div class="card-text">
                        <form action="pojazdC.php" method="post">
                            <div class="form-group">
                                <label for="fcena_za_dobe">Cena za dobę: </label>
                                <input type="text" id="fcena_za_dobe" name="cena_za_dobe" class="form-control form-control-sm text-muted" placeholder="Cena za dobę">
                            </div>
                            <div class="form-group">
                                <label for="fkaucja">Kaucja: </label>
                                <input type="text" id="fkaucja" name="kaucja" class="form-control form-control-sm text-muted" placeholder="Kaucja">
                            </div>
                            <div class="form-group">
                                <label for="fmarka">Marka: </label>
                                <input type="text" id="fmarka" name="marka"  class="form-control form-control-sm text-muted" placeholder="Marka">
                            </div>
                            <div class="form-group">
                                <label for="fmodel">Model: </label>
                                <input type="text" id="fmodel" name="model" class="form-control form-control-sm text-muted" placeholder="Model">
                            </div>
                            <div class="form-group">
                                <label for="fklasa">Klasa pojazdu: </label>
                                <select name="klasa" id="fklasa" class="form-control form-control-sm text-muted" placeholder="Wybierz klasę pojazdu">
                                    <option value="suv">SUV</option>
                                    <option value="premium">premium</option>
                                    <option value="kompakt">kompakt</option>
                                    <option value="dostawcze">dostawcze</option>
                                    <option value="miejskie">miejskie</option>
                                    <option value="srednie">srednie</option>
                                    <option value="van">VAN</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fnumer_rejestracyjny">Numer rejestracyjny: </label>
                                <input type="text" id="fnumer_rejestracyjny" name="numer_rejestracyjny" class="form-control form-control-sm text-muted" placeholder="Numer rejestracyjny">
                            </div>
                            <div class="form-group">
                                <label for="fpaliwo">Paliwo: </label>
                                <select name="paliwo" id="fpaliwo" class="form-control form-control-sm text-muted" placeholder="Wybierz rodzaj paliwa">
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
                            <div class="form-group">
                                <label for="fpojemnosc">Pojemność silnika: </label>
                                <input type="text" id="fpojemnosc" name="pojemnosc" class="form-control form-control-sm text-muted" placeholder="Pojemność silnika">
                            </div>
                            <div class="form-group">
                                <label for="frok_produkcji">Rok produkcji:</label>
                                <input type="text" id="frok_produkcji" name="rok_produkcji" class="form-control form-control-sm text-muted" placeholder="Rok produkcji">
                            </div>
                            <div class="form-group">
                                <label for="fvin">VIN: </label>
                                <input type="text" id="fvin" name="vin" class="form-control form-control-sm text-muted" placeholder="VIN">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Dodaj pojazd</button>

                            <div class="sign-up">
                                <a href="lista_pojazdow.php">Powrót do listy pojazdów</a>
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
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
    <script src="../../../assets/js/jquery.dataTables.min.js"></script>
    </body>
</html>
