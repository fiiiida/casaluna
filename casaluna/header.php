
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-sm-7 text-left menu-1">
								<ul>
									<li class="active"><a href="index.php">Home</a></li>

									<?php include "entities/categorie.php";
include "core/categorieC.php";

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
										<a href="evenement.php">Evenement</a>
										<ul class="dropdown">
											<li><a href="statutEvent.php">Vos Evenements</a></li>
										</ul>



								</ul>
							</div>
							<div class="col-sm-5">
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="liv.php"><i class="icon-dribbble-with-circle"></i></a></li>

									<li><a href="login.html"><i class="icon-login"></i></a></li>
									<li>
                                        <a href="cart.html" class="site-cart">
                                             <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
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
							<a href="index.php">
			                     <img src="images/casa.png"  height="200" width="200">
							</a>
						</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

