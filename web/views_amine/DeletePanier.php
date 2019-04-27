<?php

//session_start();
foreach($_SESSION["cart_item"] as $k => $v)
{
    if($_GET['item']==$_SESSION["cart_item"][$k]['reference'])
    {
        unset($_SESSION["cart_item"][$k]);

    }
}
header('Location: checkout.php');
var_dump ("item has been destroyyed");