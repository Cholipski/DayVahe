<?php
session_start();
if(!isset($_SESSION['user'])){
    header("location: ../error.php");
}
ob_start();
require_once("../config.php");
if(isset($_POST['login'])){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    $sth = $db->prepare('SELECT * FROM klient WHERE login=:login limit 1');
    $sth->bindValue(':login', $login, PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    if($user){
        if($password == $user['haslo']){
            $_SESSION['user'] = $login;
            $_SESSION['id'] = $user['id'];
            $_SESSION['time_start_login'] = time();
            header("location: index.php");

        }else{
            header("location: index.php?error=1");
        }
    }else{
        header("location: index.php?error=2");
    }
}
?>