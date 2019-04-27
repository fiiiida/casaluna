<?php
// initialize shopping cart class
include 'core/Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig2.php';

if($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: cartt.php");
    }
    ?>