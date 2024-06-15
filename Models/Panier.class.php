<?php
require_once 'Database.class.php' ; 
class Panier{
   public  $restaurant_name ;
   public  $plat ; 
   public  $prix ;
   public function __construct($restaurant_name,$plat,$prix){
     Database::__construct() ; 
     $this->restaurant_name = $restaurant_name ; 
     $this->plat  = $plat ; 
     $this->prix = $prix ;
   }
   public function addToDB(){
        $sql = "INSERT TO panier";
   }
   public function getAll($id){
         $sql = "SELECT panier.date, panier.prix, menu.image AS menu_pic, user.username AS username FROM panier INNER JOIN user ON panier.id_client = user.id_user INNER JOIN menu ON panier.id_plat = menu.id_menu WHERE panier.id_client = '$id'";
         return $this->selectAll($sql); 
   }
}