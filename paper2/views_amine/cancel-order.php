<?php
	session_start();
	require_once 'config/connect.php';

$uid = '::1';


if(isset($_POST) & !empty($_POST)){
		$cancel = filter_var($_POST['cancel'], FILTER_SANITIZE_STRING);
		$id = filter_var($_POST['orderid'], FILTER_SANITIZE_NUMBER_INT);

			$cansql = "INSERT INTO ordertracking (orderid, status, message) VALUES ('$id', 'Cancelled', '$cancel')";
			$canres = mysqli_query($connection, $cansql) or die(mysqli_error($connection));
			if($canres){
				$ordupd = "UPDATE orders SET orderstatus='Cancelled' WHERE id=$id";
				if(mysqli_query($connection, $ordupd)){
					header('location: my-account.php');
				}
			}
}

$sql = "SELECT * FROM usersmeta WHERE uid='$uid'";
$res = mysqli_query($connection, $sql);
$r = mysqli_fetch_assoc($res);
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopping Cart</title>
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
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	
	 <div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="container-fluid">
      <div class="row">
        <div class="top-menu">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 text-left menu-1">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                                   <?php include "../entities/categorie.php";
include "../core/categorieC.php";
include "../config.php";
$categorieC=new categorieC();
$listeCategorie=$categorieC->afficherCategorieDecos();
 $listeCategories=$categorieC->afficherCategorieAcces();
?>
                  <li class="has-dropdown">
                    <a>Articles de décos</a>
                    <ul class="dropdown">
                                             <?php foreach($listeCategorie as $row){
                     $leb_cat=$row['leb_cat'];
                   
            ?>
                      <li><a href="#"><?php echo $leb_cat; }?></a></li>
                      
                    </ul>

                  <li class="has-dropdown">
                    <a href="about.html">Accessoires</a>
                    <ul class="dropdown">
                                             <?php foreach($listeCategories as $row){
                     $leb_cat=$row['leb_cat'];
                   
            ?>
                      <li><a href="product.php"><?php echo $leb_cat; }?></a></li>
                      
                    </ul>
                  <li class="has-dropdown">
                    <a href="evenement.html">Evenement</a>
                    <ul class="dropdown">
                      <li><a href="#">Offres</a></li>
                      <li><a href="#">Promotion</a></li>
                    </ul>



                </ul>
              </div>
              <div class="col-sm-5">
                <ul class="fh5co-social-icons">
                  <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>

                  <li><a href="login.html"><i class="icon-login"></i></a></li>
                  <li>
                                        <a href="cart.php" class="site-cart">
                                       
                                             <li><a href="cart.php"><i class="icon-shopping-cart"></i></a></li>
                                        </a>
                                    </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center menu-2">
          <div id="fh5co-logo"><h1>
              <a href="index.html">
                           <img src="../images/casa.png"  height="200" width="200">
              </a>
            </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

   
  <div id="fh5co-contact" class="fh5co-no-pd-top">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
          <h2><span>Cancel Order </span></h2>
           <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
  <thead>
	
	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
					<div class="page_header text-center">
						<h2>Shop - Cancel Order</h2>
						<p>Do you want to cancel Order?</p>
					</div>
<form method="post">
<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="billing-details">
						<h3 class="uppercase">Cancel Order</h3>

				<table class="cart-table account-table table table-bordered">
				<thead>
					<tr>
						<th>Order</th>
						<th>Date</th>
						<th>Status</th>
						<th>Payment Mode</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>

				<?php
					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
						header('location: my-account.php');
					}
					$ordsql = "SELECT * FROM orders WHERE id='$oid'";
					$ordres = mysqli_query($connection, $ordsql);
					while($ordr = mysqli_fetch_assoc($ordres)){
				?>
					<tr>
						<td>
							<?php echo $ordr['id']; ?>
						</td>
						<td>
							<?php echo $ordr['timestamp']; ?>
						</td>
						<td>
							<?php echo $ordr['orderstatus']; ?>			
						</td>
						<td>
							<?php echo $ordr['paymentmode']; ?>
						</td>
						<td>
							DT <?php echo $ordr['totalprice']; ?>/-
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>	

						<div class="space30"></div>


							<div class="clearfix space20"></div>
							<label>Reason :</label>
							<textarea class="form-control" name="cancel" cols="10"> </textarea>

					<input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>">		 
						<div class="space30"></div>
					<input type="submit" class="button btn-lg" value="Cancel Order">
					</div>
				</div>
				
			</div>
		
		</div>		
</form>		
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
