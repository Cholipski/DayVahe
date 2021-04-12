<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}
require_once("../../../config.php");
$sql = "SELECT * FROM pojazd";
$stmt = $db->query($sql);
?>

    <table class="table table-bordered table-striped table-hover text-uppercase table-sm">
        <thead>
        <tr>
            <th colspan="100%"><a href="dodaj.php" class="btn btn-success">Dodaj pojazd</a></th>
        </tr>
        <tr>
            <th scope="col">#</th>
            <th scope="col">cena_za_dobe</th>
            <th scope="col">kaucja</th>
            <th scope="col">klasa</th>
            <th scope="col">marka</th>
            <th scope="col">model</th>
            <th scope="col">numer_rejestracyjny</th>
            <th scope="col">paliwo</th>
            <th scope="col">pojemność</th>
            <th scope="col">rok_produkcji</th>
            <th scope="col">vin</th>
            <th rowspan="2"></th>
            <th></th>
        </tr>
        </thead>
        <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo '<tr>'.'<th scope="row" class="align-middle">'.$row['id'].'</th>'.'<td class="align-middle">'.$row['cena_za_dobe'].'</td>'
                .'<td class="align-middle">'.$row['kaucja'].'</td>'.'<td class="align-middle">'.$row['klasa'].'</td>'
                .'<td class="align-middle">'.$row['marka'].'</td>'.'<td class="align-middle">'.$row['model'].'</td>'
                .'<td class="align-middle">'.$row['numer_rejestracyjny'].'</td>'.'<td class="align-middle">'.$row['paliwo'].'</td>'
                .'<td class="align-middle">'.$row['pojemnosc'].'</td>'.'<td class="align-middle">'.$row['rok_produkcji'].'</td>'
                .'<td class="align-middle">'.$row['vin'].'</td>'.'<td><a href="modyfikuj.php?id='.$row['id'].'" class="btn btn-warning">Edytuj</a></td>'
                .'<td><a href="#scrapModal" data-toggle="modal" data-table="'.$row['id'].'" class="btn btn-danger align-middle">Kasuj</a></td>'.'</tr>';
        }

        ?>
    </table>

