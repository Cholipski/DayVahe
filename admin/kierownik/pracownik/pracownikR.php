<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik") {
    header("location: ../../error.php");
}

require_once("../../../config.php");
$sql = "SELECT * FROM pracownik";
$stmt = $db->query($sql);
?>
<table class="table table-bordered table-striped table-hover table-sm">
    <thead class="text-uppercase">
    <tr>
        <th colspan="100%"><a href="dodaj.php" class="btn btn-success">Dodaj pracownika</a></th>
    </tr>
    <tr>
        <th scope="col">#</th>
        <th scope="col">login</th>
        <th scope="col">email</th>
        <th scope="col">hasło</th>
        <th scope="col">imie</th>
        <th scope="col">nazwisko</th>
        <th scope="col">stanowisko</th>
        <th rowspan="2"></th>
        <th></th>
    </tr>
    </thead>
    <?php
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>'.'<th scope="row" class="align-middle">'.$row['id'].'</th>'.'<td class="align-middle">'.$row['login'].'</td>'
            .'<td class="align-middle">'.$row['email'].'</td>'.'<td class="align-middle">'.$row['haslo'].'</td>'
            .'<td class="align-middle">'.$row['imie'].'</td>'.'<td class="align-middle">'.$row['nazwisko'].'</td>'
            .'<td class="align-middle">'.$row['stanowisko'].'</td>'.'<td><a href="modyfikuj.php?id='.$row['id'].'" class="btn btn-warning">Edytuj</a></td>'
            .'<td><a href="#scrapModal" data-toggle="modal" data-table="'.$row['id'].'" class="btn btn-danger align-middle">Kasuj</a></td>'.'</tr>';
    }

    ?>
</table>