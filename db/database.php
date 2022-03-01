<?php 

require_once __DIR__ . "/../classes/product.php";
require_once __DIR__ . "/../classes/user.php";
require_once __DIR__ . "/../classes/toys.php";
require_once __DIR__ . "/../classes/food.php";
require_once __DIR__ . "/../classes/credit-card.php";
require_once __DIR__ . "/../classes/animal-bed.php";

$foodList = [
    new Food ("Simba", "Bocconi per cuccioli", 29.90,
    "Cane", "Manzo e verdure", 0.400, 2),

    new Food ("Pedigree", "Croccantini per cani adulti", 40.90,
    "Cane", "Pollo", 20, 1),

    new Food ("Fufi", "Paté", 5.90,
    "Gatto", "Pollo", 100, 1),
];

var_dump($foodList);
?>