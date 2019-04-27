
<?php
// initializ shopping cart class
include 'core/Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Casaluna &mdash; panier</title>
    
    <link rel="icon" href="images/casa.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
      <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("modifierCart.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
  </head>
  <body>
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)

 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

   echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br/>'; 
  echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
    echo '<a href="./auth.html">Cliquer pour se connecter</a>';

}  ?>
<div class="fh5co-loader"></div>
  
  <div id="page">
  <nav class="fh5co-nav" role="navigation">
    <div class="container-fluid">
      <div class="row">
        <div class="top-menu">
          <div class="container">
            <div class="row">
              <div class="col-sm-7 text-left menu-1">
                <ul>
                 <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  <li class="has-dropdown">
                    <a href="blog.html">Articles de décos</a>
                    <ul class="dropdown">
                      <li><a href="#">Ambiance Chic</a></li>
                      <li><a href="#">Ambiance Moderne</a></li>
                      <li><a href="#"> Ambiance Contemporene</a></li>
                      <li><a href="#">Ambiance Bohemiene</a></li>
                    </ul>
</li>
                  <li class="has-dropdown">
                    <a href="about.html">Accessoires</a>
                    <ul class="dropdown">
                      <li><a href="#">Bracelets</a></li>
                      <li><a href="#">Colier</a></li>
                      <li><a href="#">Couronne</a></li>
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
                      

                       <li><a href="cartt.php"><i class="icon-shopping-cart"></i></a></li>
                      
                    
                
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 text-center menu-2">
          <div id="fh5co-logo">
            <h1>
              <a href="index.html">
            
            <img src="images/casa.png"  height="200" width="200">
              </a>
            </h1>
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
        </div>
      </div>
     
        
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
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>

            <td class="product-thumb"><img src='<?php echo "ViewsAdmin/img/Produit/".$item['image']; ?>'height="160" width="160"></td>
            <td class="product-name"><?php echo $item["name"]; ?></td>
            <td><?php echo $item["price"].' TND'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo $item["subtotal"].' TND'; ?></td>
            <td>
                <a class="remove" href="supprimerCart.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="btn btn-primary btn-sm">X</i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
           
            <?php if($cart->total_items() > 0){ ?>
            
            <?php } ?>
        </tr>
    </tfoot>
    </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button onclick="window.location='product.php'"class="btn btn-primary btn-sm btn-block" >Continue Shopping</button>
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
                    <strong>Total <?php echo $cart->total().' TND'; ?>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong>Total <?php echo $cart->total().' TND'; ?>
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
              <img src="images/article/photo4.jpg" alt="Image placeholder" height="150" width="150"">
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
         
          </div>
          
        </div>
      </div>
    </footer>
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