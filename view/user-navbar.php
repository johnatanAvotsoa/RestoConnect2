<?php  session_start() ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/user-nav.css">
    <title></title>
</head>
<body>
    <nav class="form-box-shadowed p-2 d-flex align-items-center justify-content-between">
        <h3 class="color-vert titre border-green text-center p-2">RestoConnect</h3>
        <ul class="d-flex justify-content-between align-items-center pr-2">
            <li>
                <a href="">
                    <img src="../public/icons/home.svg" alt="">
                </a>
               <p class="tp">Acceuil</p>
            </li>
            <li>
                <a href="./recherche.php">
                    <img src="../public/icons/search.svg" alt="">
                </a>
                <p class="tp">Recherche</p>
            </li>
            <li>
                <a href="">
                    <img src="../public/icons/delivery.svg" alt="">
                </a>
                <p class="tp">Livraisons</p>
            </li>
            <li>
                <a href="">
                    <img src="../public/icons/order.svg" alt="">
                </a>
                <p class="tp">Précommandes</p>
            </li>
            <li class="ps-relative">
                <a href="panier.php">
                    <img src="../public/icons/cart.svg" alt="">
                </a>
                <p class="tp">Panier</p>
                <p class="counter ps-absolute">1</p>
            </li>
        </ul>
        <div class="right">
            <div class="user d-flex justify-content-between align-items-center">
                <a href="../view/user-profile.php" class="d-flex align-items-center">
                    <img src="../public/icons/user-profile-filled-svgrepo-com.svg" alt="" id="user-img">
                    <h6 class="pt-2"><?= $_SESSION["username"]?></h6>
                </a>
                <a href="../Controller/logout.php">
                    <img src="../public/icons/loug-out-white.svg" alt="">
                </a>
            </div>
        </div>
    </nav>
</body>
</html>