<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}

require_once("../../../config.php");
$sql = "SELECT * FROM umowa";
$stmt = $db->query($sql);

?>

<table class="table table-bordered table-striped table-hover text-uppercase table-sm">
    <thead>
    <tr>
        <th colspan="100%"><a href="dodaj.php" class="btn btn-success">Generuj umowę</a></th>
    </tr>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Numer umowy</th>
        <th scope="col">Data zawarcia</th>
        <th scope="col">Okres wynajmu</th>
        <th scope="col">Koszt całkowity</th>
        <th></th>
    </tr>
    </thead>
    <?php
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>'.'<th scope="row" class="align-middle">'.$row['id'].'</th>'.'<td class="align-middle">'.$row['numer_umowy'].'</td>'
            .'<td class="align-middle">'.$row['data_zawarcia'].'</td>'.'<td class="align-middle">'.$row['okres_wynajmu'].'</td>'
            .'<td class="align-middle">'.$row['koszt_calkowity'].'<td><input type="button" name="view" value="Wyświetl szczegóły" id="'.$row["wynajem"].'" class="btn btn-secondary btn-xs view_data" /></td>'.'</tr>';
    }

    ?>
</table>

