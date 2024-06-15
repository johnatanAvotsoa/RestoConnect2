<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/cart.css">
    <title>Commande</title>
</head>
<body>
<?php require_once 'user-navbar.php' ?>
<main class="d-flex flex-column justify-content-center align-items-center vw-100 vh-100">
<form action=""method="POST" class="form-box-shadowed d-flex flex-column d-none" id="cmd-form">
    <h4 class="color-vert text-center mb-3">Précommandez pour éviter les fils d'attentes !</h4>
    <label for="date">Date et heure d'arrivée</label>
    <input type="datetime-local" name="date" class="p-2 border-green w-100">
    <label for="qte">Quantité</label>
    <input type="number" name="quantite" id="" placeholder="Quantité" class="w-100">
    <label for="Note">Note</label>
    <textarea name="note" id="" cols="30" rows="3" class="border-green"></textarea>
    <input type="submit" value="Valider la précommande" class="mt-3 btn-principale">
</form>
<form action=""method="POST" class="form-box-shadowed d-flex flex-column d-none" id="l-form">
    <h4 class="color-vert text-center mb-3">Programmer une Livraison</h4>
    <label for="date">Adresse du Livraison</label>
    <input type="text" name="Adresse" class="p-2 border-green w-100">
    <label for="qte">Quantité</label>
    <input type="number" name="quantite" id="" placeholder="Quantité" class="w-100">
    <label for="Note">Note</label>
    <textarea name="note" id="" cols="30" rows="3" class="border-green"></textarea>
    <input type="submit" value="Valider la précommande" class="mt-3 btn-principale">
</form>
    <div class="container" id="main">
        <div class="form-box-shadowed row mt-2">
            <div class="col-md-3">
                <h5>Prix                                                                            : 15000 MGA</h5>
                <h5>Nom du restaurant : restaurant</h5>
                <p>Date de commande : 10-02-2024</p>
            </div>
            <div class="col-md-6">
                <h5>Plat commandé: Plat X</h5>
                <h5>Quantité: 5</h5>
                <h6>Note: Ne mettez pas de porc svp</h6>
            </div>
            <div class="col-md-3">
                <button class="btn btn-danger p-3 w-100">
                    <a href="" class="text-white">
                    <img src="../public/icons/trash.svg" alt="">
                    Suprrimer
                    </a>
                </button>
                <div class="ps-relative mt-2">
                    <button class="btn-principale w-100" id="confirm-btn">Confirmer</button>
                    <div class="ps-absolute action bx-shadow w-100 z-100 d-none" id="select">
                        <h5 id="livrer">Livrer</h5>
                        <h5 id="commander">Précommander</h5>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>

<script src="../public/js/cart.js"></script>
</body>
</html>