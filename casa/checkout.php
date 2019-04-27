<?php
// include database configuration file
include 'dbConfig2.php';

// initializ shopping cart class
include 'core/Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: Product.php");
}
// set customer ID in session
$_SESSION['sessCustomerID'] = 15;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM client WHERE ID = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
     <title>Casaluna &mdash; checkout </title>
    
    <link rel="icon" href="images/casa.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        header('location: auth.html');

}  ?>
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
                  <li class="has-dropdown">
                    <a href="blog.html">articles de décos</a>
                    <ul class="dropdown">
                      <li><a href="#">Ambiance Chic</a></li>
                      <li><a href="#">Ambiance Moderne</a></li>
                      <li><a href="#"> Ambiance Contemporene</a></li>
                      <li><a href="#">Ambiance Bohemiene</a></li>
                    </ul>

                  <li class="has-dropdown">
                    <a href="about.html">accessoires</a>
                    <ul class="dropdown">
                      <li><a href="#">Bracelets</a></li>
                      <li><a href="#">Colier</a></li>
                      <li><a href="#">Couronne</a></li>
                    </ul>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>

                </ul>
              </div>
              <div class="col-sm-5">
                <ul class="fh5co-social-icons">
                  <li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
                    

                       <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                      
                    
                  </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
        
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
          <h2><span>Checkout </span></h2>
        </div>
      </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">

              <form  method="post">
              Returning customer? <a href="#">Click here</a> to login
            </form>
            </div>
          </div>
        </div>

      

            <form method="post">
<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="billing-details">
            <h3 class="uppercase">Billing Details</h3>
            <div class="space30"></div>
              <label class="">Country </label>
              <select name="country" class="form-control">
                <option value="">Select Country</option>
                <option value="AX">Ariana</option>
                <option value="AF">Soukra</option>
                <option value="AL">Cité la gazelle</option>
                <option value="DZ">Lac 1</option>
                <option value="AD">Lac 2</option>
                <option value="AO">Ennaser</option>
                <option value="AI">Mourouj</option>
                <option value="AQ">Zahra</option>
                <option value="AG">Gafsa</option>
                <option value="AR">Gabes</option>
                <option value="AM">Sfax</option>
                <option value="AW">Kef</option>
                <option value="AU">Nabeul</option>
                <option value="AT">Tozeur</option>
                <option value="AZ">Sousse</option>
                <option value="BS">Bizerte</option>
                <option value="BH">Jendouba</option>
                <option value="BD">Gbeli</option>
                <option value="BB">Monastire</option>
              </select>
              <div class="clearfix space20"></div>
              <div class="row">
                <div class="col-md-6">
                  <label>First Name </label>
                  <input name="fname" class="form-control" placeholder=""  type="text">
                </div>
                <div class="col-md-6">
                  <label>Last Name </label>
                  <input name="lname" class="form-control" placeholder=""  type="text">
                </div>
              </div>
            
              <div class="clearfix space20"></div>
              <label>Address </label>
              <input name="address1" class="form-control" placeholder="Street address"  type="text">
              
              <div class="row">
                <div class="col-md-6">
                  <label>Email </label>
                  <input name="email" class="form-control" placeholder="Email"  type="text">
                </div>
                 
                <div class="col-md-6">
                  <label>Postcode </label>
                  <input name="zip" class="form-control" placeholder="Postcode / Zip"  type="text">
                </div>
              </div>
              <div class="clearfix space20"></div>
              <label>Phone </label>
              <input name="phone" class="form-control" id="billing_phone" placeholder=""  type="text">
            
          </div>

            <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                            <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>

                      <tr>
                        <td><?php echo $item["name"]; ?><strong class="mx-2">x</strong><?php echo $item["qty"]; ?></td>
                        <td><?php echo $item["price"].'TND'; ?></td>
                      <?php } ?>
                      </tr>
                      
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black"><?php echo $item["subtotal"].'TND'; ?></td>

                      </tr>
                      </tr>
                      
                        <td class="text-black font-weight-bold"><strong>With Discount</strong></td>
                        <td class="text-black"><?php  if(isset($_SESSION['discount'])) 
                      echo $reduction;
                      else echo $item["subtotal"].'TND';
                    ?></td>
                        
                      </tr>

                       <?php  }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>

                  </div>

                  <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
    <a href="ajoutCommande.php?action=placeOrder" class="btn btn-primary btn-lg py-3 btn-block">Place Order <i class="glyphicon glyphicon-menu-right"></i></a>
                  </div>
                    </form>
        </div>
        
      </div>

              

            </div>
          </div>
            <div class="col-md-6">

            <div class="row mb-5">

              <div class="col-md-12">

           
                </div>
              </div>
          
          <div class="col-md-6">

            <div class="row mb-5">

              <div class="col-md-12">

                
                <div class="p-3 p-lg-5 border">
                  
              <form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                    </div>
                  </div>
                  </form
                

                </div>

              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">

              
            </div>

          </div>
        </div>
        <!-- </form> -->
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