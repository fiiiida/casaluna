
<!DOCTYPE html>
<html lang="en">
  <head> 
     <title>Casaluna &mdash; effectuation de livraison </title>
    
    <link rel="icon" href="images/casa.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Facebook and Twitter integration -->

<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

   echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br/>'; 
  echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
    echo '<a href="./auth.html">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>
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
  <?php 
include "config.php";
include "header.php"; 
?>
  <div id="fh5co-contact" class="fh5co-no-pd-top">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
          <h2><span>Effectuation de livraison </span></h2>
        </div>
      </div>



<aside id="fh5co-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="flexslider animate-box">
            <ul class="slides">
              <li style="background-image: url(images/article/photo9.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1 slider-text">
                      <div class="slider-text-inner">
                        <h1>Not Every Project Needs To Be Perfect</h1>
                        <p class="ct"><a href="#">Learn More <i class="icon-arrow-right"></i></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li style="background-image: url(images/article/photo8.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1 slider-text">
                      <div class="slider-text-inner">
                        <h1>Minimal &amp; Clean Blog WordPress</h1>
                        <p class="ct"><a href="#">Learn More <i class="icon-arrow-right"></i></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
                    
              </ul>
            </div>
        </div>
        <div class="col-md-4">
          <a href="#" class="featured text-center animate-box" style="background-image: url(images/article/photo6.jpg);">
            <div class="desc">
              <span class="date">Dec 25, 2016</span>
              <h3>Every Start has an End</h3>
              <span class="category">Inspirational</span>
            </div>
          </a>
          <a href="#" class="featured text-center animate-box" style="background-image: url(images/article/photo5.jpg);">
            <div class="desc">
              <span class="date">Dec 25, 2016</span>
              <h3>Most Beautiful Website in 2016</h3>
              <span class="category">Inspirational</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </aside> 
<br>


        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Details de la livraison</h2>
            <div class="p-3 p-lg-5 border">

              <form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
                <div class="col-md-6">
                  <label for="cin_livreur" class="text-black">CIN livreur <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="cin_livreur" name="cin_livreur">
                </div>
             
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="nomclient" class="text-black">nomclient <span class="text-danger">*</span></label>
                  <input type="nomclient" class="form-control" id="nomclient" name="nomclient">
                </div>
                 <div class="form-group">
                <label for="c_country" class="text-black">satisfaction<span class="text-danger">*</span></label>
                <select id="c_country" class="form-control">
                  <option value="1">selectionnez</option>    
                  <option value="2">Satisfait</option>    
                  <option value="3">moyennement satisfait</option>    
                  <option value="4">non satisfait</option>    
                 
                </select>
              </div>
                <div class="form-group">
                <label for="effectue" class="text-black">effectue<span class="text-danger">*</span></label>
                <select id="effectue" class="form-control">
                  <option value="1">selectionnez</option>    
                  <option value="2">Seffectue</option>     
                  <option value="3">non effectue</option>    
                 
                </select>
              </div>
                
               
              </div>
              <button class="btn btn-primary btn-sm" type="submit" id="button-addon2" name="ajouter" value="ajouter">Ajouter</button>
               <div class="form-group">
                <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> un avis?</label>
                <div class="collapse" id="create_an_account">
                  <div class="py-2">
                    <p class="mb-3">Postez votre avis .</p>
                    <div class="form-group">
                      <label for="c_account_password" class="text-black">Account Password</label>
                      <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                    </div>
                     
                  </div>
                </div>
              </div>


    

              <div class="form-group">
                <label for="c_order_notes" class="text-black">un commentaire</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>
</form>
            </div>
          </div>
        
         
          <div class="col-md-6">

            <div class="row mb-5">

              <div class="col-md-12">

                <h2 class="h3 mb-3 text-black">Ittineraire livraison</h2>
                <div class="p-3 p-lg-5 border">
                  
              <form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi" method="post">
                  <input id="origin-input" class="controls" type="text"
        placeholder="Enter an origin location">
 
    <input id="destination-input" class="controls" type="text"
        placeholder="Enter a destination location">
 
    <div id="mode-selector" class="controls" style="display: none">
      <input type="radio" name="type" id="changemode-walking" checked="checked" >
      <label for="changemode-walking">Walking</label>
 
      <input type="radio" name="type" id="changemode-transit">
      <label for="changemode-transit">Transit</label>
 
      <input type="radio" name="type" id="changemode-driving">
      <label for="changemode-driving">Driving</label>
    </div>
 
    <div id="map">
      
    </div>
                  </div>
                  </form
                  </div>

                </div>

              </div>
            </div>
              <br>
          <br>
            <div class="row mb-5">
              <div class="col-md-12">

                <h2 class="h3 mb-3 text-black">La commande</h2>
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
                    <button class="btn btn-primary btn-lg py-3 btn-block"  href="index.html">Faire de nouveaux achats</button>
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

    <div id="fh5co-instagram">
    <div class="container">
      <div class="row animate-box">
        <div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
          <h2><span>Instagram Posts</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
        <div class="insta" style="background-image: url(images/img1.jpg);"></div>
      </div>
      <div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
        <div class="insta" style="background-image: url(images/img2.jpg);"></div>
      </div>
      <div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
        <div class="insta" style="background-image: url(images/img3.jpg);"></div>
      </div>
      <div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
        <div class="insta" style="background-image: url(images/img4.jpg);"></div>
      </div>
    </div>
  </div>

   
    <footer id="fh5co-footer" role="contentinfo">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-4 fh5co-widget">
          <h4>Paper</h4>
          <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
        </div>
        <div class="col-md-4 col-md-push-1">
          <h4>Links</h4>
          <ul class="fh5co-footer-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog.html">articles de décos</a></li>
            <li><a href="about.html">accessoires</a></li>
          </ul>
        </div>

        <div class="col-md-4 col-md-push-1">
          <h4>Contact Information</h4>
          <ul class="fh5co-footer-links">
            <li>3 , rue Slaheddine El Ayoubi Sidi Bou Said, 2026</li>
            <li><a href="tel://1234567920">+ 216 24 545 134</a></li>
            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
            
          </ul>
        </div>

      </div>

      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>Qui sommes nous ?  </p>          
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

    <script>
 
 
 
 
