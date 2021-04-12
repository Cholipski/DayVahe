<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}

require_once("../../../config.php");
if(!isset($_GET['id'])){
    header("location: lista_wynajmow.php");
}
else{
    $stmt = $db->prepare("SELECT * FROM wynajem WHERE id=:id");
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

    <title>Day Vahe - Modyfikuj wynajem</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<div class="container-fluid m-0 p-0 bg-form" style="height: 100vh;">
    <div class="add-car-form-container">
        <div class="card w-50 mt-5">
            <div class="card-body">

                <h3 class="card-title text-center font-weight-bold">Modyfikuj wynajem</h3>
                <div class="text-center text-danger">
                    <?php
                    if($_GET['error'] == 1){
                        echo("Wypełnij wszystkie pola!");
                    }
                    ?>
                </div>
                <div class="card-text">
                    <form action="wynajemU.php" method="post">
                        <div class="form-group">
                            <label for="fid">Id:</label>
                            <input type="text" id="fid" name="id" readonly <? echo("value=".$row['id']) ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fdata_zwrotu">Data zwrotu:</label>
                            <input type="date" id="fdata_zwrotu" name="data_zwrotu"  <? echo("value='".$row['data_zwrotu']."'") ?> class="form-control form-control-sm text-muted">
                        </div>
                        <div class="form-group">
                            <label for="fstatus">status: </label>
                            <select name="status" id="fstatus" class="form-control form-control-sm text-muted" >
                                <option <? if($row['status'] == "zarezerwowany") echo("selected") ?> value="zarezerwowany">zarezerwowany</option>
                                <option <? if($row['status'] == "wynajety") echo("selected") ?> value="wynajety">wynajety</option>
                                <option <? if($row['status'] == "zwrocony") echo("selected") ?> value="zwrocony">zwrocony</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Modyfikuj</button>

                        <div class="sign-up">
                            <a href="lista_wynajmow.php">Powrót do listy wynajmów</a>
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

