<?php
require __DIR__ . '/Models/Product.php';
// require __DIR__ . '/Models/Account.php';
require __DIR__ . '/Models/Category.php';
// require __DIR__ . '/Models/Customer.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Kennel.php';

require __DIR__ . '/Models/Toy.php';
/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
 */

 $prod_1 = new Product('pupazzo',new Category('gatto'));
 var_dump($prod_1);
 $toy_1 = new Toy('pupazzo', new Category('cane'), 'Asbro');
 var_dump($toy_1);
 $food_1 = new Food('croccantini',new Category('Gatto'), 'pollo');
 var_dump($food_1);
 $kennel_1 = new Kennel('poltroncina',new Category('Gatto'), 120);
 var_dump($kennel_1);