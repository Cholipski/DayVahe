<?php
require_once("../../../config.php");

$errors = 0;

if(is_null($_POST['cena_za_dobe'] ) || $_POST['cena_za_dobe']==""){
    $errors = $errors + 1;
}

if(is_null($_POST['kaucja'] ) || $_POST['kaucja']==""){
    $errors = $errors + 1;
}

if(is_null($_POST['marka'] ) || $_POST['marka']==""){
    $errors = $errors + 1;
}

if(is_null($_POST['model'] ) || $_POST['model']==""){
    $errors = $errors + 1;
}

if(is_null($_POST['paliwo'] ) || $_POST['paliwo']==""){
    $errors = $errors + 1;
}

if(is_null($_POST['numer_rejestracyjny'] ) || $_POST['numer_rejestracyjny']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['klasa'] ) || $_POST['klasa']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['pojemnosc'] ) || $_POST['pojemnosc']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['rok_produkcji'] ) || $_POST['rok_produkcji']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['vin'] ) || $_POST['vin']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: dodaj.php?error=1");
}
else{
    $cena_za_dobe = $_POST['cena_za_dobe'];
    $kaucja = $_POST['kaucja'];
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $paliwo = $_POST['paliwo'];
    $numer_rejestracyjny = $_POST['numer_rejestracyjny'];
    $klasa = $_POST['klasa'];
    $pojemonsc = $_POST['pojemnosc'];
    $rok_produkcji = $_POST['rok_produkcji'];
    $vin = $_POST['vin'];

    $sql = "INSERT INTO `pojazd` (`id`, `cena_za_dobe`, `kaucja`, `klasa`, `marka`, `model`, `numer_rejestracyjny`, `paliwo`, `pojemnosc`, `rok_produkcji`, `vin`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$cena_za_dobe,$kaucja,$klasa,$marka,$model,$numer_rejestracyjny,$paliwo,$pojemonsc,$rok_produkcji,$vin]);

    header("location: lista_pojazdow.php?success=1");
}

