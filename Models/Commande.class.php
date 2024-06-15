<?php
require_once 'Database.class.php' ; 
class Commande extends Database {
public $date ;
public $montant;
public $restaurant;
public $client ;
public function __construct($date,$montant,$restaurant,$client){
    Database::__construct() ;
    $this->date = $date ; 
    $this->montant = $montant ;
    $this->restaurant = $restaurant ;
    $this->client = $client ;
}
public function insertToDatabase($path){
    $arr = [$this->date,$this->montant,$this->client,$this->restaurant] ; 
    $sql = "INSERT INTO commande(date_fin,montant,id_client,id_restaurant) VALUES (?,?,?,?)" ;
    $this->insert($sql,$arr) ;
}

public function updateCommand($path){
    $arr = [$this->date,$this->montant,$this->client,$this->restaurant] ; 
    $sql = "INSERT INTO commande(date_fin,montant,id_client,id_restaurant) VALUES (?,?,?,?)" ;
    $this->insert($sql,$arr) ;
}

}
?>