<?php
// initialize shopping cart class
include 'core/Cart.php';
$cart = new Cart;

// include database configuration file
include 'dbConfig2.php';

  if($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
       
            include "entities/commande.php";
            include "core/commandeC.php";
            include "entities/singlecommande.php";
            include "core/singlecommandeC.php";
          
    $commande1=new commande($_SESSION['sessCustomerID'],$cart->total(),date("Y-m-d H:i:s"),date("Y-m-d H:i:s"),'PENDING');
    $commande1C=new commandeC();
    $commande1C->ajoutercommande($commande1);
    $idc=$commande1C->lastid((int)$_SESSION['sessCustomerID'],$cart->total());
            // get cart items
   

            $cartItems = $cart->contents();

            foreach($cartItems as $item){
               $singlecommande1=new Singlecommande($idc,$item['id'],$item['qty']);
                 $singlecommande1C=new SinglecommandeC();
    $singlecommande1C->ajouterSinglecommande($singlecommande1);
                                                }

           
                header("Location: pdf.php");
     
            
        }else{
            header("Location: checkout.php");
        }
    
   ?>