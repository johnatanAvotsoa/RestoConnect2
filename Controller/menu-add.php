<?php
session_start();
    $rest_id = $_SESSION["id_restaurant"];
    require_once '../Models/Menu.class.php';
    require_once 'File.class.php';
    if(isset($_POST["nom"])&& isset($_POST["ingredient"]) && isset($_POST["prix"]) && isset($_FILES["image"])){
        $image = new File($_FILES["image"]); 
        $image->MoveFile();
        $image = $image->getName();

        $name = $_POST["nom"];
        $ingredient = $_POST["ingredient"] ; 
        $prix = $_POST["prix"];
        $m = new Menu($name,$image,$ingredient,$prix,$rest_id);
        $m->insertToDatabase("../view/menu.php");
    }
?>