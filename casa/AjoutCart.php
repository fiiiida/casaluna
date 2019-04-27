<?php
// initialize shopping cart class
include 'core/Cart.php';
include 'dbConfig2.php';
$cart = new Cart;
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['idp'])){
        $productID = $_REQUEST['idp'];
        // get product details
        $query = $db->query("SELECT * FROM produit WHERE idp = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'image' => $row['image'],
            'id' => $row['idp'],
            'name' => $row['lib_prod'],
            'price' => $row['prix'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'cartt.php':'product.php';
        header("Location: ".$redirectLoc);
    }
    ?>