<?php
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

    $sql = "SELECT * FROM wynajem WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $wynajemID);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $data_zawarcia = date('Y-m-d');
    $okres_wynajmu = 'Od '.$row['data_rozpoczecia'].' do '.$row['data_zakonczenia'];

    $sql2 = "SELECT * FROM umowa ORDER BY id DESC LIMIT 1";
    $stmt2 = $db->query($sql2);
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    $ostatni_numer = explode('/',$row2['numer_umowy']);

    $koszt_calkowity = $row['koszt'];

    $numer_umowy = date('Y').'/'.date('m');

    if(intval(date('m')) > intval($ostatni_numer[1])){
        $numer_umowy .= '/0001';
    }
    else{
        $tmp = intval($ostatni_numer[2]);
        $tmp += 1;
        if($tmp >= 10 && $tmp <100){
            $numer_umowy.='/00'.$tmp;
        }
        if($tmp >= 100 && $tmp <1000){
            $numer_umowy.='/0'.$tmp;
        }
        if($tmp >= 1000 && $tmp <10000){
            $numer_umowy.='/'.$tmp;
        }
        if($tmp < 10){
            $numer_umowy.='/000'.$tmp;
        }
    }


    $sql = "INSERT INTO `umowa` (`id`, `data_zawarcia`, `okres_wynajmu`, `numer_umowy`, `koszt_calkowity`, `wynajem`) VALUES (NULL, ?, ?, ?, ?, ?)";
    $stmt= $db->prepare($sql);
    $stmt->execute([$data_zawarcia,$okres_wynajmu,$numer_umowy,$koszt_calkowity,$wynajemID]);

    $sql2 = "UPDATE `wynajem` SET `umowa` = '1' WHERE `wynajem`.`id` = ?";
    $stmt2= $db->prepare($sql2);
    $stmt2->execute([$wynajemID]);

    header("location: lista_umow.php?success=1");
}

