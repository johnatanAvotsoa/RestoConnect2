<?php 
// session_start(); 
require_once '../Models/Database.class.php' ;
if(isset($_GET["btn"])){
    $name;$adresse;$cuisine;$result;$output; 
    $db = new Database();
    
        $name = $_GET["name"] ;
        $adresse = $_GET["adresse"];
        $cuisine = $_GET["cuisine"];
        $sql = "SELECT * FROM restaurant WHERE nom LIKE '%$name%' AND adresse LIKE '%$adresse%' AND cuisine LIKE'%$cuisine%' ";
        $result = $db->selectAll($sql);
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/recherche.css">
</head>
<body>
<?php require_once './user-navbar.php' ?>
<aside class="aside-nav form-box-shadowed p-2 align-items-center d-flex z-100">
    <form action="<?= $_SERVER["PHP_SELF"]?>" methood="GET">
        <label for="name">Nom du restaurant</label>
        <input type="text" placeholder="Nom du restaurant" name="name" id="username">
        <label for="name">Type de cuisine</label>
        <input type="text" placeholder="Type de cuisine" name="cuisine" id="cuisine">
        <label for="name">Localisation</label>
        <input type="text" placeholder="Localisation" name="adresse" id="adresse">
        <input type="submit" value="Rechercher" name="btn" class="btn-principale w-100">
    </form>
</aside>
<aside class="aside-right form-box-shadowed p-2 align-items-center d-flex flex-column justify-content-center z-100">
    <h3>GOOGLE MAP</h3>
    <div class="map-container">
        <img src="../public/image/google-map-img.jfif" alt="" class="restaurant-pic">
    </div>
</aside>
    <main>
        <div class="content z-100 pt-5">
            <h5 class="text-center mb-2">Résultats trouvé(s)</h5>
        <?php
            if(empty($result)){
                echo '<h2 class="text-center">Aucun résulat trouvé</h2>';
            }
            else{
            foreach($result as $restaurant){
        ?>
                <div class="row form-box-shadowed mt-2">
                <div class="col-md-4">
                    <img src="../public/image/wallpaper.png" alt=""class="restaurant-pic">
                </div>
                <div class="col-md-8">
                    <h5><?= $restaurant->nom?></h5>
                    <p>Type de cuisine :<?= $restaurant->cuisine?></p>
                    <p>Localisation:<?= $restaurant->adresse?></p>
                    <a href="restaurant-page.php?
                        id=<?=$restaurant->id_restaurant?>&
                        nom=<?=$restaurant->nom?>&
                        adresse=<?=$restaurant->adresse?>&
                        cuisine=<?=$restaurant->cuisine?>&
                        telephone=<?=$restaurant->telephone?>&
                        email=<?=$restaurant->email?>
                    "class="btn-principale">Visiter</a>
                </div>
            </div>
        <?php
            }
        }
        ?>

            
        </div>
    </main>
</body>
</html>