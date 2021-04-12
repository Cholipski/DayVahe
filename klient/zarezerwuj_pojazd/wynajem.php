<?php
session_start();
require_once("../../config.php");
$errors = 0;

if(is_null($_POST['pojazd'] ) || $_POST['pojazd']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['data_rozpoczecia'] ) || $_POST['data_rozpoczecia']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['data_zakonczenia'] ) || $_POST['data_zakonczenia']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: ../zarezerwuj_pojazd.php?error=1");
}
else{
    $pojazd = $_POST['pojazd'];
    $data_rozpoczecia = $_POST['data_rozpoczecia'];
    $data_zakonczenia = $_POST['data_zakonczenia'];

    if($data_zakonczenia < $data_rozpoczecia){
        header("location: ../zarezerwuj_pojazd.php?error=2");
    }
    elseif($data_rozpoczecia < date("Y-m-d")){
        header("location: ../zarezerwuj_pojazd.php?error=3");
    }
    else{
        $earlier = new DateTime($data_rozpoczecia);
        $later = new DateTime($data_zakonczenia);
        $diff = $later->diff($earlier)->format("%a");
        $diff = $diff + 1;

        $sql = 'Select *  FROM `pojazd` WHERE `pojazd`.`id` = ?';
        $stmt= $db->prepare($sql);
        $stmt->execute(array($pojazd));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $koszt = $row['cena_za_dobe'] * $diff;

        $status = 'zarezerwowany';

        $klient = $_SESSION['id'];

        $sql = "INSERT INTO `wynajem` (`id`, `data_rozpoczecia`, `data_zakonczenia`, `koszt`, `status`, `data_zwrotu`, `klient`, `pojazd`, `przedstawiciel`) VALUES (NULL, ?, ?, ?, ?, NULL, ?, ?, NULL);";
        $stmt = $db->prepare($sql);
        $stmt->execute([$data_rozpoczecia,$data_zakonczenia,$koszt,$status,$klient,$pojazd]);

        header("location: ../historia_wynajmow.php?success=1");
    }

}