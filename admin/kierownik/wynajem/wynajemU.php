<?php
require_once("../../../config.php");
$errors = 0;
if(is_null($_POST['status'] ) || $_POST['status']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: modyfikuj_wynajem.php?error=1&id=".$_POST['id']);
}
else{
    $data_zwrotu= $_POST['data_zwrotu'];
    $status = $_POST['status'];


    $sql = 'UPDATE `wynajem` SET `status` = :status, `data_zwrotu` = :data_zwrotu WHERE `wynajem`.`id` = :id;
';
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_STR);
    $stmt->bindParam(':data_zwrotu', $data_zwrotu, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);

    $stmt->execute();
    header("location: lista_wynajmow.php?success=3");

}


