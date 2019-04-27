<?php

include "../core/commandeC.php";
if (!isset($_SESSION["cart_item"])) {
    $item_total = 0;
    $_SESSION["cart_item"][] = array_fill_keys (array('reference','nom','image','description', 'prix', 'quantite'),'');

}

$commandeC=new commandeC();
$commandeC->addpanier($_GET["id"]);
//echo print_r($_SESSION["cart_item"]);
header('Location: checkout.php');