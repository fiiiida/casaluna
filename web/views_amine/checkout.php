<?php
session_start();
include "../config.php";
//session_destroy();
$pdo = config::getConnexion();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM categorie where parent='1'";
	$q = $pdo->prepare($sql);
	$q->execute();
	$data = $q->fetchAll(PDO::FETCH_ASSOC);
	$sql1 = "SELECT * FROM categorie where parent='2'";
	$q1 = $pdo->prepare($sql1);
	$q1->execute();
	$data1 = $q1->fetchAll(PDO::FETCH_ASSOC);
	$sql2 = "SELECT * FROM categorie where parent='3'";
	$q2 = $pdo->prepare($sql2);
	$q2->execute();
	$data2 = $q2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Watches an E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template| Men :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
	<div class="men_banner">
   	  <div class="container">
   	  	<div class="header_top">
   	  	   <div class="header_top_left">
	  	      <div class="box_11"><a href="checkout.php">
		      <h4><p>Cart: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
		      </a></div>
	          <p class="empty"><a href="checkout.php?cmd=emptycart" class="simpleCart_empty">Empty Cart</a></p>
	          <div class="clearfix"> </div>
	       </div>
           <div class="header_top_right">
		  	 <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">$ Us</option>
					<option value="1">Dollar</option>
					<option value="2">Euro</option>
				</select>
			 </div>
			 <ul class="header_user_info">
			  <a class="login" href="login.php">
				<i class="user"> </i> 
				<li class="user_desc">My Account</li>
			  </a>
			  <div class="clearfix"> </div>
		     </ul>
		    <!-- start search-->
				<div class="search-box">
				   <div id="sb-search" class="sb-search">
					  <form>
						 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						 <input class="sb-search-submit" type="submit" value="">
						 <span class="sb-icon-search"> </span>
					  </form>
				    </div>
				 </div>
				 <!----search-scripts---->
				 <script src="js/classie1.js"></script>
				 <script src="js/uisearch.js"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!----//search-scripts---->
		            <div class="clearfix"> </div>
			 </div>
		     <div class="clearfix"> </div>
	    </div>
   	  <div class="header_bottom">
	   <div class="logo">
		  <h1><a href="index.php"><span class="m_1">F</span>unArt</a></h1>
	   </div>
	   <div class="menu">
	     <ul class="megamenu skyblue">
			<li class="active grid"><a class="color2" href="#">Peinture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Peinture</h4>
								<ul>
								<?php  
                                foreach ($data as $row) {
                                ?>
                                <li value="<?php echo $row['id_categ'];?>"><a href="men.php?categorie=<?php echo $row['id_categ'];?>"><?php echo $row['nom_categ'];?></a></li>
                                <?php } ?>
								</ul>	
							</div>							
						</div>
						</div>
					</div>
			</li>
			<li><a class="color4" href="#">Dessin</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Dessin</h4>
								<ul>
								<?php  
                                foreach ($data1 as $row) {
                                ?>
                                <li value="<?php echo $row['id_categ'];?>"><a href="men.php?categorie=<?php echo $row['id_categ'];?>"><?php echo $row['nom_categ'];?></a></li>
                                <?php } ?>
								</ul>	
							</div>							
						</div>
						</div>
					</div>
				</li>
				<li><a class="color4" href="#">Sculpture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sculpture</h4>
								<ul>
								<?php  
                                foreach ($data2 as $row) {
                                ?>
                                <li value="<?php echo $row['id_categ'];?>"><a href="men.php?categorie=<?php echo $row['id_categ'];?>"><?php echo $row['nom_categ'];?></a></li>
                                <?php } ?>
								</ul>	
							</div>							
						</div>
						</div>
					</div>
				</li>				
				<li><a class="color10" href="brands.php">Brands</a></li>
				<li><a class="color3" href="index.php">Sale</a></li>
				<li><a class="color7" href="404.php">News</a></li>
				<div class="clearfix"> </div>
			</ul>
			</div>
	        <div class="clearfix"> </div>
	    </div>
	  </div>
   </div>
   <div class="account-in">
   	 <div class="container">
		  <div class="check_box">
		  <form action="UpdatePanier.php" method="post"> 
		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag</h1>
				<?php 
				if(isset($_SESSION["cart_item"])){$item_total=0; foreach($_SESSION["cart_item"] as $item)
                                {  if (!in_array($_SESSION["cart_item"],array()))
                                { if(isset($item['reference']))
                                {
                                    ?>
				<div class="cart-header">
				 <div class="close1"><a href="DeletePanier.php?item=<?php echo($item['reference']);?>"><button type="submit"></button></a> </div>
				   <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/<?php echo($item['image']) ;?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo($item['nom']);?></a><span><?php echo($item['description']);?></span></h3>
						<ul class="qty">
							<li><p>Qty : <?php echo($item['quantite']) ; ?></p></li>
						</ul>
						<div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 business days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
				    </div>
			 </div>
			  <table class="table table-hover">
                <tbody>
                    <tr>
                    <td colspan="2"></td>
                    <td class="prix">Total:</td><td class="prix"><?php echo($item['quantite']*$item['prix']." TND");?></td>
                    </tr>
                </tbody>
			</table>
			<?php  $item_total += ($item["prix"]*$item["quantite"]); } } } }?>
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1"><?php if(isset($_SESSION["cart_item"])){ echo $item_total." TND" ; ?></span>
				 <span>Discount</span>
				 <span class="total1">---</span>
				 <span>Delivery Charges</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>
			</form>
			 <form action="AjouterCommande.php" method="post">
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <input type="number"  class="txtbox" name="total" readonly value="<?php echo $item_total; }?>" >
			   <div class="clearfix"> </div>
			 </ul>
			 <div class="clearfix"></div><br />
			 <a href="AjouterCommande.php" class="btn btn-primary btn-normal btn-inline btn_form button item_add item_1" target="_self"><input type="submit" class="btn btn-default btn-primary" id="button" value="Commander"></a>
			 </form>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
			<div class="clearfix"></div>
	     </div>
	  </div>
   </div>
   <div class="map">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
   </div>
<?php
include_once "footer.php";
?>