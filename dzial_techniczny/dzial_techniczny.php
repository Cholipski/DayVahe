<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "pracownik_dzialu_technicznego" ){
    die("Nie masz uprawnień do tej strony");
}
?>

<a href="../admin/logout.php">Wyloguj się</a>
