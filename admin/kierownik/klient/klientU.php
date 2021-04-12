<?php
require_once("../../../config.php");

$errors = 0;

if(is_null($_POST['login'] ) || $_POST['login']=="" || empty($_POST['login'])){
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
if(is_null($_POST['pesel'] ) || $_POST['pesel']==""){
    $errors = $errors + 1;
}

if($errors > 0){
    header("location: modyfikuj.php?error=1&id=".$_POST['id']);
}
else{
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $pesel = $_POST['pesel'];
    $id = $_POST['id'];



    $sql = 'UPDATE klient SET login = :login , email = :email , haslo = :haslo, imie = :imie, nazwisko = :nazwisko, pesel = :pesel WHERE id = :id';
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':login', $login, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':haslo', $haslo, PDO::PARAM_STR);
    $stmt->bindParam(':imie', $imie, PDO::PARAM_STR);
    $stmt->bindParam(':nazwisko', $nazwisko, PDO::PARAM_STR);
    $stmt->bindParam(':pesel', $pesel, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);

    header("location: lista_klientow.php?success=3");


    $stmt->execute();

}

