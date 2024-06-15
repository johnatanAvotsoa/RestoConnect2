<?php 
    session_start();
    $id_res = $_SESSION["id_restaurant"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <link rel="stylesheet" href="../public/css/restaurant-page.css">
    <link rel="stylesheet" href="../public/css/menu-admin.css">
    <title>Menu</title>
</head>
<body>
<?php require_once 'admin-aside-menu.php' ;?>
<main class="d-flex align-items-center flex-column">
<button class="btn-principale w-100" id="btn">
    Ajouter un nouveau menu
</button>
<form action="../Controller/menu-add.php" method="POST" class="form-box-shadowed d-flex flex-column d-none" enctype="multipart/form-data" id="form">
            <label for="nom">Nom du menu</label>
            <input type="text" name="nom" placeholder="Nom du menu" required>
            <label for="ingredient">Ingrédient(s)</label>
            <input type="text" name="ingredient" placeholder="ingrédient(s)" required>
            <label for="nom">Prix</label>
            <input type="number" name="prix" placeholder="Nom du menu" required>
            <label for="nom">Photo du menu</label>
            <input type="file" name="image" required>
            <input type="submit" value="Ajouter le menu" class="btn-principale mt-3">
</form>
<div class="d-flex flex-column align-items-center justify-content-center mt-5 p-5"  id="main">
    <?php
    require_once '../Models/Database.class.php';
        $db  = new Database();
        $sql = "SELECT * FROM menu WHERE id_restaurant = '$id_res'";
        $menu_array = $db->selectAll($sql);
        foreach($menu_array as $menu){
    ?>
        <div class="form-box-shadowed row m-3">
            <div class="col-md-4">
                <img src="../public/image/<?=$menu->image?>" alt="" class="w-100 h-100">
            </div>
            <div class="col-md-8 d-flex flex-column justify-content-between">
            <div class="m-2">
                <h1><?=$menu->nom?></h1>
                <h5>Ingrédients : <?=$menu->ingredient?></h5>
            </div>
            <h2>Prix : <?=$menu->prix?> MGA</h2>
            <div class="d-flex justify-content-between">
                <a href="../Controller/delete-menu.php?id=<?=$menu->id_menu?>">
                    <button class="btn btn-danger p-2">
                       <img src="../public/icons/trash.svg" alt=""> 
                        Supprimer
                    </button>
                </a>
                <a href="../Controller/delete-menu.php?id=<?=$menu->id_menu?>">
                    <button class="btn btn-warning p-2">
                        <img src="../public/icons/edit-noir.svg" alt="">
                        Modifier
                    </button>
                </a>
            </div>
            </div>
        </div>
    <?php
        }
    ?>
</div>
</main>

<script src="../public/js/show.js"></script>
</body>
</html>