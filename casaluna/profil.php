<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['l']) && isset($_SESSION['p'])) 
{ 

   echo 'Votre login est <b>'.$_SESSION['l'].'</b> <br> Client <br/> Identifiant de la session est :'.session_id().'</br>'; 
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

<!DOCTYPE html>
<html lang="en">
  <head> 
     <title>Casaluna &mdash; LOGIN </title>
    
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
  <script src="js/checkout.js"></script>  
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
          <h2><span>s'inscrire</span></h2>
        </div>
      </div>

<form method="POST" action="ViewsClient/ajouter.php">
<table>
<tr>
<td>Identifiant</td>
<td><input type="number" name="identifiant" id="identifiant" required></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" id="nom" onkeypress="verifierCaracteres(event); return false;" required="nom"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" id="prenom" onkeypress="verifierCaractereslastname(event); return false;" required></td>
</tr>
<tr>
<td>Sexe</td>
<td><input type="text" name="sexe" id="sexe" onkeypress="verifierCaracteressexe(event); return false;" required></td>
</tr>
<tr>
<td>Age</td>
<td><input type="number" name="age" required></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" required></td>
</tr>
<tr>
<td>E-mail</td>
<td><input type="email" name="email" required></td>
</tr>
<tr>
<td>Mot de passe</td>
<td><input type="password" name="mdp" id="password" required></td>
</tr>
<tr>
<td>Confirmer mot de passe</td>
<td><input type="password" name="mdp" id="password2" required></td>
</tr>
<tr>
<td>Fidelite</td>
<td>
  <input type="text" name="fidelite" id="fidelite" onkeypress="verifierCaracteresfidelite(event); return false;" required></td>
</tr>
<tr>
<td></td>
<td>
<!--<button name="verifier" onclick="verif()">ajouter</button> -->
  <input type="submit" name="ajouter" value="Inscription"   ></td>
</tr>
</table>
    <p>Already have an account? <a href="auth.html">Login here</a>.</p>
</form>
<script type="text/javascript" src="js/clientcontrolesaisie.js"></script>


  


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


          
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
          
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/checkout.js"></script>  
  </body>
</html>