
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
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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
	<script src="rating.js"></script>
	<link rel="stylesheet" href="theme.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
          <style>
    .error-message {
        padding: 0 0 0 30px;
        display: inline;
        color: #ff5b5b;
        display: none;
    
    }
    </style>
	</head>
	<body>
		
	
	
	<div id="page">

<?php 
include "config.php";
include "header.php"; 
?>

	<aside id="fh5co-hero">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="flexslider animate-box">
						<ul class="slides">
					   	<li style="background-image: url(images/article/photo.jpg);">
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
					   	<li style="background-image: url(images/article/photo1.jpg);">
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
					   	<li style="background-image: url(images/article/photo2.jpg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-10 col-md-offset-1 slider-text">
						   				<div class="slider-text-inner">
						   					<h1>What Would You Like To Learn?</h1>
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
					<a href="#" class="featured text-center animate-box" style="background-image: url(images/article/photo3.jpg);">
						<div class="desc">
							<span class="date">Dec 25, 2016</span>
							<h3>Every Start has an End</h3>
							<span class="category">Inspirational</span>
						</div>
					</a>
					<a href="#" class="featured text-center animate-box" style="background-image: url(images/article/photo4.jpg);">
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
<?PHP
include "core/promotionC.php";

$event1C=new PromotionC();
$listePromotion=$event1C->afficherPromotionsFront();

//var_dump($listeEmployes->fetchAll());
?>
	<div id="fh5co-blog-popular">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center fh5co-heading">
					<h2><span>Promotion Produit</span></h2>
				</div>
			</div>
			<div class="row">
				<?php
