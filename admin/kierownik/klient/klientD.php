<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['stanowisko'] != "kierownik" ){
    header("location: ../../error.php");
}

require_once("../../../config.php");
if(isset($_GET['id'])){
    $sql = 'DELETE FROM `klient` WHERE `klient`.`id` = ?';
    $stmt= $db->prepare($sql);
    $stmt->execute([$_GET['id']]);
    header("location: lista_klientow.php?success=2");
}