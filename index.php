<?php 

require_once __DIR__ . "/classes/animal-bed.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/toys.php";
require_once __DIR__ . "/classes/user.php";

$palla = new Toys("Palla di gomma", 5.50, "cani");
$corda = new Toys("Corda alla menta", 2.50, "cani");
$pate = new Food("Paté", 2.50, "gatti", "pollo");

$user = new User();
$user->addToCart($palla);
$user->addToCart($palla);
$user->addToCart($corda);
$user->addToCart($corda);
$user->addToCart($corda);
$user->addToCart($pate);

var_dump($user)

?>