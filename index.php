<?php
require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Type.php';



/*


Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
 */

$products = [
    new Product('pupazzo', new Category('cane'), new Type('toy'), 'https://picsum.photos/200/300', 25),
    new Product('croccantini', new Category('gatto'), new Type('food'), 'https://picsum.photos/200/300', 8),
    new Product('cuccia', new Category('gatto'), new Type('kennel'), 'https://picsum.photos/200/300', 40)
];


?>

<!doctype html>
<html lang="en">

<head>
    <title>Pet Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-dark">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <?php foreach ($products as $product) : ?>
            <div class="card bg-light m-3">
                <img src="<?= $product->image ?>" alt="">
                <div class="contents p-2">
                    <h4><?= $product->name ?></h4>
                    <p><?= $product->category->name ?></p>
                    <p><?= $product->get_price() ?></p>
                    <p><?= $product->type->name ?></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>