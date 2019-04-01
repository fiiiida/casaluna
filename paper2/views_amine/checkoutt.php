  <?php
  
function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}
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
  <script src="../js/checkout.js"></script>  
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
  </head>

  <body onLoad="document.registration.userid.focus();">
  
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
            
            <img src="../images/casa.png"  height="200" width="200">
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

              Returning customer? <a href="#">Click here</a> to login
            </form>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">


            <form name='registration' action="ajoutCheck.php" onSubmit="return formValidation();   ">
<ul>
<div class="form-group row">
                <div class="col-md-6">
                  <?php $uid = getRealIpUser(); ?>
                  <label for="username" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="firstname"size="50" >
                </div>
                <div class="col-md-6">
                  <label for="lastname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="lastname" size="50">
                </div>
              </div>
              <div class="form-group row">
  
  <div class="form-group row">
                <div class="col-md-12">
                  <label for="address1" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="adress1"  size="50"  placeholder="Street address">
                </div>
              </div>
                <div class="form-group">
                <label for="country"  class="text-black">Country <span class="text-danger">*</span></label>
                <select  name="country" class="form-control"><option selected="" value="Default">(Please select a country)</option>
<option value="AF">Ariana</option>
<option value="AL">Nabeul</option>
<option value="DZ">Gafsa</option>
<option value="AS">Tozeur</option>
<option value="AD">Sfax</option>

                </select>
              </div>
                <div for="zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                  <input type="text" class="form-control"  class="form-control" name="zip">
                </div>
              </div>
               <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="email" size="50">
                </div>
                <div class="col-md-6">
                  <label for="mobile" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="mobile" size="50"  placeholder="Phone Number">
                </div>
              </div>
  <div class="form-group">
                <label  for="desc" class="text-black">Order Notes</label>
                <textarea  name="desc" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>
<li><input type="submit" name="submit" value="Submit" /></li>
</ul>


</form>
            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">

              <div class="col-md-12">

                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
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
            </div>
            
            <div class="row mb-5">
              <div class="col-md-12">

                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">

              <form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Miroir Décoratif<strong class="mx-2">x</strong> 1</td>
                        <td>55.00 dt</td>
                      </tr>
                      <tr>
                        <td>Cactus Décoratif <strong class="mx-2">x</strong>   1</td>
                        <td>65.00 dt </td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">120.00 dt</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>120.00 dt</strong></td>
                      </tr>
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
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
                  </div>

                </div>
              </div>
            </form>
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
          
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="../js/checkout.js"></script>  
  </body>
</html>