<?php require_once '../Models/Database.class.php' ; 
        $id = $_GET["id"] ;
        $sql = "SELECT * FROM menu WHERE id_restaurant = '$id'" ;
        $allmenu = new Database();
        $allmenu = $allmenu->selectAll($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/restaurant-page.css">
    <title>Document</title>
</head>
<body>
    <?php require_once 'user-navbar.php' ; ?>
    <main>
        <div class="row form-box-shadowed profile-info">
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img src="../public/image/wallpaper.png" alt="" class="img">
            </div>
            <div class="col-md-8 d-flex justify-content-center flex-column">
                <h2><?=$_GET["nom"]?></h2>
                <h4>Adresse : <?=$_GET["adresse"]?></h4>
                <h4>Spécialité : <?=$_GET["cuisine"]?></h4>
                <h4>Télephone: <?=$_GET["telephone"]?></h4>
                <h4>E-mail: <?=$_GET["email"]?></h4>
                <p></p>
            </div>
        </div>
        <div>
            <div class="d-flex align-items-center">
                <button class="btn-1 w-50">Menu</button>
                <button class="btn-1 w-50">Avis sur le restaurant</button>
            </div>
            <div id="menu" class="d-flex flex-column align-items-center justify-content-center mt-5">
    <?php
            if(empty($allmenu)){
                echo '<h2>Ce restaurant n\'a pas encore publié de menu </h2>' ;
            }else{
            foreach($allmenu as $menu){
                // var_dump($menu);
           
    ?>
    
                <div class="container w-50 form-box-shadowed mt-3">
                    <img src="../public/image/<?=$menu->image?>" alt="" class="w-100 mb-2">
                    <div class="mt-3">
                        <div class="p-3">
                        <h2><?= $menu->nom?></h2>
                        <h3>Prix : <?=$menu->prix?> MGA</h3>
                        <h6>Ingredients : <?= $menu->ingredient?></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="d-flex justify-content-center w-25 m-3">
                                <svg fill="#4caf50" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20.5,4.609A5.811,5.811,0,0,0,16,2.5a5.75,5.75,0,0,0-4,1.455A5.75,5.75,0,0,0,8,2.5,5.811,5.811,0,0,0,3.5,4.609c-.953,1.156-1.95,3.249-1.289,6.66,1.055,5.447,8.966,9.917,9.3,10.1a1,1,0,0,0,.974,0c.336-.187,8.247-4.657,9.3-10.1C22.45,7.858,21.453,5.765,20.5,4.609Zm-.674,6.28C19.08,14.74,13.658,18.322,12,19.34c-2.336-1.41-7.142-4.95-7.821-8.451-.513-2.646.189-4.183.869-5.007A3.819,3.819,0,0,1,8,4.5a3.493,3.493,0,0,1,3.115,1.469,1.005,1.005,0,0,0,1.76.011A3.489,3.489,0,0,1,16,4.5a3.819,3.819,0,0,1,2.959,1.382C19.637,6.706,20.339,8.243,19.826,10.889Z"/></svg>
                            </i>
                            <button class="btn-principale w-75 m-3">
                                <a href="
                                panier-add.php?
                                restaurantId=<?=$menu->id_restaurant?>
                                ">
                                    <svg fill="#ffff" width="24px" height="24px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title>ionicons-v5-d</title><circle cx="176" cy="416" r="32"/><circle cx="400" cy="416" r="32"/><polygon points="167.78 304 429.12 304 467.52 112 133.89 112 125.42 64 32 64 32 96 98.58 96 146.58 368 432 368 432 336 173.42 336 167.78 304"/></svg>
                                    Ajouter au panier
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
    <?php
                 }
            }
    ?>
    


            </div>

            <div id="avis" class="p-5 d-none">
                <form action=""method="POST" class="d-flex flex-column justify-content-center align-items-center w-100">
                    <textarea name="avis" id="avis" cols="30" rows="5" class="w-50"></textarea>
                    <input type="submit" value="Envoyer" class="btn-principale w-50 mt-2">
                </form>
                <div class="avis-box form-box-shadowed mt-3">
                    <h5>Username</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio qui, necessitatibus sequi non natus reiciendis porro! Unde ut, voluptates quo culpa magnam optio temporibus delectus pariatur, quis, odio est veniam.</p>
                </div>
                <div class="avis-box form-box-shadowed mt-3">
                    <h5>Username</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio qui, necessitatibus sequi non natus reiciendis porro! Unde ut, voluptates quo culpa magnam optio temporibus delectus pariatur, quis, odio est veniam.</p>
                </div>
            </div>
        </div>
    </main>

    <script src="../public/js/rest-page.js"></script>
</body>
</html>