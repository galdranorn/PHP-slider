<?php

require '../libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->debugging = true;

$smarty->assign('base_dir', '/frontend/zadanie/');
$smarty->assign('title', 'Nowe produkty');
$smarty->assign('subtitle', 'Poznaj produkty z najnowszej kolekcji naszej marki');

$smarty->assign("products", array(array("price" => "200", "link" => "/tshirts/1-faded-short-sleeves-tshirt.html", "image" => "img/product1.jpg", "prod-title" => "Faded Short Sleeves T-Shirt summer edition"),
                                  array("price" => "1200", "link" => "/blouses/2-blouse.html", "image" => "img/product2.jpg", "prod-title" => "Blouse", "discount" => "26"),
                                  array("price" => "200", "link" => "/summer-dresses/7-printed-chiffon-dress.html", "image" => "img/product3.jpg", "prod-title" => "Printed Chiffon Dress"),
                                  array("price" => "100", "link" => "/evening-dresses/4-printed-dress.html", "image" => "img/product4.jpg", "prod-title" => "Printed Dress"),
                                  array("price" => "1500", "link" => "/sets/1-geometric-fire-set.html", "image" => "img/product5.jpg", "prod-title" => "Geometric fire set", "discount" => "40"),
                                  array("price" => "400", "link" => "/evening-dresses/8-flame-dress.html", "image" => "img/product6.jpg", "prod-title" => "Flame Rose dress"),
                                  array("price" => "150", "link" => "/evening-dresses/2-casual-black-dress.html", "image" => "img/product7.jpg", "prod-title" => "Black dress"),
                                  array("price" => "700", "link" => "/evening-dresses/10-princess-sparkle.html", "image" => "img/product8.jpg", "prod-title" => "Princess sparkle"),
                                  array("price" => "70", "link" => "/tshirts/2-leave-the-road-tshirt.html", "image" => "img/product9.jpg", "prod-title" => "Leave the Road t-shirt"),));

$smarty->display('index.tpl');