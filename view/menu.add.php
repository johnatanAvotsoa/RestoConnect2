<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <title>Document</title>
</head>
<body>
<?php require_once 'admin-aside-menu.php' ?>
<main>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <form action="../Controller/menu-add.php" method="POST" class="form-box-shadowed d-flex flex-column" enctype="multipart/form-data">
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
    </div>
</main>
</body>
</html>