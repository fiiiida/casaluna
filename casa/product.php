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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	
	<div id="page">
	<?php include "config.php";
	include "header.php"; ?>
<?PHP
include "entities/produit.php";
include "core/produitC.php";


$produitC1=new produitC();
$listeProduits=$produitC1->afficherProduitsEssai();

?>

	<div id="fh5co-product">
		<div class="container">
			  <div id="fh5co-contact" class="fh5co-no-pd-top">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
          <h2><span>Product </span></h2>
        </div>
      </div>

        <div id="productContainer">
        <?php
      

        
        
               foreach($listeProduits as $row){
                     $image_prod=$row['image'];
                    $repertoire="ViewsAdmin/img/Produit/";
            ?>
			<div class="col-md-4 text-center animate-box">
					<div class="product1">
						<div class="product1-grid" style="background-image:url(<?php echo $repertoire.$image_prod; ?>);">
							<div class="inner">
								<p>
									<a href="AjoutCart.php?action=addToCart&idp=<?php echo $row["idp"]; ?>" class="icon"><i class="icon-shopping-cart"></i></a>
									<a href="details_product.php?idp=<?PHP echo $row['idp']; ?> " class="icon"><i class="icon-eye"></i></a>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="single.html"><?php echo $row["lib_prod"]; ?></a></h3>
							<span class="price"><?php echo $row["prix"]; ?>.DT</span>
						</div>
					</div>
				</div>
        <?php } ?>
            </div>
         
	</div>

	
	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
			
				
				

				  <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
             <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address"> 3, rue Slaheddine El Ayoubi Sidi Bou Saïd 2026</li>
                <li class="phone"><a href="tel://23923929210">+216 24 545 134</a></li>
                <li class="email">Casaluna.design@gmail.com</li>
              </ul>
            </div>
			</div>

		<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>Qui sommes nous ?	</p>					
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.google.com/maps/place/Casaluna+Design/@36.8711008,10.3360315,17z/data=!3m1!4b1!4m5!3m4!1s0x12e2b568d9a756ef:0x61d226fbc2c1f5d1!8m2!3d36.8710965!4d10.3382202" target="_blank"><i class="icon-location"></i></a></li>
							<li><a href="https://www.facebook.com/Casaluna-Design-334212177167837/" target="_blank"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/casalunadesign/?hl=fr" target="_blank"><i class="icon-instagram"></i></a></li>
							
							
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
		<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
 

	</body>
</html>