function initMap() {
  var origin_place_id = null;
  var destination_place_id = null;
  var travel_mode = google.maps.TravelMode.WALKING;
  var map = new google.maps.Map(document.getElementById('map'), {
    mapTypeControl: false,
    center: {lat: 48.8737793, lng: 2.2950156},
    zoom: 13
  });
 
 
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  directionsDisplay.setMap(map);
 
  var origin_input = document.getElementById('origin-input');
  var destination_input = document.getElementById('destination-input');
 
 
 
  var modes = document.getElementById('mode-selector');
 
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(origin_input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(destination_input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(modes);
 
  var origin_autocomplete = new google.maps.places.Autocomplete(origin_input);
  origin_autocomplete.bindTo('bounds', map);
  var destination_autocomplete =
      new google.maps.places.Autocomplete(destination_input);
  destination_autocomplete.bindTo('bounds', map);
 
  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, mode) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      travel_mode = mode;
    });
  }
  setupClickListener('changemode-walking', google.maps.TravelMode.WALKING);
  setupClickListener('changemode-transit', google.maps.TravelMode.TRANSIT);
  setupClickListener('changemode-driving', google.maps.TravelMode.DRIVING);
 
  function expandViewportToFitPlace(map, place) {
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(1);
    }
  }
 
  origin_autocomplete.addListener('place_changed', function() {
    var place = origin_autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }
    expandViewportToFitPlace(map, place);
 
    // If the place has a geometry, store its place ID and route if we have
    // the other place ID
    origin_place_id = place.place_id;
    route(origin_place_id, destination_place_id, travel_mode,
          directionsService, directionsDisplay);
  });
 
  destination_autocomplete.addListener('place_changed', function() {
    var place = destination_autocomplete.getPlace();
 
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }
    expandViewportToFitPlace(map, place);
 
    // If the place has a geometry, store its place ID and route if we have
    // the other place ID
    destination_place_id = place.place_id;
    route(origin_place_id, destination_place_id, travel_mode,
          directionsService, directionsDisplay);
  });
 
  /*function route(origin_place_id, destination_place_id, travel_mode,
                 directionsService, directionsDisplay) {
    if (!origin_place_id || !destination_place_id) {
      return;
    }
    directionsService.route({
      origin: {'placeId': origin_place_id},
      destination: {'placeId': destination_place_id},
      travelMode: travel_mode
    }, function(response, status) {
      if (status === google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }*/
 function route(origin_place_id, destination_place_id, travel_mode,
    directionsService, directionsDisplay) {
    if (!origin_place_id || !destination_place_id) {
        return;
    }
    directionsService.route({
        origin: {
            'placeId': origin_place_id
        },
        destination: {
            'placeId': destination_place_id
        },
        travelMode: travel_mode
    }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            // -------------------------------------
            // mais qu'y a t-il dans la reponse !?!
            // -------------------------------------
            console.log(response.routes[0].legs[0]);
 
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
  }
}
 function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) 
 {
    var R = 6371; // Radius of the earth in km
    var dLat = deg2rad(lat2-lat1);  // deg2rad below
    var dLon = deg2rad(lon2-lon1); 
    var a = 
    Math.sin(dLat/2) * Math.sin(dLat/2) +
    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
    Math.sin(dLon/2) * Math.sin(dLon/2); 
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
    var d = R * c; // Distance in km
    return d;
  
 
   function deg2rad(deg) {
   return deg * (Math.PI/180);
  }
 
}
 
 
    </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCos12fMCZ3i2Uk3Wp-hYx7vmQSHuc1ueA&signed_in=true&libraries=places&callback=initMap"
        async defer></script>
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