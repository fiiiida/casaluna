<?php
// initialize shopping cart class
include 'core/Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig2.php';

if($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }
    ?>