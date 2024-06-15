<?php
require_once '../Controller/getValue.php' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/div.css">
    <link rel="stylesheet" href="../public/css/inscription.css">
    <title>Inscription</title>
</head>
<body>
<?php 
    require_once './user-navbar.php' ;
?>
<main>
<div class="d-flex align-items-center justify-content-center vh-100">
        <form action="../Controller/update-user.php" method="POST" class="d-flex flex-column form-box-shadowed p-relative">
            <div class="round btn-principale" id="btn-res">Modication des Informations personnelles</div>
            <label for="email">e-mail</label>
            <input type="email" name="email" id="email" placeholder="email" value="<?=$email?>" required>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" value="<?=$name?>" required>
            <label for="username">Adresse</label>
            <input type="text" name="adresse" id="adresse" placeholder="Nom d'utilisateur" value="<?=$adresse?>" required>
            <label for="username">Telephone</label>
            <input type="text" name="telephone" id="telephone" placeholder="Nom d'utilisateur" value="<?=$tel?>" required>
            <label for="username"> Type de cuisine préféré </label>
            <input type="text" name="cuisine" id="cuisine" placeholder="Nom d'utilisateur" value="<?=$cuisine?>" required>
            <p id="msg-error"></p>
            <input type="submit" value="Mettre à jour" class="btn-principale" id="btn" name="inscription">
        </form>

</div>
</main>

    <script src="../public/js/form-validator.js"></script>
</body>
</html>