<?php
require '../Models/Database.class.php';

if(isset($_GET["id"])){
    $db = new Database();
    $id = $_GET["id"];
    $sql = "DELETE FROM menu WHERE id_menu = '$id'";
    $db->delete($sql,'../view/menu.php');
}