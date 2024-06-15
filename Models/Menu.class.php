<?php
require_once 'Database.class.php' ; 
class Menu extends Database{
    public $name ; 
    public $ingredient ; 
    public $prix ;
    public $resto_id ;
    public $image ; 
    public function __construct($name,$image,$ingredient,$prix,$resto_id){
        Database::__construct();
        $this->name = $name ; 
        $this->image = $image ; 
        $this->ingredient = $ingredient ; 
        $this->prix = $prix ; 
        $this->resto_id = $resto_id ;
    }
    public function insertToDatabase($path){
        $arr = [$this->name,$this->image,$this->ingredient,$this->prix,$this->resto_id];
        $sql = "INSERT INTO menu (nom,image,ingredient,prix,id_restaurant) VALUES (?,?,?,?,?)";
        $this->insert($sql,$arr);
        header("location:$path");
    }
}