<?php
include __DIR__ . "/../infoShop/Carta.php";
include __DIR__ . "/../infoShop/Products.php";
include __DIR__ . "/../infoShop/User.php";


$prodotto = new Products("croccantini", "lorem", "Gucci", "Valentino", 30);
$prodotto = new Products("Ciotola", "lorem", "Fendi", "Lorem", 15);

$utente = new User("Zlatan", "Ibrahimovic", "18-11-88", "Malmo", true);
$utente = new User("Chiara", "Ferragni", "11-01-98", "Los Angeles", false);
$utente = new User("Mike", "Magnan", "19-01-78", "New York", true);
$utente = new User("Stefano", "Pioli", "09-12-80", "Roma", false);


var_dump($prodotto);
var_dump($utente);
?>


