<?php
try{
    $db = new PDO('mysql:host=hosting2049919.online.pro;dbname=00436236_dayvahe', '00436236_dayvahe', '7AuueERM3');
    $db->exec("set names utf8");
}
catch (PDOException $e){
    die ("Error connecting to database!");
}