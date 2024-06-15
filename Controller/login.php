<?php
require '../Models/User.class.php' ;
include_once '../Models/Database.class.php' ;
       if(isset($_POST["email"]) && isset($_POST["password"])){
            $d = new Database() ;
            $email = $_POST["email"] ; 
            $password = $_POST["password"]  ; 
            $array = $d->selectAll("SELECT * FROM user WHERE email = '$email'") ; 
            if(!empty($array)){
                $u = new User($array[0]->username,$password,$email,$array[0]->adresse,$array[0]->telephone) ; 
                $u->logIn($u->password,"../view/user-profile.php");
            }else{
                echo 'Ce compte n\'existe pas ' ;
            }
             
       }
?>