<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../../error.php");
}
require_once("../config.php");
$sql = "SELECT * FROM wynajem WHERE `klient` = '{$_SESSION['id']}'";
$stmt = $db->query($sql);
?>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead class="text-uppercase">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Data rozpoczęcia</th>
        <th scope="col">Data zakończenia</th>
        <th scope="col">Koszt</th>
        <th scope="col">Status</th>
        <th scope="col">Data zwrotu</th>
        <th scope="col">Pojazd</th>
        <th scope="col">Przedstawiciel handlowy</th>
    </tr>
    </thead>
    <?php
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>'.'<th scope="row" class="align-middle">'.$row['id'].'</th>'.'<td class="align-middle">'.$row['data_rozpoczecia'].'</td>'
            .'<td class="align-middle">'.$row['data_zakonczenia'].'</td>'.'<td class="align-middle">'.$row['koszt'].'</td>'
            .'<td class="align-middle">'.$row['status'].'</td>'.'<td class="align-middle">'.$row['data_zwrotu'].'</td>'
            .'<td class="align-middle"><input type="button" name="view" value="view" id="'.$row["pojazd"].'" class="btn btn-info btn-xs view_data2" /></td>'
            .'<td class="align-middle"><input type="button" name="view" value="view" id="'.$row["przedstawiciel"].'" class="btn btn-info btn-xs view_data3" /></td>'.'</tr>';
    }

    ?>
</table>