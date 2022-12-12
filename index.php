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

 $toy_1 = new Product('pupazzo', new Category('cane'), new Type('toy'), 'image',120);
 var_dump($toy_1);
 $food_1 = new Product('croccantini',new Category('gatto'), new Type('food'), 'image',120);
 var_dump($food_1);
 $kennel_1 = new Product('cuccia',new Category('gatto'), new Type('kennel'), 'image',120);
 var_dump($kennel_1);