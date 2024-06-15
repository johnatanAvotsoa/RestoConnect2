<?php
    require_once '../Models/Database.class.php' ; 
    if(isset($_GET["adresse"]) && isset($_GET["email"]) && isset($_GET["telephone"])&& isset($_GET["cuisine"])&& isset($_GET["name"])){
        $name = $_GET["name"] ; 
        $adresse = $_GET["adresse"] ; 
        $tel = $_GET["telephone"] ; 
        $email = $_GET["email"] ; 
        $cuisine = $_GET["cuisine"] ;

    }else{
        exit("valuer vide, update impossible") ; 
    }
?>