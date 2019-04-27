<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 02/04/2018
 * Time: 21:31
 */
session_start();
require_once 'header.php';
?>
<div id="content">
    <div class="container">
        <div class="title clearfix">
            <h2>Your cart - Checkout</h2>
            <div class="title_right cart_list">
                <ul>
                    <li class="active"><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                </ul>
            </div>
        </div>
        <div class="cart_c">
            <div class="cart_top">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <div class="sidebar">
                            <div class="side_box side_box_1 red5">
                                <h5>helpful information</h5>
                                <ul>
                                    <li><a href="#">Deliver</a></li>
                                    <li><a href="#">Payment </a></li>
                                    <li><a href="#">Warranty</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Discounts</a></li>
                                    <li><a href="#">Loyalty Program</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <form action="UpdatePanier.php" method="post">
                        <div class="cart_tbl">
                            <div class="clearfix title_row">
                                <ul>
                                    <li>Image</li>
                                    <li>Nom</li>
                                    <li>Quantity</li>
                                    <li>Prix</li>
                                </ul>
                            </div>

                            <div class="clearfix con_row">

                                <?php $item_total=0; foreach($_SESSION["cart_item"] as $item)
                                {  if (!in_array($_SESSION["cart_item"],array()))
                                { if(isset($item['reference']))
                                {
                                    ?>
                                <ul>
                                    <li><div class="thumb"><span> <img alt="alt"  src="../<?php echo($item['image']) ;?>" class="" draggable="false"> </span></div></li>
                                    <li>
                                        <h5><?php echo($item['nom']);?></h5>
                                        <p><?php echo($item['description']);?></p>
                                    </li>
                                    <li>
                                        <a  class="minus_btn"></a>
                                        <input type="number" class="txtbox" placeholder="<?php echo($item['quantite']) ; ?> "  value="<?php echo($item['quantite']) ; ?> " name="<?php echo($item['reference'])?>">
                                        <a  class="plus_btn"></a>
                                    </li>
                                    <li>
                                        <div class="price"><?php echo($item['quantite']*$item['prix']." TND");?></div>
                                        <a href="DeletePanier.php?item=<?php echo($item['reference']);?>" class="del_btn"></a>
                                    </li>
                                </ul>
                                <?php  $item_total += ($item["prix"]*$item["quantite"]); } } } ?>
                            </div>

                            <div class="clearfix total_row">
                                <ul>
                                    <li>
                                        <p><span class="fa fa-clock-o"></span>Praesent egestas est vitae interdum amet erat varius elementum.</p>
                                    </li>
                                    <li>
                                        <div class="total_val">Total value:</div>
                                    </li>
                                    <li>
                                        <div class="price"><?php echo $item_total." TND" ; ?></div>
                                        <button type="submit" class="refresh_btn"></button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <form action="AjouterCommande.php" method="post">
                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                <div class="ship_frm_c">
                                    <div class="frm ship_frm">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Nom Client:<span class="req">*</span></div>
                                                <input type="text" class="txtbox" required="required" name="nom" pattern="[A-Za-z]{1,30}" title="1 à 30 characteres">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Adresse<span class="req">*</span></div>
                                                <input type="text" class="txtbox" name="adresse" pattern="[A-Za-z]{1,30}" title="1 à 30 characteres" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Total: <span class="req">*</span></div>
                                                <input type="number"  class="txtbox" name="total" value="<?php echo $item_total; ?>" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt"><input type="radio" class="rad_btn" name="type" value="P.ligne" checked>Payment en ligne</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt"><input type="radio" class="rad_btn iradio_minimal" name="type" value="P.livraison">Payment à la livraison</div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="reqired">* Required Fields</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart_btn clearfix">
                                <button type="submit" class="next_btn">Commander<span class="fa fa-chevron-right"></span></button>
                            </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
/**
 * Created by PhpStorm.
 * User: Boussoukaya
 * Date: 02/04/2018
 * Time: 21:31
 */
require_once 'footer.php';
?>