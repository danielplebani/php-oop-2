<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
-L'e-commerce vende prodotti per animali.
-I prodotti sono categorizzati, le categorie sono Cani o Gatti.
-I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati 
-->

<?php
include 'shop.php';
include 'shopProducts.php';

array_push(
    $shopProducts,
    $RoyalCanin,
    $Eukanuba,
    $Felix,
    $Sheba,
    $Kong,
    $Rugby,
    $Fish,
    $Mouse,
    $Matilda,
    $Ferplast,
    $Domus,
    $Glait,
    $Doccino,
    $Salviette,
    $Pettine,
    $Pala
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZooWorld</title>
    <link rel="icon" href="./img/ZooWorld.png" type="image/png">
    <link rel="stylesheet" href="style.scss">

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- bungee style---font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">

    <!--fontAwesome-css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg px-5">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <img class="logo me-4" src="./img/ZooWorld.png" alt="logo">
                    <h1 class="title_shop">ZooWorld</h1>
                </div>

                <div class="me-5" id="navbarNav">
                    <ul class="navbar-nav gap-4">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-dog"> DOG</i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-solid fa-cat"> CAT</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container py-5">

        <div class="d-flex align-items-center mb-5">
            <h5 class="m-0">ALL THE PRODUCTS</h5>
            <i class="fa-solid fa-arrow-down-short-wide ms-2"></i>
        </div>


        <div class="d-flex justify-content-center flex-wrap gap-3">
            <?php foreach ($shopProducts as $product) : ?>
                <div class="card bg-warning" style="width: 19rem;">
                    <img src="<?= $product->getImg() ?>" style="height: 17rem; object-fit:cover;" alt="img-card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getTitle() ?></h5>
                    </div>
                    <ul class="list-group list-group-flush bg-warning">
                        <li class="list-group-item bg-warning border-0">PRICE: <?= $product->getPrice() ?></li>
                        <li class="list-group-item bg-warning border-0">TYPE: <?= $product->getType() ?></li>
                        <li class="list-group-item bg-warning border-0">
                            CATEGORY:
                            <i class="fa-solid fa-dog"></i>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </main>


    <!--boostrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>