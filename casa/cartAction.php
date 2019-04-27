<?php
// initialize shopping cart class
include 'core/Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig2.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
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
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: cartt.php");





    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
       
            include "entities/commande.php";
            include "core/commandeC.php";
            include "entities/singlecommande.php";
            include "core/singlecommandeC.php";
            include "entities/check.php";
            include "core/checkC.php";
    $commande1=new commande($_SESSION['sessCustomerID'],$cart->total(),date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),'PENDING');
    $commande1C=new commandeC();
    $commande1C->ajoutercommande($commande1);
    $idc=$commande1C->lastid((int)$_SESSION['sessCustomerID'],$cart->total());
            // get cart items
   
/*if ( isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['address1']) and isset($_POST['country']) and isset($_POST['zip'])and isset($_POST['email']) and isset($_POST['mobile'])){
     $check1=new check($idc,$_POST['firstname'],$_POST['lastname'],$_POST['address1'],$_POST['country'],$_POST['zip'],$_POST['email'],$_POST['mobile']);
  $check1C=new checkC();

    $check1C->ajoutercheck($check1);}
    else{
    echo "vérifier les champs";
}*/
            $cartItems = $cart->contents();

            foreach($cartItems as $item){
               $singlecommande1=new Singlecommande($idc,$item['id'],$item['qty']);
                 $singlecommande1C=new SinglecommandeC();
    $singlecommande1C->ajouterSinglecommande($singlecommande1);
  }

                $cart->destroy();
                header("Location: checkout.php");
     
            
        }else{
            header("Location: checkout.php");
        }
   
}else{
    header("Location: product.php");
}