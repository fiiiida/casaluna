<?php 
	
	session_start();
	require_once 'config/connect.php';

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}
$uid = getRealIpUser();

?>
	<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	
	<?php include "header.php"; ?>
	 <div id="fh5co-contact" class="fh5co-no-pd-top">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
          <h2><span> Order </span></h2>
           <div class="site-section">
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog content-account">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>My Account</h2>
					</div>
					<div class="col-md-12">

			<h3>Recent Orders</h3>
			<br>
			<table class="cart-table account-table table table-bordered">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Price</th>
						<th></th>
						<th>Total Price</th>
					</tr>
				</thead>
				<tbody>

				<?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: my-account.php');
					}
					$ordsql = "SELECT * FROM orders WHERE uid='$uid' AND id=$oid";
					$ordres = mysqli_query($connection, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$orditmsql = " SELECT * FROM orderitems o JOIN produit p WHERE o.orderid=3 AND o.pid=p.id_prod ";
					$orditmres = mysqli_query($connection, $orditmsql);
					while($orditmr = mysqli_fetch_assoc($orditmres)){
				?>
					<tr>
						<td>
							<a href="details_product.php?id=<?php echo $orditmr['pid']; ?>"><?php echo substr($orditmr['lib_prod'], 0, 25); ?></a>
						</td>
						<td>
							<?php echo $orditmr['pquantity']; ?>
						</td>
						<td>
							INR <?php echo $orditmr['prix']; ?>/-
						</td>
						<td>
							
						</td>
						<td>
							dt <?php echo $orditmr['productprice']*$orditmr['pquantity']; ?>/-
						</td>
					</tr>
				<?php } ?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Total
						</td>
						<td>
							<?php echo $ordr['totalprice']; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Status
						</td>
						<td>
							<?php echo $ordr['orderstatus']; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Order Placed On
						</td>
						<td>
							<?php echo $ordr['timestamp']; ?>
						</td>
					</tr>
				</tbody>
			</table>		

			<br>
			<br>
			<br>

			<div class="ma-address">
						<h3>My Addresses</h3>
						<p>The following addresses will be used on the checkout page by default.</p>

			<div class="row">
				<div class="col-md-6">
								<h4>My Address <a href="edit-address.php">Edit</a></h4>
					<?php
						$csql = "SELECT * FROM usersmeta WHERE uid='$uid'";
						$cres = mysqli_query($connection, $csql);
						
							$cr = mysqli_fetch_assoc($cres);
							echo "<p>".$cr['firstname'] ." ". $cr['lastname'] ."</p>";
							echo "<p>".$cr['address1'] ."</p>";
							echo "<p>".$cr['address2'] ."</p>";
							echo "<p>".$cr['city'] ."</p>";
							echo "<p>".$cr['state'] ."</p>";
							echo "<p>".$cr['country'] ."</p>";
							echo "<p>".$cr['company'] ."</p>";
							echo "<p>".$cr['zip'] ."</p>";
							echo "<p>".$cr['mobile'] ."</p>";
						
					?>
				</div>

				<div class="col-md-6">

				</div>
			</div>



			</div>

					</div>
				</div>
			</div>
		</div>
	</section>
<footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4"></h3>

              </div>
             
             
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
             <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="../images/article/photo4.jpg" alt="Image placeholder" height="150" width="150"">
              <h3 class="font-weight-light  mb-0">Dream Catcher </h3>
              <p>Promotion d'hiver </p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
             <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address"> 3, rue Slaheddine El Ayoubi Sidi Bou Saïd 2026</li>
                <li class="phone"><a href="tel://23923929210">+216 24 545 134</a></li>
                <li class="email">Casaluna.design@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">

   

 
  <!-- jQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="../js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="../js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="../js/main.js"></script>    
  </body>
</html>
