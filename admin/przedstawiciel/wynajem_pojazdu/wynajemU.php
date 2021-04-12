<?php
session_start();
require_once("../../../config.php");

$errors = 0;

if(is_null($_POST['wynajem'] ) || $_POST['wynajem']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: dodaj.php?error=1");
}
else{
    $wynajemID = $_POST['wynajem'];

    $sql = "UPDATE `wynajem` SET `status` = 'wynajety', `przedstawiciel` = ? WHERE `wynajem`.`id` = ?";
    $stmt= $db->prepare($sql);
    $stmt->execute([$_SESSION['id'], $wynajemID]);

    header("location: ../../przedstawiciel.php?success=3");
}

