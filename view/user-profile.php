<?php 
// session_start() 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
</head>
<body>
<?php
    require_once './user-navbar.php' ; 
?>
   <main class="d-flex align-items-center justif-content-center flex-column">
            <div class="d-flex align-items-center justif-content-center flex-column">
                <img src="../public/icons/user-profile-filled-svgrepo-com.svg" alt="">
                <div class="d-flex">
                    <img src="../public/icons/username-svgrepo-com.svg" alt="">
                    <h1><?= $_SESSION["username"]?></h1>
                </div>
            </div>
            <table class="table table-dark mt-5">
                <tr>
                   <td>adresse</td>
                   <td><?= $_SESSION["adresse"]?></td>
                </tr>
                <tr>
                    <td>e-mail</td>
                    <td><?= $_SESSION["email"]?></td>
                 </tr>
                 <tr>
                    <td>Télephone</td>
                    <td><?= $_SESSION["telephone"]?></td>
                 </tr>
                 <tr>
                    <td>Type de cuisine</td>
                    <td><?= $_SESSION["cuisine"]?></td>
                 </tr>
            </table>
            <button class="btn-secondaire w-75 mt-5">
                <a href="userinfo-update.php?name=<?= $_SESSION["username"]?>&adresse=<?= $_SESSION["adresse"]?>&email=<?= $_SESSION["email"]?>&telephone=<?= $_SESSION["telephone"]?>&cuisine=<?=$_SESSION["cuisine"]?>">Modifier les Informations personnelles</a>
            </button>
   </main>
</body>
</html >