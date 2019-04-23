<?PHP
include "../../core/ProduitC.php";
include "../../config.php";
$produitC=new ProduitC();
if (isset($_POST["idp"])){
	$produitC->supprimerProduits($_POST["idp"]);
	header('Location: afficherProduit.php');
}

?>