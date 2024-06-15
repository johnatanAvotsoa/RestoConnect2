<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/bs/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/root.css">
    <link rel="stylesheet" href="../public/css/main.css">
</head>
<body>
<?php require_once 'admin-aside-menu.php' ; ?>
    <main>
        <div class="text-center p-5 form-box-shadowed d-flex justify-content-around">
                <h1>Nombre de commandes reçu</h1>
                <h1 class="color-vert">2</h1>
        </div>
        </div>
        <div class="liste-commande p-5">
            <h1 class="text-center">Liste des commandes</h1>

            <div class="form-box-shadowed row mt-2">
                <div class="col-md-3">
                    <h5 class="pt-2">Commande N°: 01</h5>
                    <h5>Total : 15000 MGA</h5>
                    <p>Nom client : Client X</p>
                    <p>Date de commande : 10-02-2024</p>
                </div>
                <div class="col-md-6">
                    <h5>Plat commandé: Plat X</h5>
                    <h5>Quantité: 5</h5>
                    <h6>Note: Ne mettez pas de porc svp</h6>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-danger p-2"><a href="" class="text-white">Suprrimer</a></button>
                    <button class="btn-secondaire donebtn">En cours</button>
                </div>
            </div>



        </div>
    </main>
   <script src="../public/js/cmd-done.js"></script>
</body>
</html>