
<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Casaluna design</title>
    <link rel="icon" type="image/jpg" href="images/casalunalogo.jpg" sizes="96x96">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FreeHTML5.co
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
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
      
<!------ Include the above in your HEAD tag ---------->
    
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
                                   <?php include "entities/categorie.php";
include "core/categorieC.php";
include "config.php";
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
                                      
                                             <li><a href="cart.php"><i class="icon-shopping-cart"></i><em>
                                                 
                                             </em></a></li>
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
                           <img src="images/casa.png"  height="200" width="200">
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
          <h2><span>Login</span></h2>
           <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
  <thead>
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        
                       
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <form id="form1" name="form1" method="POST" action="connexion.php"">
                                    <div class="form-group">
                                        <input type="text" name="login" id="login"  class="form-control" placeholder="Username" >
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="button" id="button" class="form-control btn btn-login" value="Log In">

                                </form>
                                            </div>
                                        </div>
                                    </div>
    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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