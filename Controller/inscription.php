<?php
require '../Models/User.class.php' ; 
       if(isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["telephone"]) && isset($_POST["password"])){
            $email = $_POST["email"] ; 
            $telephone = $_POST["telephone"] ; 
            $username = $_POST["username"] ;
            $password = $_POST["password"] ; 
            $u = new User($username,$password,$email,"non renseigné",$telephone) ;
            $u->insertToDatabase("../view/login-user.html") ; 
             
       }
?>     