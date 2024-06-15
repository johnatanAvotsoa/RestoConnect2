<?php
require_once '../Models/Restaurant.class.php' ; 
    if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["adresse"]) && isset($_POST["cuisine"]) && isset($_POST["password"])){
        $email = $_POST["email"]; 
        $name = $_POST["username"]; 
        $adresse = $_POST["adresse"]; 
        $cuisine = $_POST["cuisine"];
        $password = $_POST["password"];
        $r = new Restaurant($name,$password,$email,$adresse,"non-défini",$cuisine,"username-svgrepo-com.svg") ;
        $r->insertToDatabase("../view/restaurant-login.html");
    }
?>