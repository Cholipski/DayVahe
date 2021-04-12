<?php
require_once("../../../config.php");
$errors = 0;
if(is_null($_POST['cena_za_dobe'] ) || $_POST['cena_za_dobe']==""){
    $errors = $errors + 1;

}
if(is_null($_POST['kaucja'] ) || $_POST['kaucja']==""){
    $errors = $errors + 1;

}
if(is_null($_POST['numer_rejestracyjny'] ) || $_POST['numer_rejestracyjny']=="" || empty($_POST['numer_rejestracyjny'])){
    $errors = $errors + 1;

}
if($errors > 0){
    header("location: modyfikuj_pojazd.php?error=1&id=".$_POST['id']);
}
else{
    $cena_za_dobe = $_POST['cena_za_dobe'];
    $kaucja = $_POST['kaucja'];
    $numer_rejestracyjny = $_POST['numer_rejestracyjny'];
    $id = $_POST['id'];


    $sql = 'UPDATE pojazd SET cena_za_dobe = :cena_za_dobe , kaucja = :kaucja , numer_rejestracyjny = :numer_rejestracyjny  WHERE id = :id';
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':cena_za_dobe', $cena_za_dobe, PDO::PARAM_STR);
    $stmt->bindParam(':kaucja', $kaucja, PDO::PARAM_STR);
    $stmt->bindParam(':numer_rejestracyjny', $numer_rejestracyjny, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);



    $stmt->execute();
    header("location: lista_pojazdow.php?success=3");

}


