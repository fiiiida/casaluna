<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 11/04/2018
 * Time: 16:27
 */
session_start();
foreach($_SESSION["cart_item"] as $k => $v)
{
    $_SESSION["cart_item"][$k]['quantite'] =$_POST[$_SESSION["cart_item"][$k]['reference']];
}
header('Location: checkout.php');
?>