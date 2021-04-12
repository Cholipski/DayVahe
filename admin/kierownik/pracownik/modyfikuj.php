<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}

require_once("../../../config.php");
if(!isset($_GET['id'])){
    header("location: lista_pracownikow.php");
}
else{
    $stmt = $db->prepare("SELECT * FROM pracownik WHERE id=:id");
    $stmt->execute(array(':id' => $_GET['id']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - Modyfikuj dane pracownika</title>
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

                <h3 class="card-title text-center font-weight-bold">Modyfikuj dane pracownika</h3>
                <div class="text-center text-danger">
                    <?php
                    if($_GET['error'] == 1){
                        echo("Wypełnij wszystkie pola!");
                    }
                    ?>
                </div>
                <div class="card-text">
                    <form action="pracownikU.php" method="post">
                        <div class="form-group">
                            <label for="fid">Id:</label>
                            <input type="text" id="fid" name="id" readonly <? echo("value=".$row['id']) ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="flogin">Login </label>
                            <input type="text" id="flogin" name="login" <? echo("value=".$row['login']) ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="femail">Email: </label>
                            <input type="text" id="femail"  name="email" <? echo("value=".$row['email']) ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fhaslo">Hasło: </label>
                            <input  type="text" id="fhaslo" <? echo("value=".$row['haslo']) ?> name="haslo" class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fimie">Imię: </label>
                            <input type="text" id="fimie" name="imie" <? echo("value="."'".$row['imie']."'") ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fnazwisko">Nazwisko: </label>
                            <input type="text" id="fnazwisko" name="nazwisko" <? echo("value="."'".$row['nazwisko']."'") ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fstanowisko">stanowisko: </label>
                            <select name="stanowisko" id="fstanowisko" class="form-control form-control-sm text-muted" >
                                <option <? if($row['stanowisko'] == "kierownik") echo("selected") ?> value="kierownik">kierownik</option>
                                <option <? if($row['stanowisko'] == "przedstawiciel_handlowy") echo("selected") ?> value="przedstawiciel_handlowy">przedstawiciel handlowy</option>
                                <option <? if($row['stanowisko'] == "pracownik_dzialu_technicznego") echo("selected") ?> value="pracownik_dzialu_technicznego">pracownik dzialu technicznego</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Modyfikuj</button>

                        <div class="sign-up">
                            <a href="lista_pracownikow.php">Powrót do listy pracowników</a>
                        </div>
                    </form>
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