foreach($listePromotion as $row){
  $image=$row['image'];
  $rep="ViewsAdmin/img/Produit/"
	?>
				<div class="col-md-3">
					<div class="fh5co-blog animate-box">
						<img class="img-responsive" src="<?PHP echo $rep.$image;?>">
						<div class="blog-text">
							<h3><?PHP echo $row['lib_prod']; ?></h3>
							<h3><?PHP echo $row['Pourcentage']; ?></h3>
						</div> 
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	
	</div>

	<div id="fh5co-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-padded-right">
					<div class="row">
						<div class="col-md-12">
							<div class="fh5co-blog animate-box">
								<div class="title title-pin text-center">
									<span class="posted-on">Nov. 15th 2016</span>
									<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
									<span class="category">Lifestyle</span>
								</div>
								<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								<div class="blog-text text-center">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
									<ul class="fh5co-social-icons">
										<li>Share:</li>
										<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
									</ul>
								</div> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-blog animate-box">
								<div class="title text-center">
									<span class="posted-on">Nov. 15th 2016</span>
									<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
									<span class="category">Lifestyle</span>
								</div>
								<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
								<div class="blog-text text-center">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<ul class="fh5co-social-icons">
										<li>Share:</li>
										<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
									</ul>
								</div> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-blog animate-box">
								<div class="title text-center">
									<span class="posted-on">Nov. 15th 2016</span>
									<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
									<span class="category">Lifestyle</span>
								</div>
								<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								<div class="blog-text text-center">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<ul class="fh5co-social-icons">
										<li>Share:</li>
										<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
									</ul>
								</div> 
							</div>

						</div>
						<div class="col-md-6">
							<div class="fh5co-blog animate-box">
								<div class="title text-center">
									<span class="posted-on">Nov. 15th 2016</span>
									<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
									<span class="category">Lifestyle</span>
								</div>
								<a href="#"><img class="img-responsive" src="images/blog-2.jpg" alt=""></a>
								<div class="blog-text text-center">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<ul class="fh5co-social-icons">
										<li>Share:</li>
										<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
									</ul>
								</div> 
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-blog animate-box">
								<div class="title text-center">
									<span class="posted-on">Nov. 15th 2016</span>
									<h3><a href="#">Modeling &amp; Stylist in USA</a></h3>
									<span class="category">Lifestyle</span>
								</div>
								<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								<div class="blog-text text-center">
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<ul class="fh5co-social-icons">
										<li>Share:</li>
										<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
										<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
									</ul>
								</div> 
							</div>
						</div>
					</div>
				</div>
				
				<aside id="sidebar">
					<div class="col-md-3">
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>About Me</span></h2>
							</div>
							<div class="fh5co-staff">
								<img src="images/user-2.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
								<h3>Jean Smith</h3>
								<strong class="role">CEO, Founder</strong>
								<p>Quos quia provident conse culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita.</p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
									<li><a href="#"><i class="icon-github"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>Latest Posts</span></h2>
							</div>
							<div class="blog-entry">
								<a href="#">
									<img src="images/blog-1.jpg" class="img-responsive" alt="">
									<div class="desc">
										<span class="date">Dec. 25, 2016</span>
										<h3>Most Beautiful Site in 2016</h3>
									</div>
								</a>
							</div>
							<div class="blog-entry">
								<a href="#">
									<img src="images/blog-2.jpg" class="img-responsive" alt="">
									<div class="desc">
										<span class="date">Dec. 25, 2016</span>
										<h3>Most Beautiful Site in 2016</h3>
									</div>
								</a>
							</div>
							<div class="blog-entry">
								<a href="#">
									<img src="images/blog-1.jpg" class="img-responsive" alt="">
									<div class="desc">
										<span class="date">Dec. 25, 2016</span>
										<h3>Most Beautiful Site in 2016</h3>
									</div>
								</a>
							</div>
						</div>
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>Suggestion</span></h2>
							</div>
                             <div style="text-align: center;">
                            <form method="POST" action="ViewsClient/ajoutSuggestionP.php">
                                 <h3>Donnez votre Sujet</h3>
                                <input type="text" name="sujet" id="sujetsug"/>
                                <div class="error-message">erreur</div>
                                <br><br>
                                <h3>Donnez votre Commentaire</h3>
                               <textarea rows="4" cols="20" name="commentaire" id="comsug"></textarea>
                               <div class="error-message">erreur</div>
                                <br><br>
                                <input type="submit" name="ajouter" value="ajouter" id="ajoutersug" class="btn btn-primary btn-sm">
                                </form>
							</div>
						</div>

												<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>Reclamation</span></h2>
							</div>
                             <div style="text-align: center;">
                            <form method="POST" action="ViewsClient/ajoutReclamtion.php">
                                
                                 <h3>Donnez votre Sujet</h3>
                                <input type="text" name="sujetReclamation" id="sujetrec" />
                                <div class="error-message">erreur</div>
                                <br><br>
                                <h3>Donnez votre Commentaire</h3>
                                 <textarea rows="4" cols="20" name="commentaireReclamation" id="comrec"></textarea>
                                <div class="error-message">erreur</div>
                                <br><br>
                                <input type="submit" name="ajouter" value="ajouter" id="ajouterrec" class="btn btn-primary btn-sm">
                                </form>
							</div>
						</div>
						<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span >Votre Avis</span></h2>
							</div>
                            <?php

	require "lib-rating.php";
$rate = new Rating();
 ?>
							<div class="row">
                                <div style="text-align: center;">
     <div id="rating">
         <h3>Donnez votre Sujet</h3>
      <input type="text" id="Sujet" />
      <div class="error-message">erreur</div>
        <br><br>
    <h3>Donnez votre Commentaire</h3>
         <textarea rows="4" cols="20" id="commentaire" >
</textarea>
          <div class="error-message">erreur</div>
   <h3 class="card-title">Note Service Du Site Web:</h3>
        <br>
      <?php
      for ($i=0; $i<5; $i++) {
        printf("<div class='star' onmouseover='rating.highlight(%u)' onclick='rating.save(%u)'></div>", $i+1, $i+1);
      }
      ?>
         <a href="ViewsClient/avis.php" class="btn btn-primary btn-sm">Afficher</a>
    </div>

    
    
</div>
								<div  class="col-md-12">
                                        
								</div>
							</div>
						</div>
							<div class="side animate-box">
							<div class="col-md-12 col-md-offset-0 text-center fh5co-heading fh5co-heading-sidebar">
								<h2><span>Nos Services</span></h2>
							</div>
							<div class="fh5co-staff">
								<div style="text-align: center;">
                            <form method="POST" action="ViewsClient/ajoutSuggestion.php">
                                 <h4>Si vous avez besoin d'une autre localisatio citez là</h4>
                                <input type="text" name="localisation" id="localisation"/>
                                <div class="error-message">erreur</div>
                                <br><br>
                                <h4>Veuillez choisir un Service puis le noter par la suite:</h4>
                                <select name="Service" id="service">
                  <option>Veuillez Choisir Un Service</option>    
                  <option value="Communication">Communication</option>    
                  <option value="Qualité Du Produit">Qualité Du Produit</option>    
                  <option value="Rapidité Du Service Livraison">Rapidité Du Service Livraison </option>    
                  <option value="Qualité Du Produit à l'arrivé ">Qualité Du Produit à l'arrivé </option>       
                </select>
                                 <div class="error-message">erreur</div>
                                <br><br>
                                 <h4>Note Service:</h4>
                                <input type="number" name="noteService" id="noteService"/>
                                 <div class="error-message">erreur</div>
                                <br><br>
                                <h4>Quelle est Votre degré de satisfaction de nos services?</h4>
                                <input type="number" name="serviceGlobal" id="serviceGlobal"/>
                                <div class="error-message">erreur</div>
                                <br><br>
                                <input type="submit" name="ajouter" value="Ajouter" class="btn btn-primary btn-sm" id="ajouterservice">
                                </form>
							</div>
								
							</div>
						</div>
					</div>
				</aside>

			</div>
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
				<div class="insta" style="background-image: url(images/insta-1.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
				<div class="insta" style="background-image: url(images/insta-2.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
				<div class="insta" style="background-image: url(images/insta-3.jpg);"></div>
			</div>
			<div class="col-md-3 nopadding animate-box" data-animate-effect="fadeIn">
				<div class="insta" style="background-image: url(images/insta-4.jpg);"></div>
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
    <script src="js/verifFeedback.js"></script>
	</body>
</html>

