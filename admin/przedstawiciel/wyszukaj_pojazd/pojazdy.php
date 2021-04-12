<?php
require_once("../../../config.php");
if(isset($_GET)){
    $keyA = array();
    $valueA = array();
    $Cena = array();
    foreach($_GET as $key => $value)
    {
        if($value != ""){
            if($key == "cena_min"){
                array_push($Cena,$value);
            }
            else if($key == "cena_max"){
                array_push($Cena,$value);
            }
            else{
                array_push($keyA,$key);
                array_push($valueA,$value);
            }
        }
    }
    //print_r($keyA);
    //print_r($valueA);
    //print_r($Cena);
    if(count($Cena) == 2){
        if(count($keyA) == 1){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else if(count($keyA) == 2){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else if(count($keyA) == 3){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else if(count($keyA) == 4){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else if(count($keyA) == 5){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]' AND `$keyA[4]` = '$valueA[4]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else if(count($keyA) == 6){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]' AND `$keyA[4]` = '$valueA[4]' AND `$keyA[5]` = '$valueA[5]' AND `cena_za_dobe` BETWEEN '$Cena[0]' AND '$Cena[1]'";
        }
        else{
            $sql = "SELECT * FROM pojazd";
        }
    }
    else{
        if(count($keyA) == 1){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]'";
        }
        else if(count($keyA) == 2){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]'";
        }
        else if(count($keyA) == 3){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]'";
        }
        else if(count($keyA) == 4){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]'";
        }
        else if(count($keyA) == 5){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]' AND `$keyA[4]` = '$valueA[4]'";
        }
        else if(count($keyA) == 6){
            $sql = "SELECT * FROM pojazd WHERE `$keyA[0]` = '$valueA[0]' AND `$keyA[1]` = '$valueA[1]' AND `$keyA[2]` = '$valueA[2]' AND `$keyA[3]` = '$valueA[3]' AND `$keyA[4]` = '$valueA[4]' AND `$keyA[5]` = '$valueA[5]'";
        }
        else{
            $sql = "SELECT * FROM pojazd";
        }
    }



}
$stmt = $db->query($sql);
?>

<table class="table table-bordered table-striped table-hover text-uppercase table-sm">
    <thead>
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
    </tr>
    </thead>
    <?php
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<tr>'.'<th scope="row" class="align-middle">'.$row['id'].'</th>'.'<td class="align-middle">'.$row['cena_za_dobe'].'</td>'
            .'<td class="align-middle">'.$row['kaucja'].'</td>'.'<td class="align-middle">'.$row['klasa'].'</td>'
            .'<td class="align-middle">'.$row['marka'].'</td>'.'<td class="align-middle">'.$row['model'].'</td>'
            .'<td class="align-middle">'.$row['numer_rejestracyjny'].'</td>'.'<td class="align-middle">'.$row['paliwo'].'</td>'
            .'<td class="align-middle">'.$row['pojemnosc'].'</td>'.'<td class="align-middle">'.$row['rok_produkcji'].'</td>'
            .'<td class="align-middle">'.$row['vin'].'</td>'.'</tr>';
    }

    ?>
</table>

