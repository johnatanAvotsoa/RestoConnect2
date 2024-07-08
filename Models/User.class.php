<?php
session_start();
require 'Database.class.php' ;
    class User extends Database { 
        public $username ; 
        public $password ; 
        public $email ;
        public $adresse ; 
        public $telephone ; 
        public $preferedCuisine ; 
        public function __construct($username,$password,$email,$adresse,$telephone,$preferedCuisine){
            Database::__construct() ; 
            $this->username = $username ; 
            $this->password = $password ;
            $this->email = $email ; 
            $this->adresse = $adresse ; 
            $this->telephone = $telephone ; 
            $this->preferedCuisine = $preferedCuisine ?? "Pas défini" ; 
        }
        public function getName(){
            return $this->username ; 
        }

        public function insertToDatabase($path){
            echo '1' ; 
            if(empty($this->selectAll("SELECT * FROM user WHERE email = '$this->email'"))){
                $arr = [$this->username,password_hash($this->password,PASSWORD_DEFAULT),$this->email,$this->adresse,$this->telephone,$this->preferedCuisine] ; 
                $sql = "INSERT INTO user (nom,password,email,adresse,telephone,cuisine) VALUES (?,?,?,?,?,?)" ;
                $this->insert($sql,$arr) ; 
                header("location:$path") ; 
            }
            else{
                $err_message = "Cette adresse e-mail est déja utilisé" ;
                echo $err_message ;
            }
        }
    
        public function logIn($password,$path){
            $sql = "SELECT * FROM user WHERE email = '$this->email'" ;
            $login_info = $this->selectAll($sql) ;
            if($login_info){
                if (password_verify($password,$login_info[0]->password)){
                    echo 'connecté'  ;
                    $_SESSION["nom"] = $login_info[0]->nom ; 
                    $_SESSION["email"]  = $login_info[0]->email ; 
                    $_SESSION["adresse"] = $login_info[0]->adresse ; 
                    $_SESSION["telephone"] = $login_info[0]->telephone ;
                    $_SESSION["cuisine"] = $login_info[0]->cuisine ;
                    //var_dump($_SESSION) ; 
                    header("location:$path");
                }
                else{
                    echo "Login failed" ; 
                    echo  $login_info[0]->password ;
                    echo "</br>" ;
                    echo $password ; 
                }
            }
            else{
                echo 'not found';
            }
        }
}

