<?php
require_once("../../../config.php");
$errors = 0;

if(is_null($_POST['login'] ) || $_POST['login']==""){
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
    header("location: dodaj.php?error=1");
}
else{
    $login = $_POST['login'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $stanowisko = $_POST['stanowisko'];

    $sql = "SELECT COUNT(login) AS num FROM pracownik WHERE login = :login";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':login', $login);
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row['num'] > 0){
        header("location: dodaj.php?error=2");
    }else{

        $sql = "INSERT INTO `pracownik` (`id`, `login`, `email`, `haslo`, `imie`, `nazwisko`, `stanowisko`) VALUES (NULL, ?, ?, ?, ?, ?, ?);";
        $stmt = $db->prepare($sql);
        $stmt->execute([$login,$email,$haslo,$imie,$nazwisko,$stanowisko]);

        header("location: lista_pracownikow.php?success=1");
    }

}


