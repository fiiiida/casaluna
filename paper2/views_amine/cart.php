<?php 
session_start();

include "../entities/produit.php";
include "../core/produitC.php";

require_once 'config/connect.php';
$cart = $_SESSION['cart'];
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
                                          <?php $cart = $_SESSION['cart']; ?>
                                             <li><a href="cart.php"><i class="icon-shopping-cart"></i><em><?php
                echo count($cart); ?></em></a></li>
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
          <h2><span>Shopping </span></h2>
           <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
  <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
              <tbody>
				<?php
				$total = 0;
					//print_r($cart);
	   	foreach ($cart as $key => $value) {
						$cartsql = "SELECT * FROM produit WHERE id_prod=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

				 ?>
	
					<tr>
<td class="product-thumb"><img src='<?php echo "../images/article/".$cartr['image']; ?>'height="160" width="160"></td>
<td class="product-name"><?php echo $cartr["lib_prod"]; ?><br />

<td><?php echo $cartr["prix"]." dt"; ?></td>
<td>
<form method='post' action=''>
<input type='hidden' name='id_prod' value="<?php echo $cartr['id_prod']; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($value['quantity']==1) echo "selected";?> value="1">1</option>
<option <?php if($value['quantity']==2) echo "selected";?> value="2">2</option>
<option <?php if($value['quantity']==3) echo "selected";?> value="3">3</option>
<option <?php if($value['quantity']==4) echo "selected";?> value="4">4</option>
<option <?php if($value['quantity']==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>


<td><?php echo $cartr["prix"]*$value['quantity']." dt"; ?></td>
<td>

<a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="btn btn-primary btn-sm">X</i></a>


</td>
</tr>
<?php
$total += ($cartr["prix"]*$value['quantity']);
}

?>

</tbody>
</table>		
      

</div>


</div>
    <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <a href="product.php"  class="icon"><i class="btn btn-primary btn-sm btn-block">Continue Shopping</i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="round 1">
                <button class="btn btn-primary btn-sm">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo $total." dt"; ?></strong>

                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo $total." dt"; ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
  </div>
        </div>
      </div>

  </div>

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
