<?php
require 'User.class.php' ; 
class Restaurant extends User{
    public $username ; 
    public $password ; 
    public $email ;
    public $adresse ; 
    public $telephone ; 
    public $type_cuisine ;
    public $logo ; 

    public function __construct($username,$password,$email,$adresse,$telephone,$type_cuisine,$logo){
        User:: __construct($username,$password,$email,$adresse,$telephone) ; 
        $this->type_cuisine  = $type_cuisine ;
        $this->logo = $logo ; 
    }

    public function insertToDatabase($path){
        if(empty($this->selectAll("SELECT * FROM restaurant WHERE email = '$this->email'"))){
            $arr = [$this->username,password_hash($this->password,PASSWORD_DEFAULT),$this->email,$this->adresse,$this->telephone,$this->logo,$this->type_cuisine] ; 
            $sql = "INSERT INTO restaurant (nom,password,email,adresse,telephone,logo,cuisine) VALUES (?,?,?,?,?,?,?)" ;
            $this->insert($sql,$arr) ; 
            header("location:$path") ; 
        }
        else{
            $err_message = "Cette adresse e-mail est déja utilisé" ;
            echo $err_message ;
        }
    }

    public function logIn($password,$path){
        $sql = "SELECT * FROM restaurant WHERE email = '$this->email'" ;
        $login_info = $this->selectAll($sql) ;
        if($login_info){
            if (password_verify($password,$login_info[0]->password)){
                $_SESSION["id_restaurant"] = $login_info[0]->id_restaurant;
                $_SESSION["username"] = $login_info[0]->nom ; 
                $_SESSION["email"]  = $login_info[0]->email ; 
                $_SESSION["adresse"] = $login_info[0]->adresse ; 
                $_SESSION["telephone"] = $login_info[0]->telephone ;
                $_SESSION["cuisine"] = $login_info[0]->cuisine ;
                $_SESSION["logo"] = $login_info[0]->logo ;
                // var_dump($_SESSION["cuisine"]) ; 
                header("location:$path");
            }
            else{
              echo 'mot de passe incorrect' ;  
            }
        }
        else{
            echo 'not found';
        }
    }
}
// echo $r->username ;
// echo $r->adresse ; 
?>