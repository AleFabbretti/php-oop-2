<?php

require_once __DIR__ . "/../classes/Product.php";
require_once __DIR__ . "/../classes/Food.php";
require_once __DIR__ . "/../classes/Category.php";
require_once __DIR__ . "/../classes/Toy.php";

$dog = new Category("Cane", "<i class=\"fa-solid fa-dog\"></i>");
$cat = new Category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");


$food = new Food("https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/800/icon_topseller_1_2022_02_24t122255_148_6.jpg", "Royal Canin", 25, $dog);
$food->setExpiration("25/05/2023");

$toy = new Toy("https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/karlie/palline/in/gomma/crepla/9/800/307996_karlie_katzenspielzeug_moosgummiball_hs_02_9.jpg", "palle giocattolo", 6, $cat);
$toy->setMaterial("plastica");

$prod_base = new Product("https://shop-cdn-m.mediazs.com/bilder/letto/manila/1/800/1327357_1.jpg", "cuccia per cani", 30, $dog);

try{
  $products = [
    $food,
    $toy,
    $prod_base,
  ];

} catch(Exception $e) {
  echo $e->getMessage();
}