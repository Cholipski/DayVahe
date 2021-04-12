<?php
require_once("../../../config.php");

$errors = 0;

if(is_null($_POST['wynajem'] ) || $_POST['wynajem']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: przyjmij.php?error=1");
}
else{
    $wynajemID = $_POST['wynajem'];
    $data_zwrotu = date('Y-m-d');

    $stmtp = $db->prepare("SELECT pojazd FROM `wynajem` WHERE id=:id");
    $stmtp->execute(array(':id' => $wynajemID));
    $rowp = $stmtp->fetch(PDO::FETCH_ASSOC);

    $stmtk = $db->prepare("SELECT kaucja FROM `pojazd` WHERE id=:id");
    $stmtk->execute(array(':id' => $rowp['pojazd']));
    $rowk = $stmtk->fetch(PDO::FETCH_ASSOC);

    $sql = "UPDATE `wynajem` SET `status` = 'zwrocony', `data_zwrotu` = ? WHERE `wynajem`.`id` = ?";
    $stmt= $db->prepare($sql);
    $stmt->execute([$data_zwrotu,  $wynajemID]);

    header("location: ../../przedstawiciel.php?success=2&kaucja=".$rowk['kaucja']);
}

