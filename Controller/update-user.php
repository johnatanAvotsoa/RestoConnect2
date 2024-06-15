<?php
session_start() ; 
require_once '../Models/Database.class.php' ; 
if(isset($_POST["adresse"]) && isset($_POST["email"]) && isset($_POST["telephone"])&& isset($_POST["cuisine"])&& isset($_POST["username"])){
    $name = $_POST["username"] ; 
    $adresse = $_POST["adresse"] ; 
    $tel = $_POST["telephone"] ; 
    $email = $_POST["email"] ; 
    $cuisine = $_POST["cuisine"] ;
    $email = $_SESSION["email"];
    echo $email . $name .$adresse .$tel .$cuisine ;
    $db = new Database();
    $sql = "UPDATE user SET username='$name',email='$email',telephone='$tel',type_cuisine='$cuisine',adresse='$adresse' WHERE email='$email'" ; 
    $db->update($sql,"../view/user-profile.php") ; 
}