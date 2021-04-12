<?php
require_once("../../../config.php");
$errors = 0;
if(is_null($_POST['login'] ) || $_POST['login']=="" ){
    $errors = $errors + 1;
}
if(is_null($_POST['haslo'] ) || $_POST['haslo']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['imie'] ) || $_POST['imie']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['nazwisko'] ) || $_POST['nazwisko']==""){
    $errors = $errors + 1;
}
if(is_null($_POST['stanowisko'] ) || $_POST['stanowisko']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: modyfikuj_pracownika.php?error=1&id=".$_POST['id']);
}
else{
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stanowisko = $_POST['stanowisko'];
    $id = $_POST['id'];



    $sql = 'UPDATE pracownik SET login = :login , email = :email , haslo = :haslo, imie = :imie, nazwisko = :nazwisko, stanowisko = :stanowisko WHERE id = :id';
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':haslo', $haslo, PDO::PARAM_STR);
    $stmt->bindParam(':imie', $imie, PDO::PARAM_STR);
    $stmt->bindParam(':nazwisko', $nazwisko, PDO::PARAM_STR);
    $stmt->bindParam(':stanowisko', $stanowisko, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);

    header("location: lista_pracownikow.php?success=3");


    $stmt->execute();
}


